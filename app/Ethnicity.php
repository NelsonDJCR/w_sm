<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ethnicity extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($ethnicity)
    {
        try {
            return view('ethnicities.includes.action', ['ethnicity' => $ethnicity])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $ethnicities = Ethnicity::orderBy('name')->get();
        $listEthnicities = [];

        foreach ($ethnicities as $ethnicity) {
            $listEthnicities[$ethnicity->name] = $ethnicity->name;
        }

        return $listEthnicities;
    }
}
