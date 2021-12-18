<?php

namespace App\Http\Controllers\API;

use App\Customer;
use App\CustomerRating;
use App\Http\Controllers\Controller;
use App\ServiceRequestOfferor;
use Illuminate\Http\Request;

class CustomerRatingController extends Controller
{
    public function index(Customer $customer)
    {
        return $customer->ratings;
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

        $rating = CustomerRating::create($data);
        $rating->ServiceRequestOfferor->qualifyCustomer();
        return response()->json(['message' => 'Ok']);
    }

}
