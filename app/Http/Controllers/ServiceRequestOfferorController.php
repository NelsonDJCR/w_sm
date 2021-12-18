<?php

namespace App\Http\Controllers;

use App\ServiceRequestOfferor;
use Illuminate\Http\Request;

class ServiceRequestOfferorController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceRequestOfferor  $serviceRequestOferor
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceRequestOfferor $serviceRequestOfferor)
    {
        return view(\Auth::user()->getBaseFolderView() . '.service_request_offeror.show',['serviceRequestOfferor'=>$serviceRequestOfferor]);
    }

    public function index()
    {
        return view(\Auth::user()->getBaseFolderView() . '.service_request_offeror.index');
    }
}
