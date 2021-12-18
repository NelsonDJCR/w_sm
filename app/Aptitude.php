<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Aptitude extends Model
{
    protected $fillable = [
        'name'
    ];
    public static function laratablesOrderName()
    {
        return 'name';
    }
    public static function laratablesCustomAction($aptitude)
    {
        try {
            return view('aptitudes.includes.action', ['aptitude' => $aptitude])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }
    public static function getList()
    {
        $aptitudes = Aptitude::orderBy('name')->get();
        $listAptitudes= [];
        foreach ($aptitudes as $aptitude) {
            $listAptitudes[$aptitude->name] = $aptitude->name;
        }
        return $listAptitudes;
    }
}
