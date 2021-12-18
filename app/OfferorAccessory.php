<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class OfferorAccessory extends Model implements Buyable
{
    //
    private $tax=11;
    protected $appends = ['accessory_name','buyable_price'];

    protected $fillable = ['offeror_id', 'accessory_id',  'description', 'cost', 'currency_id'];


    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    /**
     * Get the country that owns the city.
     */
    public function accessory()
    {
        return $this->belongsTo('App\Accessory');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    /**
     * Get the identifier of the Buyable item.
     *
     * @return int|string
     */
    public function getBuyableIdentifier($options = null)
    {
        return $this->id;
    }

    /**
     * Get the description or title of the Buyable item.
     *
     * @return string
     */
    public function getBuyableDescription($options = null)
    {
        return $this->accessory->name;
    }

    /**
     * Get the price of the Buyable item.
     *
     * @return float
     */
    public function getBuyablePrice($options = null)
    {
        return $this->cost*(100+$this->tax)/100;
    }

    /**
     * Get the weight of the Buyable item.
     *
     * @return float
     */
    public function getBuyableWeight($options = null)
    {
        return 0;
    }

    public function getAccessoryNameAttribute()
    {
        return $this->accessory->name;
    }

    public function getBuyablePriceAttribute()
    {
        return $this->getBuyablePrice();
    }

}
