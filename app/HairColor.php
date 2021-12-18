<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HairColor extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($hair_color)
    {
        try {
            return view('hair_colors.includes.action', ['hair_color' => $hair_color])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $hair_colors= HairColor::orderBy('name')->get();
        $listHairColors = [];

        foreach ($hair_colors as $hair) {
            $listHairColors[$hair->name] = $hair->name;
        }

        return $listHairColors;
    }
}
