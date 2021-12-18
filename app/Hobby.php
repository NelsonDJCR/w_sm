<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hobby extends Model
{
    protected $fillable = [
        'name'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($hobby)
    {
        try {
            return view('hobbies.includes.action', ['hobby' => $hobby])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
    public static function getList()
    {
        $hobbies = Hobby::orderBy('name')->get();
        $listHobbies= [];
        foreach ($hobbies as $hobby) {
            $listHobbies[$hobby->name] = $hobby->name;
        }
        return $listHobbies;
    }
}
