<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServiceRequestOfferor extends Model
{
    protected $fillable = ['consecutive', 'service_request_id', 'offeror_id', 'initial_date', 'final_date', 'total_value', 'tax_value', 'base_value', 'offeror_value', 'state', 'description', 'data', 'qualify_customer'];

    protected $appends = ['offeror_name'];

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    public function serviceRequest()
    {
        return $this->belongsTo('App\ServiceRequest');
    }

    public function qualify()
    {
        $this->state = 6;
        $this->save();
        $this->serviceRequest->qualify();
    }

    public function qualifyCustomer()
    {
        $this->qualify_customer = 1;
        return $this->save();
    }

    public function messages()
    {
        return $this->hasMany('App\ServiceRequestMessage');
    }

    public function getMessages()
    {
        $messages = $this->messages()->get();

        return $messages;
    }

    public function getOfferorNameAttribute()
    {
        return $this->offeror->name;
    }
}
