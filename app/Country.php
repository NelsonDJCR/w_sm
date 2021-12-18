<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'country_code', 'language', 'state'];

    public static function getList()
    {
        $registers = self::orderBy('name')->get();
        $list = [];
        foreach ($registers as $register) {
            $list[$register->id] = $register->name;
        }
        return $list;
    }

    public static function laratablesCustomAction($country)
    {
        try {
            return view('countries.includes.action', ['country' => $country])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
}
