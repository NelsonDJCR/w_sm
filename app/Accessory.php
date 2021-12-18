<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = ['name', 'description', 'type', 'tags'];

    /**
     * first_name column should be used for sorting when name column is selected in Datatables.
     *
     * @return string
     */
    public static function laratablesOrderName()
    {
        return 'name';
    }

    public static function laratablesCustomAction($accessory)
    {
        try {
            return view('accessories.includes.action', ['accessory' => $accessory])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public static function getList()
    {
        $accessories = Accessory::orderBy('name')->get();
        $listAccessories = [];
        foreach ($accessories as $accessory) {
            $listAccessories[$accessory->id] = $accessory->name;
        }
        return $listAccessories;
    }

    public function Offerors() {
        return $this->belongsToMany('App\OfferorAccessory');
    }
}
