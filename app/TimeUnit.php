<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeUnit extends Model
{
    protected $fillable = ['name', 'hour', 'state'];


    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($timeUnit)
    {
        try {
            return view('time_units.includes.action', ['timeUnit' => $timeUnit])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $timeUnits = TimeUnit::orderBy('name')->get();
        $list = [];
        foreach ($timeUnits as $timeUnit) {
            $list[$timeUnit->id] = $timeUnit->name;
        }
        return $list;
    }
}