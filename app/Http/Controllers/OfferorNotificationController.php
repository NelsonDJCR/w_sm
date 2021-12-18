<?php

namespace App\Http\Controllers;

use App\Notifications\ServiceRequestOfferorNotification;
use App\OfferorNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class OfferorNotificationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'sender_id' => 'required',
            'recipient_id' => 'required|exists:users,id'
        ]);
        $message = OfferorNotification::create([
            'sender_id' => auth()->id(),
            'service_id' => $request->service_id,
            'recipient_id' =>$request->recipient_id,
            'body' => $request->body,
        ]);

        $recipient = User::find($request->recipient_id);

        $recipient->notify(new ServiceRequestOfferorNotification($message));

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
