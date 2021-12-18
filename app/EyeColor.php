<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EyeColor extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($eye_color)
    {
        try {
            return view('eye_colors.includes.action', ['eye_color' => $eye_color])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $eye_colors = EyeColor::orderBy('name')->get();
        $listEyeColors = [];

        foreach ($eye_colors as $eye_color) {
            $listEyeColors[$eye_color->name] = $eye_color->name;
        }

        return $listEyeColors;
    }
}
