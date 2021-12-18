<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Validation extends Model
{

    protected $fillable = [
        'user_id',
        'document_validate_id',
        'offeror_or_customer',
        'natural_or_juridical',
        'file',
        'description',
        'state'
    ];

    public static function laratablesCustomAction($validation)
    {
        try {
            return view('validations.includes.action', ['validation' => $validation])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function nameFunction()
    {
        return $this->belongsTo(MODEL::class, 'id');
    }

    public function documentValidate()
    {
        return $this->belongsTo('App\DocumentValidate');
    }

}
