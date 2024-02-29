<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function insertUser()
    {
        return view("users.insertUser");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function userStore(Request $request)
    {
        $messages = $this->messages();
        $dataUsers = $request->validate([
             'name'=>'required|string|max:50',
             'email'=> 'required',
             'password' => 'required',
            ], $messages);
        $dataUsers['admin']= isset($request->admin) ? 0 : 1;
        User::create($dataUsers);
        return redirect()->route("usersList")->with('success','User Add Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editUser(string $id){
        $user = User::findOrFail($id);
        return view(" users.updateUser ", ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateUser(Request $request ,string $id)
    {
        $messages = $this->messages();
        $updateUsers = $request->validate([
             'name'=>'required|string|max:50',
             'email'=> 'required',
             'password' => 'required',
            ], $messages);
            $updateUsers['admin']= isset($request->admin) ? 1 : 0;
            User::where('id', $id)->update($updateUsers);
        // User::where('id' , $id)->update([
        //     'name' =>$request ->name,
        //     'email' =>$request ->email,
        //     'password' =>$request ->password,
        //     'admin' =>$request->admin,
        // ]);
        // return response("User Updated Successfully")
        return redirect()->route("usersList")
    ;}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function messages(){
        return [
            'name.required'=>'name is required',
            'name.string'=>'Should be string',
            'email.uniqid'=> 'Email uniqid',

            ];
    }
}
