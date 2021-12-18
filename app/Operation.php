<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Operation extends Model
{
    protected $fillable = ['id_service_request', 'offeror_id', 'operation', 'amount', 'id_user_registers', 'ip', 'observation'];

    private static $operations_action = array(
        'transaction' => 'sum',
        'monetary request' => 'subtraction',
        'devolution' => 'subtraction',
        'dispute' => 'subtraction',
        'bono' => 'sum',
        'manual subtraction' => 'subtraction',
        'manual sum' => 'sum'
    );

    private static $operations_kardex = array(
        'transaction' => 'entry',
        'monetary request' => 'exit',
        'devolution' => 'exit',
        'dispute' => 'exit',
        'bono' => 'entry',
        'manual subtraction' => 'exit',
        'manual sum' => 'entry'
    );

    public static function getOperationsAction()
    {
        return self::$operations_action;
    }


    public static function getOperationsKardex()
    {
        return self::$operations_kardex;
    }

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }
}
