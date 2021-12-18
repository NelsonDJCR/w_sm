<?php

namespace App\Http\Controllers;

use App\DocumentValidate;
use App\User;
use App\Validation;
use App\Offeror;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class ValidationController extends Controller
{
    public function check()
    {
        if(auth()->user()->getRoleName() == 'Administrator')
        {
            $validations = Validation::all();
            return view('validations.check', ['validations'=>$validations]);
        } else return redirect(route('home'));
    }

    public function index(Offeror $offeror)
    {
        try {
            if(auth()->user()->offeror->id == $offeror->id || auth()->user()->getRoleName() == 'Administrator'){

                $offerorId = $offeror->user_id;

                //Documentos requeridos para validación
                $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();

                //Documentos validados
                $validations = DB::table('validations')->where('user_id', 'like', $offerorId)->get();
                $getNumber = Auth::user()->offeror;
                $getNumber = $getNumber ? $getNumber->phone_emergeny : '';
                return view(\Auth::user()->getBaseFolderView().'.validations.index', ['getNumber' => $getNumber,'offeror'=>$offeror, 'documentValidates'=>$documentValidates, 'validations'=>$validations]);
            } else return redirect(route('home'));

        } catch (\ErrorException $e){
            return redirect(route('home'));
        }
    }

    public function indexCustomer(Customer $customer)
    {
        try {
            if (auth()->user()->customer->id == $customer->id || auth()->user()->getRoleName() == 'Administrator') {
                $customerId = $customer->user_id;

                if($customer->customer_type == "Juridical"){
                    //Documentos requeridos para validación
                    $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Juridical')->get();
                }
                else{
                    //Documentos requeridos para validación
                    $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();
                }

                //Documentos validados
                $validations = DB::table('validations')->where('user_id', 'like', $customerId)->get();

                return view(\Auth::user()->getBaseFolderView() . '.validations.index', ['customer' => $customer, 'documentValidates' => $documentValidates, 'validations' => $validations]);
            } else return redirect(route('home'));

        } catch (\ErrorException $e){
            return redirect(route('home'));
        }
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Validation::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $document_validate = DocumentValidate::findOrFail($id);
        $user = Auth()->user();

        $this->authorize('create', $document_validate);

        return view(\Auth::user()->getBaseFolderView().'.validations.create', ['validation'=>$document_validate, 'user'=>$user]);
    }

    public function createAdmin($idDocument, $idUser, $offerorOrCustomer)
    {
        if(auth()->user()->getRoleName() == 'Administrator') {
            $validation = DocumentValidate::findOrFail($idDocument);
            $user = User::findOrFail($idUser);

            return view(\Auth::user()->getBaseFolderView() . '.validations.create', ['validation' => $validation, 'user' => $user, 'offerorOrCustomer' => $offerorOrCustomer]);
        }
        else{
            return redirect(route('home'));
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $document_validate = DocumentValidate::findOrFail($request->document_validate_id);

        $this->authorize("create", $document_validate);

        $validatedData = $request->validate([
            'user_id' => 'required| numeric',
            'document_validate_id' => 'required|numeric',
            'offeror_or_customer' => 'required|numeric',
            'natural_or_juridical' => 'required|numeric',
            'file'=> 'required',
            'description' => 'required',
            'state' => 'required'
        ]);

        if ($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $validatedData['file'] = $path;
        }

        $validation = Validation::create($validatedData);

        flashy()->success(__('messages.document_uploaded'));

        $isOfferor = Auth()->user()->offeror;
        $iscustomer = Auth()->user()->customer;

        if (isset($isOfferor)) {
            return redirect(route('validations.index', Auth()->user()->offeror));
        }
        elseif (isset($iscustomer)) {
            return redirect(route('validations.index_customer', Auth()->user()->customer));
        }
        elseif(!isset($iscustomer)&&!isset($isOfferor)){
            $user = User::findOrFail($validatedData['user_id']);
            if ($validatedData['offeror_or_customer']==2){
                return redirect(route('offerors.show', $user->offeror->id).'#btabs-static-validations');
            }
            else{
                return redirect(route('customers.show', $user->customer->id).'#btabs-static-validations');
            }
        }
    }

    public function show(Validation $validation)
    {
        $this->authorize("show", $validation);

        return view(\Auth::user()->getBaseFolderView() . '.validations.show', ['validation' => $validation]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $validation = Validation::findOrFail($id);
        $this->authorize("update", $validation);

        $user = Auth()->user();
        return view(\Auth::user()->getBaseFolderView().'.validations.edit', ['validation'=>$validation, 'user'=>$user]);
    }

    public function editAdmin($idValidation, $idUser, $offerorOrCustomer){
        if(auth()->user()->getRoleName() == 'Administrator') {
            $validation = Validation::findOrFail($idValidation);
            $user = User::findOrFail($idUser);

            return view(\Auth::user()->getBaseFolderView() . '.validations.edit', ['validation' => $validation, 'user' => $user, 'offerorOrCustomer' => $offerorOrCustomer]);
        }
        else{
            return redirect(route('home'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Validation $validation)
    {
        $this->authorize("update", $validation);

        $validatedData = $request->validate([
            'user_id' => 'required| numeric',
            'document_validate_id' => 'required|numeric',
            'offeror_or_customer' => 'required|numeric',
            'natural_or_juridical' => 'required|numeric',
            'file'=> 'required',
            'description' => 'required',
            'state' => 'required'
        ]);

        if ($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $validatedData['file'] = $path;
        }

        $validation->fill($validatedData);
        $validation->save();

        flashy()->success(__('messages.document_uploaded'));

        $isOfferor = Auth()->user()->offeror;
        $iscustomer = Auth()->user()->customer;

        if (isset($isOfferor)) {
            return redirect(route('validations.index', Auth()->user()->offeror));
        }
        elseif (isset($iscustomer)) {
            return redirect(route('validations.index_customer', Auth()->user()->customer));
        }
        elseif(!isset($iscustomer)&&!isset($isOfferor)){
            $user = User::findOrFail($validatedData['user_id']);
            if ($validatedData['offeror_or_customer']==2){
                return redirect(route('offerors.show', $user->offeror->id).'#btabs-static-validations');
            }
            else{
                return redirect(route('customers.show', $user->customer->id).'#btabs-static-validations');
            }
        }
    }

    public function destroy(Validation $validation)
    {
        $validation->delete();

        $this->authorize("delete", $validation);

        return redirect('/validations')->with('success', 'Registro eliminado correctamente');
    }

    public function validated(Validation $validation)
    {
        $this->authorize("verify", $validation);

        $validation->state=3;
        $validation->save();

        if($validation->user->customer)
        {
            if($validation->user->customer->getValidation($validation->user->id)=='Validated')
            {
                $validation->user->customer->validated=1;
                $validation->user->customer->save();
            }
        }

        flashy()->success(__('messages.validated_document'));
        return redirect(route('validations.check'));
    }

    public function notValidated(Request $request, Validation $validation)
    {
        $this->authorize("verify", $validation);

        $validatedData = $request->validate([
            'user_id' => 'required| numeric',
            'document_validate_id' => 'required|numeric',
            'offeror_or_customer' => 'required|numeric',
            'natural_or_juridical' => 'required|numeric',
            'file'=> 'required',
            'description' => 'required',
            'state' => 'required'
        ]);

        if ($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $validatedData['file'] = $path;
        }

        $validation->fill($validatedData);
        $validation->save();

        flashy()->error(__('messages.not_validated_document'));

        return redirect(route('validations.check'));
    }
}
