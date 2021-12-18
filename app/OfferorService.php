<?php

namespace App;

use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class OfferorService extends Model implements Buyable
{
    public $incrementing = false;
    private $tax=11;

    protected $appends = ['service_name', 'time_unit_name', 'buyable_price'];
    //
    protected $fillable = ['id', 'offeror_id', 'description', 'service_id', 'time_unit_id', 'cost', 'quantity', 'currency_id'];

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->id = Uuid::uuid4();
        });
    }

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'cost' => 'float',
    ];

    /**
     * Get the country that owns the city.
     */
    public function service()
    {
        return $this->belongsTo('App\Service');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public function time_unit()
    {
        return $this->belongsTo('App\TimeUnit');
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
        return "({$this->quantity}) {$this->time_unit->name}(s) /" . $this->service->name;
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

    public function getServiceNameAttribute()
    {
        return $this->service->name;
    }

    public function getTimeUnitNameAttribute()
    {
        return $this->time_unit->name;
    }

    public function getBuyablePriceAttribute()
    {
        return $this->getBuyablePrice();
    }


}
