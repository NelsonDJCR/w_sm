<?php

namespace App\Http\Controllers;

use App\AdmNotification;
use App\User;
use Illuminate\Http\Request;
use App\Notifications\AdminNotification;
use Illuminate\Notifications\DatabaseNotification;

class AdmNotificationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::getList();
        return view('adm_notifications.create', ['users' => $users]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required',
            'recipient_id' => 'required|exists:users,id'
        ]);
        $message = AdmNotification::create([
           'sender_id' => auth()->id(),
            'recipient_id' =>$request->recipient_id,
            'body' => $request->body,
        ]);

        $recipient = User::find($request->recipient_id);

        $recipient->notify(new AdminNotification($message));

        flashy()->success(__('messages.create_success'));
        return view('home');
    }

    public function index()
    {
        if (request()->ajax())
        {
            return auth()->user()->unreadNotifications;
        }
        $notifications = auth()->user()->notifications;
        return view('customers.index', compact('notifications'));
    }

    public function read($id)
    {
        DatabaseNotification::find($id)->markAsRead();
        return back();
    }
}
