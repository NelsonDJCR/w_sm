<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Notifications\DatabaseNotification;

class NotificationController extends Controller
{

    public function getUserNotifications(Request $request)
    {
        return auth()->user()->notifications()->limit(10)->get();
    }

    public function read(DatabaseNotification $notification)
    {
        $notification->markAsRead();
        return response()->json('Ok', 200);
    }
}
