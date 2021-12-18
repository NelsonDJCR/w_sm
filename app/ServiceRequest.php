<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServiceRequest extends Model
{
    protected $fillable = ['consecutive','customer_id','initial_date','final_date','total_models','billable_items','total_value','tax_value','base_value','state','description','city_id','address','contact','phone_contact','reference'];

    protected $appends = ['city_name'];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
    public function serviceRequestOfferor()
    {
        return $this->hasMany('App\ServiceRequestOfferor');
    }
    public function city()
    {
        return $this->belongsTo('App\City');
    }
    public function getServiceRequest(Offeror $offeror)
    {
        /*
        $result = $this->serviceRequestOfferor()->get()->map(function ($item) use ($offeror){
            if ($item->offeror_id == $offeror->id) return $item;
        });
        return $result;
*/
        //dd($requesDetails->first());
        $result=array();
        foreach ($this->serviceRequestOfferor()->get() as $item)
        {
            if($item->offeror->id==$offeror->id)
            {
                array_push($result,$item);
            }
        }
        return $result;
    }

    public function confirm()
    {
        $result=true;
        foreach ($this->serviceRequestOfferor()->get() as $item)
        {
           $result&=$item->state>=3;
        }
        if($result)
        {
            $this->state=3;
            $this->save();
        }
        else
        {
            $result=true;
            foreach ($this->serviceRequestOfferor()->get() as $item)
            {
                $result&=$item->state==2;
            }
            if($result)
            {
                $this->state=2;
                $this->save();
            }
        }
        return $result;
    }

    public function confirmPayment()
    {
        $result=true;
        foreach ($this->serviceRequestOfferor()->get() as $item)
        {
            $item->state=4;
            $item->save();
        }
        $this->state=5;
        $this->save();
        return $result;
    }
    public function confirmRealization()
    {
        $result=true;
        foreach ($this->serviceRequestOfferor()->get() as $item)
        {
            $item->state=5;
            $item->save();
            $tax_percentage=0.19;
            $commission_percentage=0.11;
            $amount=round(($item->offeror_value/(1+$commission_percentage))/(1+$tax_percentage));
            $args=array( 'offeror'=>$item->offeror->id,
                'operation'=>'transaction',
                'amount'=>$amount,
                'observation'=>' Observation',
                'id_origin'=> $this->id,
                'origin'=>'transactions');
            $item->offeror->summary->registerOperationWithArray($args);
        }
        $this->state=6;
        $this->save();
        return $result;
    }
    public function qualify()
    {
        $result=true;
        foreach ($this->serviceRequestOfferor()->get() as $item)
        {
            $result&=$item->state>=6;
        }
        if($result)
        {
            $this->state=7;
            $this->save();
        }
        return $result;
    }

    public static function getQuantity()
    {
        /*
         * TODO pendiente la funcion que devuelve el número de solicitudes realizadas
         */
        $quantity=ServiceRequest::all()->count() ;
        return $quantity;
    }
    public static function getQuantityTransactions()
    {
        /*
         * TODO pendiente la funcion que devuelve el número de solicitudes realizadas
         */
        $quantity=Operation::all()->count();
        return $quantity;
        return 1;
    }
    public static function getTotalInvoiced()
    {
        /*
         * TODO pendiente la funcion que devuelve el valor de solicitudes realizadas
         */
        $total=Service::all()->sum('total_value') ;
        return $total;
    }

    public function getCityNameAttribute()
    {
        return $this->city->name;
    }
}
