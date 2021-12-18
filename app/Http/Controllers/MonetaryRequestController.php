<?php

namespace App\Http\Controllers;

use App\FinancialInformation;
use App\MonetaryRequest;
use App\Offeror;
use App\Operation;
use App\Summary;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

class MonetaryRequestController extends Controller
{
    public function index()
    {
        if(auth()->user()->offeror || auth()->user()->getRoleName() == 'Administrator'){
            $getNumber = \Auth::user()->offeror;
            if ($getNumber) {
                $getNumber = $getNumber->phone_emergeny;
            }else {
                $getNumber = '';
            }
            return view(\Auth::user()->getBaseFolderView() . '.monetary_requests.index')->with(['getNumber' => $getNumber]);
        } else {
            return redirect(route('home'));
        }
    }

    public function getListDataTablesFull()
    {
        return Laratables::recordsOf(MonetaryRequest::class);
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(MonetaryRequest::class, function($query)
        {
            return $query->where('status', 'Procesando');
        });
    }

    public function historic()
    {
        if(auth()->user()->offeror || auth()->user()->getRoleName() == 'Administrator'){
            return view(\Auth::user()->getBaseFolderView() . '.monetary_requests.historic');
        } else {
            return redirect(route('home'));
        }
    }

    public function getListDataTablesOfferor(Offeror $offeror)
    {
        return Laratables::recordsOf(MonetaryRequest::class, function ($query) use ($offeror) {
            return $query->where('offeror_id', $offeror->id);
        });
    }

    public function create()
    {
        try
        {
            $monetaryRequest = new MonetaryRequest(['offeror_id'=>auth()->user()->offeror->id]);
            $this->authorize('create', $monetaryRequest);
            $information_accounts = FinancialInformation::getList();
            return view(\Auth::user()->getBaseFolderView() . '.monetary_requests.create', ['information_accounts' => $information_accounts]);
        } catch(\ErrorException $e) {
            return redirect(route('home'));
        }

    }

    public function create_request(Offeror $offeror)
    {
        $information_accounts = FinancialInformation::getListOfferor($offeror);
        return view(\Auth::user()->getBaseFolderView() . '.monetary_requests.create', ['information_accounts' => $information_accounts, 'offeror' => $offeror]);
    }

    public function store(Request $request)
    {
        $monetaryRequest = new MonetaryRequest(['offeror_id'=>$request->offeror_id]);

        $this->authorize('create', $monetaryRequest);

        $validatedData = $request->validate([
            'offeror_id' => 'required',
            'id_user_approves' => '',
            'operation' => 'required',
            'amount' => 'required',
            'financial_information' => 'required',
            'ip_request' => 'required',
            'status' => 'required',
            'observation' => '',
            'id_user_requesting' => 'required',
        ]);

        $monetaryRequest = new MonetaryRequest($validatedData);

        if ($monetaryRequest->canDiscountAmount()) {
            $monetaryRequest->save();
            flashy()->success(__('messages.create_success'));
            return redirect('/monetary-requests');
        } else {
            flashy()->error(__('messages.can_not_discount_amount'));
            return redirect()->back();
        }
    }

    public function show(MonetaryRequest $monetaryRequest)
    {
        $this->authorize('view', $monetaryRequest);

        return view(\Auth::user()->getBaseFolderView() . '.monetary_requests.show', ['monetaryRequest' => $monetaryRequest]);
    }

    public function edit(MonetaryRequest $monetaryRequest)
    {
        $this->authorize('update', $monetaryRequest);

        return view('monetary_requests.edit', ['monetaryRequest' => $monetaryRequest]);
    }

    public function update(Request $request, MonetaryRequest $monetaryRequest)
    {
        $this->authorize('update', $monetaryRequest);

        $validatedData = $request->validate([
            'status' => 'required',
            'observation' => 'required',
            'id_user_approves' => 'required',
        ]);

        if($request->status == 'Aceptado')
        {
            $args=array(
                'offeror'=> $monetaryRequest->offeror->id,
                'operation' => $monetaryRequest->operation,
                'amount' => $monetaryRequest->amount,
                'observation'=> $monetaryRequest->observation,
                'id_origin'=> $monetaryRequest->id,
                'origin'=>'monetary_requests'
            );

            if ($monetaryRequest->offeror->summary->registerOperationWithArray($args)) {
                $monetaryRequest->status="Aceptado";
                $monetaryRequest->id_user_approves=\Auth::user()->id;
                $monetaryRequest->save();
                flashy()->success(__('messages.create_success'));
            }else{
                $monetaryRequest->status="Rechazado";
                $monetaryRequest->observation="Saldo ins";

                $monetaryRequest->save();
                flashy()->success(__('messages.can_not_discount_amount'));
            }

            return redirect('/monetary-requests');

        } else {
            $monetaryRequest->status=$request->status;
            $monetaryRequest->observation=$request->observation;
            $monetaryRequest->save();

            return redirect('/monetary-requests');
        }
    }

    public function destroy(MonetaryRequest $monetaryRequest)
    {
        $this->authorize('update', $monetaryRequest);

        $monetaryRequest->delete();
        return redirect('/monetary_requests');
    }
}
