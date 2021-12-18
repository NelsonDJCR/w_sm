<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($profession)
    {
        try {
            return view('professions.includes.action', ['profession' => $profession])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $professions = Profession::orderBy('name')->get();
        $listProfessions= [];

        foreach ($professions as $profession) {
            $listProfessions[$profession->name] = $profession->name;
        }

        return $listProfessions;
    }
}
