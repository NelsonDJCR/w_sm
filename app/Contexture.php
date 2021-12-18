<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contexture extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($contexture)
    {
        try {
            return view('contextures.includes.action', ['contexture' => $contexture])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $contextures = Contexture::orderBy('name')->get();
        $listContextures= [];

        foreach ($contextures as $contexture) {
            $listContextures[$contexture->name] = $contexture->name;
        }

        return $listContextures;
    }
}
