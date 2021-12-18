<?php

namespace App\Http\Controllers;

use App\Operation;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;
use App\Offeror;


class OperationController extends Controller
{
    public function index()
    {
        try
        {
            $getNumber = \Auth::user()->offeror;
            if ($getNumber) {
                $getNumber = $getNumber->phone_emergeny;
            }else {
                $getNumber = '';
            }
            $operation = new Operation(['offeror_id'=>auth()->user()->offeror->id]);
            $this->authorize('view', $operation);
            return view(\Auth::user()->getBaseFolderView() . '.operations.index')->with(['getNumber' => $getNumber]);
        } catch(\ErrorException $e) {
            return redirect(route('home'));
        }
    }
}
