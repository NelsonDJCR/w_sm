<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HairLength extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($hair_length)
    {
        try {
            return view('hair_lengths.includes.action', ['hair_length' => $hair_length])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $hair_lengths = HairLength::orderBy('name')->get();
        $listHairLengths = [];

        foreach ($hair_lengths as $hair) {
            $listHairLengths[$hair->name] = $hair->name;
        }

        return $listHairLengths;
    }
}
