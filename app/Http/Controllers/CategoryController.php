<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cat = Category::all();
        return view('categories.index', ['categories'=>$cat]);
    }

    // public function indexDrink()
    // {
    //     $category = Category::all();
    //     return view('layouts.home', ['categories'=>$category]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function createCat()
    {
        return view("categories.insert");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function catStore(Request $request)
    {
        // $validated = $request->validate([
        //     'category_name'=>'required|unique:categories|max:150',
        // ], [
        //     'required' => 'The :attribute field is required',
        //     'category_name.size' => 'The :attribute must be exactly :size.'
        // ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        // return back()->with("category Add Successfully");
        return redirect()->route("categoriesList")->with('success','category Add Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editCat(string $id)
    {
        $category = Category::findOrFail($id);
        return view(" categories.update ", ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function updateCat(Request $request , string $id)
    {
        Category::where('id' , $id)->update([
            'category_name' => $request -> category_name,
        ]);
        return redirect()->route("categoriesList");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        Category::where('id' , $id)->delete();
        return redirect()->route("categoriesList");
    }

    public function deleteCat(string $id)
    {
        Category::where('id' , $id)->delete();
        return redirect()->route("categoriesList");
    }
}
