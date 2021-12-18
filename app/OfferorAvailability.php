<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferorAvailability extends Model
{
    //
    protected $fillable = ['offeror_id','star_time','end_time','sunday','monday','tuesday','wednesday','thursday','friday','saturday'];

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }
}
