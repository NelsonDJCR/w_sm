<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Offeror;


class ExperienceController extends Controller
{
    public function index(Offeror $offeror)
    {
        return $offeror->experience;
    }
}
