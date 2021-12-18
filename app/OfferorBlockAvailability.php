<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferorBlockAvailability extends Model
{
    public static function laratablesCustomAction($offerorBlocksAvailability)
    {
        try {
            return view('offeror_blocks_availability.includes.action', ['offerorBlocksAvailability' => $offerorBlocksAvailability])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    protected $fillable = ['offeror_id','initial_date','final_date','motive'];

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }
}
