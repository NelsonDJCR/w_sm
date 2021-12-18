<?php

namespace App\Http\Controllers;

use App\Offeror;
use App\ServiceRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $view = Auth::user()->getBaseFolderView();
        if ($view == 'client_views') {
            return $this->customerIndex();
        }
        $request_quantity=ServiceRequest::getQuantity();
        $transactions_quantity=ServiceRequest::getQuantityTransactions();
        $total_invoiced=ServiceRequest::getTotalInvoiced();
        $total_offerors=Offeror::getQuantity();
        $services=ServiceRequest::all();
        $getNumber = Auth::user()->offeror;

        if ($getNumber) {
            $getNumber = $getNumber->phone_emergeny;
        }else {
            $getNumber = '';
        }


        return view($view . ".home",["getNumber"=>$getNumber ,"request_quantity"=>$request_quantity,"transactions_quantity"=>$transactions_quantity,"total_invoiced"=>$total_invoiced,"total_offerors"=>$total_offerors,"services"=>$services]);
    }

    //Handle home for customers

    public function customerIndex()
    {
        $models = Offeror::inRandomOrder()->limit(20)->get();
        return view("client_views.home", ['models' => $models]);
    }

}
