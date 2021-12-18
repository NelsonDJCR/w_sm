<?php

namespace App\Http\Controllers;
use App\Mail\PanicButton;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client;

class EmailController extends Controller
{
    public function send(Request $r)
    {
        $dataUser = DB::table('users')->where('id', $r->user)->first();
        $o = new \stdClass();
        $o->location = $r->location;
        $o->id = $r->user;
        $o->name = $dataUser->name;
        $o->phone = $dataUser->phone;

 
        Mail::to("smirrow.services@gmail.com")->send(new PanicButton($o));
        return 600;

    }

    public function sendSms(Request $r)
    {
        $msg = "Hola, ". \Auth::user()->name ." te tiene como contacto de emergencia y ha accionado el botón del pánico, puedes ver su ubicación atravez del sigiente enlace Ubicación:  $r->msg";
        $sid    = "AC86d4a3b0c34fa9bb714bb3e37c93ad5a"; 
        $token  = "f0cfc7f3abbc2ea586dd595d8db3c6ec"; 
        $twilio = new Client($sid, $token); 
        $twilio->messages 
        ->create("+57$r->phone", 
                array(  
                    "messagingServiceSid" => "MGdeff29ca19820ff8c4fc3368383d2e21",      
                    "body" => $msg
                ) 
        ); 

    }

}

