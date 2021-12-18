<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerRating extends Model
{
    protected $table='customers_ratings';
    protected $fillable = [
        'score',
        'offeror_id',
        'customer_id',
        'comments',
        'service_request_offeror_id'
    ];

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'score';
    }

    public static function laratablesCustomAction($score)
    {
        try {
            return view('ratings.includes.action', ['score' => $score])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    public function serviceRequestOfferor()
    {
        return $this->belongsTo('App\ServiceRequestOfferor');
    }
}
