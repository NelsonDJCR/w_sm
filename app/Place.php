<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','description','state','user_at','date_at'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($place)
    {
        try {
            return view('places.includes.action', ['place' => $place])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $places = Place::orderBy('name')->get();
        $listPlaces = [];
        foreach ($places as $place) {
            $listPlaces[$place->id] = $place->name;
        }
        return $listPlaces;
    }
}