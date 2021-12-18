<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($bank)
    {
        try {
            return view('banks.includes.action', ['bank' => $bank])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $banks = Bank::orderBy('name')->get();
        $listBanks = [];

        foreach ($banks as $bank) {
            $listBanks[$bank->id] = $bank->name;
        }

        return $listBanks;
    }
}