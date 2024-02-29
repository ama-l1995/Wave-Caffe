<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Http\Requests\StoreBeverageRequest;
use App\Http\Requests\UpdateBeverageRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Traits\Common;
use Symfony\Component\Console\Input\Input;

class BeverageController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bever = Beverage::all();
        return view('beverages.index', ['beverages'=>$bever]);
    }

    public function indexSpecial()
    {
        $spic = Beverage::all();
        return view('layouts.home',['beverages'=>$spic]);
        // $spic = Beverage::all();
        // return view('layouts.home', ['beverages'=>$spic]);
    }

    public function beverDrink()
    {
        // $beverages = Category::findOrFail($id)->beverages;
        // $beverages = Beverage::beverages()->paginate(10);
        // $beverages = Beverage::select('id', 'beverage_id')->get();

        $categories = Category::latest()->limit(3)->get();
        // $beverages = Beverage::with('categories')->find($id);
        $beverages = Beverage::all();
        return view('layouts.home', compact('categories' , 'beverages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function creatBever()
    {
        $categories = Category::get();
        return view("beverages.insert", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function beverStore(Request $request)
    {
        $messages = $this->messages();
        $data = $request->validate([
             'Title'=>'required|string|max:50',
             'Price'=> 'required',
             'image' => 'required|mimes:png,jpg,jpeg|max:2048',
             'category_id'=> 'required',
            ], $messages);
        $fileName = $this->uploadFile($request->image, 'asset/img');
        $data['image'] = $fileName;
        $data['Content'] = $request->Content;
        $data['Published']= isset($request->Published) ? 1 : 0;
        $data['Special']= isset($request->Special) ? 1 : 0;
        Beverage::create($data);
        return redirect()->route("beveragesList")->with('success','Beverage Add Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $bever = Beverage::findOrFail($id);
        return view("beverages.show ", compact('bever'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editBever(string $id)
    {
        $bever = Beverage::findOrFail($id);
        $categories = Category::select('id', 'category_name')->get();
        return view("beverages.update",compact('bever', 'categories') );
    }


    /**
     * Update the specified resource in storage.
     */
    public function updateBever(Request $request , string $id)
    {
        $messages = $this->messages();
        $data = $request->validate([
             'Title'=>'required|string|max:50',
             'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048',
             'category_id' => 'required',
            ], $messages);
        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'asset/img');
            $data['image'] = $fileName;
        }
        $data['Published'] = isset($request->Published) ? 1 : 0;
        $data['Special'] = isset($request->Special) ? 1 : 0;
        $data['Price'] = $request->Price;
        Beverage::where('id', $id)->update($data);
        return redirect()->route("beveragesList")->with('success','Beverage Add Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteBever(string $id)
    {
        Beverage::where('id' , $id)->delete();
        return redirect()->route("beveragesList");
    }

    public function trashed(){
        $bever = Beverage::onlyTrashed()->get();
        return view('trashed', compact('bever'));
    }

    public function restore(string $id): RedirectResponse
    {
        Beverage::where('id', $id)->restore();
        return redirect('beveragesList');
    }

    public function category(string $id)
    {
        $category = Category::findOrFail($id)->beverages;
        foreach($category as $beverage)
        {
            return view('beverages.insert', compact('category'));
        }
    }

    public function upload(Request $request){
        $file_extension = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $file_extension;
        $path = 'asset/img';
        $request->image->move($path, $fileName);
        return 'Uploaded';

    }

    public function messages(){
        return [
            'title.required'=>'title is required',
            'title.string'=>'Should be string',
            'description.required'=> 'should be text',
            'image.required'=> 'Please be sure to select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
            ];
    }


}
