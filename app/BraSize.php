<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BraSize extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($bra_size)
    {
        try {
            return view('bra_sizes.includes.action', ['bra_size' => $bra_size])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $bra_sizes = BraSize::get();
        $listBraSizes= [];

        foreach ($bra_sizes as $bra_size) {
            $listBraSizes[$bra_size->name] = $bra_size->name;
        }

        return $listBraSizes;
    }
}
