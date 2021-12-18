<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShirtSize extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($shirt_size)
    {
        try {
            return view('shirt_sizes.includes.action', ['shirt_size' => $shirt_size])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $shirt_sizes = ShirtSize::get();
        $listShirtSizes= [];

        foreach ($shirt_sizes as $shirt_size) {
            $listShirtSizes[$shirt_size->name] = $shirt_size->name;
        }

        return $listShirtSizes;
    }
}
