<?php

namespace App\Http\Controllers;

use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Mail\Message as MessageMail;

class MessageController extends Controller
{
//     public function unreadMessagesCount()
// {
//     $unreadCount = Message::where('read', false)->count();
//     return $unreadCount;
// }

// public function showDashboard()
// {
//     $unreadNotificationCount = Auth::user()->unreadNotifications->count();
//     return view('admin.layout', ['unreadNotificationCount' => $unreadNotificationCount]);
// }

    // public function showDashboard()
    // {
    //     $unreadMessageCount = $this->unreadMessagesCount();
    //     return view('admin.layout', ['unreadMessageCount' => $unreadMessageCount]);
    // }

}

