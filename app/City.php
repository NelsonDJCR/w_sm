<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country_id', 'department_id', 'state'];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($city)
    {
        try {
            return view('cities.includes.action', ['city' => $city])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public static function getList()
    {
        $cities = City::orderBy('name')->get();
        $listCities = [];

        foreach ($cities as $city) {
            $listCities[$city->id] = $city->name;
        }

        return $listCities;
    }
}
