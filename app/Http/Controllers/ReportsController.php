<?php

namespace App\Http\Controllers;

use App\MonetaryRequest;
use App\Offeror;
use App\Customer;
use App\Operation;
use App\ServiceRequest;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function offerors()
    {
        $offerors=Offeror::all();
        return view('reports.offerors',['offerors' => $offerors]);
    }
    public function customers()
    {
        $customers=Customer::all();
     return view('reports.customers',['customers' => $customers]);
    }
    public function transactions()
    {
        $services=ServiceRequest::all();
        return view('reports.transactions',['services' => $services]);
    }
    public function services()
    {
        $services=ServiceRequest::all();
        return view('reports.transactions',['services' => $services]);
    }
    public function monetaryRequests()
    {
        $monetaryRequests=MonetaryRequest::all();
        return view('reports.monetary_requests',['monetaryRequests' => $monetaryRequests]);
    }
}
