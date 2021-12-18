<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLevel extends Model
{
    protected $fillable = [
        'name'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($model_level)
    {
        try {
            return view('model_levels.includes.action', ['model_levels' => $model_level])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
    public static function getList()
    {
        $model_levels = ModelLevel::orderBy('name')->get();
        $listModelLevels= [];
        foreach ($model_levels as $model_level) {
            $listModelLevels[$model_level->name] = $model_level->name;
        }
        return $listModelLevels;
    }
}
