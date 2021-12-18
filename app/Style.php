<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($style)
    {
        try {
            return view('styles.includes.action', ['style' => $style])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $styles = Style::orderBy('name')->get();
        $listStyles= [];

        foreach ($styles as $style) {
            $listStyles[$style->name] = $style->name;
        }

        return $listStyles;
    }
}
