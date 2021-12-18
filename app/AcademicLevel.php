<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicLevel extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($academic_level)
    {
        try {
            return view('academic_levels.includes.action', ['academic_level' => $academic_level])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $academic_levels = AcademicLevel::get();
        $listAcademicLevels= [];

        foreach ($academic_levels as $academic_level) {
            $listAcademicLevels[$academic_level->name] = $academic_level->name;
        }

        return $listAcademicLevels;
    }
}
