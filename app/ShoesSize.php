<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoesSize extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($shoes_size)
    {
        try {
            return view('shoes_sizes.includes.action', ['shoes_size' => $shoes_size])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $shoes_sizes = ShoesSize::orderBy('name')->get();
        $listShoesSize= [];

        foreach ($shoes_sizes as $shoes_size) {
            $listShoesSize[$shoes_size->name] = $shoes_size->name;
        }

        return $listShoesSize;
    }
}
