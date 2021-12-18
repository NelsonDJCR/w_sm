<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Offeror;
use App\OfferorRating;
use App\ServiceRequestOfferor;
use Illuminate\Http\Request;

class OfferorRatingController extends Controller
{
    public function index(Offeror $offeror)
    {
        return $offeror->ratings;
    }


    public function store(Request $request, ServiceRequestOfferor $requestOfferor)
    {
        $validatedData = $request->validate([
            'score' => 'required|numeric',
            'comments' => 'max:255',
        ]);

        $data = [
            'score' => $request['score'],
            'offeror_id' => $requestOfferor->offeror->id,
            'customer_id' => $requestOfferor->serviceRequest->customer->id,
            'service_request_offeror_id' => $requestOfferor->id,
            'comments' => $request['comments'],
        ];

        $rating = OfferorRating::create($data);
        $rating->ServiceRequestOfferor->qualify();
        return response()->json(['message' => 'Ok']);
    }

}
