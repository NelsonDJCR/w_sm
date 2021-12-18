<?php

namespace App\Http\Controllers\API;

use App\Customer;
use App\DocumentValidate;
use App\Http\Controllers\Controller;
use App\Offeror;
use App\User;
use App\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;


class ValidationController extends Controller
{

    /**
     * Retorna si el usuario ya completo la validación
     */
    public function checkStatusCustomer()
    {
        if (auth()->user()->customer->getValidation(auth()->user()->id) == "Validated") {
            return ['validated' => 1];
        }
        return ['validated' => 0];
    }
    public function checkStatusOfferor()
    {
        if (auth()->user()->offeror->getValidation(auth()->user()->id) == "Validated") {
            return ['validated' => 1];
        }
        return ['validated' => 0];
    }

    public function getValidationList()
    {
        if (auth()->user()->getRoleName() == 'Client') {
            $customer = auth()->user()->customer;
            return $this->generateCustomerResponse($customer);
        }elseif (auth()->user()->getRoleName() == 'Model') {
            $offeror = auth()->user()->offeror;
            return $this->generateOfferorResponse($offeror);
        }

    }

    public function show(DocumentValidate $validation)
    {

        $uploadedDocument = Validation::where('user_id', auth()->user()->id)->where('document_validate_id', $validation->id)->latest('created_at')->first();
        if (!$uploadedDocument) {
            $uploadedDocument = new Validation();
        }
        return [
            'id' => $validation->id,
            'name' => $validation->name,
            'description_doc' => $validation->description,
            'file' => $uploadedDocument->file,
            'state' => $uploadedDocument->state,
            'description' => $uploadedDocument->description,
            'id_validation' => $uploadedDocument->id,
        ];


    }

    public function uploadPictures(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        $document_validate = DocumentValidate::findOrFail($request->validation_id);
        $data = [
            'user_id' => auth()->user()->id,
            'document_validate_id' => $request->validation_id,
            'offeror_or_customer' => 1, //TODO: Validar ????
            'natural_or_juridical' => 1,//TODO: Que significa  ????
            'description' => '2',
            'state' => '2'
        ];

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $data['file'] = $path;
        }

        $validation = Validation::create($data);

        return $validation;
    }
    public function uploadPicturesOfferor(Request $request)
    {
        $request->validate([
            'file' => 'required',
        ]);
        $document_validate = DocumentValidate::findOrFail($request->validation_id);
        $data = [
            'user_id' => auth()->user()->id,
            'document_validate_id' => $request->validation_id,
            'offeror_or_customer' => 2, //TODO: Validar ????
            'natural_or_juridical' => 1,//TODO: Que significa  ????
            'description' => '2',
            'state' => '2'
        ];

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $data['file'] = $path;
        }

        $validation = Validation::create($data);

        return $validation;
    }

    private function generateCustomerResponse(Customer $customer)
    {
        //Documentos requeridos para validación
        $requiredDocuments = DB::table('document_validates')->where('person_type', 'like', $customer->customer_type)->get();

        //Documentos validados
        $uploadedDocuments = DB::table('validations')->where('user_id', 'like', $customer->user->id)->latest('created_at')->get();

        foreach ($requiredDocuments as $requiredDocument) {
            $uploadedDoc = new Validation();
            foreach ($uploadedDocuments as $uploadedDocument) {
                if ($requiredDocument->id == $uploadedDocument->document_validate_id) {
                    $uploadedDoc = $uploadedDocument;
                    break;
                }
            }

            $response[] = [
                'id' => $requiredDocument->id,
                'name' => $requiredDocument->name,
                'description_doc' => $requiredDocument->description,
                'file' => $uploadedDoc->file,
                'state' => $uploadedDoc->state,
                'description' => $uploadedDoc->description,
                'id_validation' => $uploadedDoc->id,
            ];
        }

        return $response;
    }
    private function generateOfferorResponse(Offeror $offeror)
    {
        //Documentos requeridos para validación
        $requiredDocuments = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();

        //Documentos validados
        $uploadedDocuments = DB::table('validations')->where('user_id', 'like', $offeror->user->id)->latest('created_at')->get();

        foreach ($requiredDocuments as $requiredDocument) {
            $uploadedDoc = new Validation();
            foreach ($uploadedDocuments as $uploadedDocument) {
                if ($requiredDocument->id == $uploadedDocument->document_validate_id) {
                    $uploadedDoc = $uploadedDocument;
                    break;
                }
            }

            $response[] = [
                'id' => $requiredDocument->id,
                'name' => $requiredDocument->name,
                'description_doc' => $requiredDocument->description,
                'file' => $uploadedDoc->file,
                'state' => $uploadedDoc->state,
                'description' => $uploadedDoc->description,
                'id_validation' => $uploadedDoc->id,
            ];
        }

        return $response;
    }


    public function store(Request $request)
    {
        $document_validate = DocumentValidate::findOrFail($request->document_validate_id);

        $this->authorize("create", $document_validate);

        $validatedData = $request->validate([
            'user_id' => 'required| numeric',
            'document_validate_id' => 'required|numeric',
            'offeror_or_customer' => 'required|numeric',
            'natural_or_juridical' => 'required|numeric',
            'file' => 'required',
            'description' => 'required',
            'state' => 'required'
        ]);

        if ($request->file('file')) {
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $validatedData['file'] = $path;
        }

        $validation = Validation::create($validatedData);

        flashy()->success(__('messages.document_uploaded'));

        $isOfferor = Auth()->user()->offeror;
        $iscustomer = Auth()->user()->customer;

        if (isset($isOfferor)) {
            return redirect(route('validations.index', Auth()->user()->offeror));
        } elseif (isset($iscustomer)) {
            return redirect(route('validations.index_customer', Auth()->user()->customer));
        } elseif (!isset($iscustomer) && !isset($isOfferor)) {
            $user = User::findOrFail($validatedData['user_id']);
            if ($validatedData['offeror_or_customer'] == 2) {
                return redirect(route('offerors.show', $user->offeror->id) . '#btabs-static-validations');
            } else {
                return redirect(route('customers.show', $user->customer->id) . '#btabs-static-validations');
            }
        }
    }


    public function destroy(Validation $validation)
    {
        $validation->delete();

        $this->authorize("delete", $validation);

        return redirect('/validations')->with('success', 'Registro eliminado correctamente');
    }

}
