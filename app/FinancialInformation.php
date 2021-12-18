<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinancialInformation extends Model
{
    protected $appends = ['bank_name'];

    protected $fillable = [
        'id',
        'offeror_id',
        'bank_id',
        'number_account',
        'type_account',
        'owner_account',
        'id_owner_account'
    ];

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    public static function laratablesOrderName()
    {
        return 'id';
    }

    public static function laratablesCustomAction($financialInformation)
    {
        try {
            return view('financial_informations.includes.action', ['financialInformation' => $financialInformation])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $accounts = FinancialInformation::where('offeror_id', auth()->user()->offeror->id)->orderBy('number_account')->get();
        $list = [];

        foreach ($accounts as $account) {
            $list[$account->id] = $account->number_account . " - " . $account->bank->name . " (" . $account->owner_account . " - " . $account->id_owner_account . ")";
        }

        $accounts = [];
        foreach ($list as $l) {
            $accounts[$l] = $l;
        }
        return $accounts;
    }

    public static function getListOfferor(Offeror $offeror)
    {
        $accounts = FinancialInformation::where('offeror_id', $offeror->id)->orderBy('number_account')->get();
        $list = [];

        foreach ($accounts as $account) {
            $list[$account->id] = $account->number_account . " - " . $account->bank->name . " (" . $account->owner_account . " - " . $account->id_owner_account . ")";
        }

        $accounts = [];
        foreach ($list as $l) {
            $accounts[$l] = $l;
        }
        return $accounts;
    }

    public function bank()
    {
        return $this->belongsTo('App\Bank');
    }

    public function monetary_request()
    {
        return $this->hasMany('App\MonetaryRequest');
    }
    public function getBankNameAttribute()
    {
        return $this->bank->name;
    }

}
