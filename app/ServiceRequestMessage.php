<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceRequestMessage extends Model
{
    protected $fillable = [
        'message',
        'service_request_offeror_id',
        'user_sender_id',
        'user_sender_name',
    ];

    public function serviceRequestOfferor()
    {
        return $this->belongsTo('App\ServiceRequestOfferor');
    }

    public function userSender()
    {
        return $this->belongsTo('App\User');
    }
}
