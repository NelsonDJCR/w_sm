<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ServiceRequestMessage;
use App\ServiceRequestOfferor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceRequestMessageController extends Controller
{

    public function getMessages(ServiceRequestOfferor $requestOfferor)
    {

        $messages = $requestOfferor->messages->map(function ($el) {
            return [
                'id' => $el->id,
                'user_sender_id' => $el->user_sender_id,
                'user_sender_name' => $el->user_sender_name,
                'avatar' => $el->userSender->getAvatar(),
                'message' => $el->message,
                'created_at' => Carbon::parse($el->created_at)->toIso8601String(),

            ];
        });

        return $messages;
    }

    public function store(ServiceRequestOfferor $requestOfferor, Request $request)
    {
        $validatedData = [
            'message' => $request['message'],
            'service_request_offeror_id' => $requestOfferor->id,
            'user_sender_id' => auth()->user()->id,
            'user_sender_name' => auth()->user()->name,
        ];

        $message = ServiceRequestMessage::create($validatedData);

        $messages = $message->serviceRequestOfferor->messages->map(function ($el) {
            return [
                'id' => $el->id,
                'user_sender_id' => $el->user_sender_id,
                'user_sender_name' => $el->user_sender_name,
                'avatar' => $el->userSender->getAvatar(),
                'message' => $el->message,
                'created_at' => Carbon::parse($el->created_at)->toIso8601String(),

            ];
        });

        return $messages;
    }

}
