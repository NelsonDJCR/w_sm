<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkinColor extends Model
{
    protected $fillable = [
        'name'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($skin_color)
    {
        try {
            return view('skin_colors.includes.action', ['skin_color' => $skin_color])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
    public static function getList()
    {
        $skin_colors= SkinColor::orderBy('name')->get();
        $listSkinColors = [];

        foreach ($skin_colors as $skin) {
            $listSkinColors[$skin->name] = $skin->name;
        }
        return $listSkinColors;
    }
}
