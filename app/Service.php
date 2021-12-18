<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name', 'description','type','tags'];

    public function Offerors() {
        return $this->belongsToMany('App\OfferorService');
    }

    public static function laratablesCustomAction($service)
    {
        try {
            return view('service.includes.action', ['service' => $service])->render();
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
}
