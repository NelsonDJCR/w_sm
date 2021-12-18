<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class MonetaryRequest extends Model
{
    protected $fillable = [
        'offeror_id',
        'operation',
        'amount',
        'financial_information',
        'ip_request',
        'status',
        'observation',
        'id_user_requesting',
        'id_user_approves',
    ];

    public static function laratablesCustomAction($monetaryRequest)
    {
        return view(\Auth::user()->getBaseFolderView().'.monetary_requests.includes.action', ['monetaryRequest' => $monetaryRequest])->render();
    }

    /*public static function laratablesCustomName($monetaryRequest)
    {
        dd($monetaryRequest);
        return $monetaryRequest->offeror->user->name;
    }*/

    public static function laratablesOfferorRelationQuery()
    {
        return function ($query) {
            $query->with('user');
        };
    }

/*    public static function laratablesQueryConditions($query)
    {
        return $query->with([ 'offeror.user.name' ]);
    }*/

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function financialInformation()
    {
        return $this->belongsTo('App\FinancialInformation');
    }

    public function canDiscountAmount()
    {
        if(Operation::getOperationsAction()[$this->operation] == 'subtraction'){
            $available = $this->offeror->summary->balance;
            $amount = $this->amount;

            if($available >= $amount)
                return true;
            else
                return false;
        } else
            return true;

    }
}
