<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexMsg()
    {
        $contact = Contact::all();
        return view('email.message', compact('contact'));
    }

    public function submit(Request $request)
    {
        $cont = new Contact();
        $cont->full_Name = $request->full_Name;
        $cont->email = $request->email;
        $cont->content = $request->content;
        $cont->save();
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendMsg()
    {
        $content = Contact::latest()->first();
        Mail::to('admin@gmail.com')->send(new ContactMail($content));
        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeMsg(Request $request)
    {
        $cont = new Contact();
        $cont->full_Name = $request->full_Name;
        $cont->email = $request->email;
        $cont->content = $request->content;
        $cont->save();
        // return back()->with("category Add Successfully");
        return redirect()->route("indexMsg");
    }

    /**
     * Display the specified resource.
     */
    public function showMsg(string $id)
    {
        $cont = Contact::findOrFail($id);
        return view(" email.show ", compact('cont'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteMsg(string $id)
    {
        Contact::where('id' , $id)->delete();
        return redirect()->route("indexMsg");
    }

    // public function unreadCount()
    // {
    //     $messages = Contact::all();
    //     $unreadMessagesCount = Auth::user()->unreadMsgs()->where('read', false)->count();
    //         $unreadCount = Auth::user()->unreadMessagesCount()->count();

    //         return view('admin.layout', compact('unreadCount'));
    //     }

        // public function showUnreadMessagesCount()
        // {
        //     $unreadMessagesCount = Auth::user()->messages()->where('read', false)->count();

        //     return view('your-view', compact('unreadMessagesCount'));
        // }

}
