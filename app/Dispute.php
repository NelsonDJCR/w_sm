<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dispute extends Model
{
    protected $fillable = ['name', 'country_code', 'language', 'state'];
}
