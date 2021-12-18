<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Language extends Model
{
    protected $fillable = [
        'name'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($language)
    {
        try {
            return view('languages.includes.action', ['language' => $language])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
    public static function getList()
    {
        $languages = Language::orderBy('name')->get();
        $listLanguages= [];

        foreach ($languages as $language) {
            $listLanguages[$language->name] = $language->name;
        }
        return $listLanguages;
    }
}
