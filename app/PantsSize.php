<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PantsSize extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($pants_size)
    {
        try {
            return view('pants_sizes.includes.action', ['pants_size' => $pants_size])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $pants_sizes = PantsSize::get();
        $listPantsSizes= [];

        foreach ($pants_sizes as $pants_size) {
            $listPantsSizes[$pants_size->name] = $pants_size->name;
        }

        return $listPantsSizes;
    }
}
