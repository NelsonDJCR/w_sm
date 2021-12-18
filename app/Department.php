<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name', 'country_id', 'state'];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($department)
    {
        try {
            return view('departments.includes.action', ['department' => $department])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $registers = self::orderBy('name')->get();
        $list = [];
        foreach ($registers as $register) {
            $list[$register->id] = $register->name;
        }
        return $list;
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}