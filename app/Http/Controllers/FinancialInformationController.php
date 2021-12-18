<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\FinancialInformation;
use App\Offeror;
use App\Bank;
use Illuminate\Support\Facades\Auth;

class FinancialInformationController extends Controller
{
    public function index()
    {
        if(auth()->user()->offeror){
            $getNumber = Auth::user()->offeror;
            $getNumber = $getNumber ? $getNumber->phone_emergeny : '';
            return view(\Auth::user()->getBaseFolderView().'.financial_informations.index', ['getNumber' => $getNumber,'offeror'=>auth()->user()->offeror]);
        } else {
            return redirect(route('home'));
        }
    }

    public function my_financial()
    {
        if(auth()->user()->offeror){
            return $this->index(Auth::user()->offeror);
        } else {
            return redirect(route('home'));
        }
    }


    public function getListDataTables(FinancialInformation $financial_information)
    {
        $this->authorize('update', $financial_information);

        return Laratables::recordsOf(Experience::class);
    }

    public function create(Offeror $offeror)
    {
        $financialInformation = new FinancialInformation(['offeror_id'=>$offeror->id]);

        $this->authorize('create', $financialInformation);

        $banks = Bank::getList();

        return view(\Auth::user()->getBaseFolderView().'.financial_informations.create', ['offeror'=>$offeror, 'banks'=>$banks]);
    }

    public function store(Request $request)
    {
        $financialInformation = new FinancialInformation(['offeror_id'=>$request->offeror_id]);

        $this->authorize('create', $financialInformation);

        $validatedData = $request->validate([
            'offeror_id' => 'required|numeric',
            'bank_id' => 'required',
            'number_account' => 'required',
            'type_account' => 'required',
            'owner_account' => 'required',
            'id_owner_account' => 'required'
        ]);

        $financialInformation = FinancialInformation::create($validatedData);
        flashy()->success(__('messages.create_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('financial_informations.index')));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-financial_information');
        }
    }

    public function show($id)
    {
        return redirect(route('home'));
    }

    public function edit(FinancialInformation $financialInformation)
    {
        $banks = Bank::getList();

        $this->authorize('update', $financialInformation);

        return view(\Auth::user()->getBaseFolderView().'.financial_informations.edit', ['financialInformation'=>$financialInformation, 'banks'=>$banks]);
    }

    public function update(Request $request, FinancialInformation $financialInformation)
    {
        $this->authorize('update', $financialInformation);

        $validatedData = $request->validate([
            'offeror_id' => 'required|numeric',
            'bank_id' => 'required',
            'number_account' => 'required',
            'type_account' => 'required',
            'owner_account' => 'required',
            'id_owner_account' => 'required'
        ]);

        $financialInformation->fill($validatedData);
        $financialInformation->save();
        flashy()->success(__('messages.update_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('financial_informations.index')));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-financial_information');
        }
    }

    public function destroy(FinancialInformation $financialInformation)
    {

        $this->authorize('update', $financialInformation);

        $financialInformation->delete();

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('financial_informations.index')));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$financialInformation['offeror_id']]).'#btabs-static-financial_information');
        }
    }
}
