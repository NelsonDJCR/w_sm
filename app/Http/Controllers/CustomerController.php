<?php

namespace App\Http\Controllers;

use App\Language;
use App\User;
use App\Country;
use Illuminate\Http\Request;
use App\Customer;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{

    public function index(Customer $customer)
    {
        $this->authorize('index', $customer);

        return view('customers.index');
    }

    public function register()
    {
        return view('customers.register');
    }

    public function getListDataTables(Customer $customer)
    {
        $this->authorize('index', $customer);

        return Laratables::recordsOf(Customer::class);
    }

    public function create(Customer $customer)
    {
        $this->authorize('create', $customer);

        $languages = Language::getList();
        $countries = Country::getList();
        return view('customers.create', ['countries' => $countries, 'languages' => $languages]);
    }

    public function store(Request $request)
    {
        DB::transaction(function () use($request) {
            $validatedData = $request->validate([
                'name' => 'required',
                'customer_type' => 'required',
                'nick_name' => ['unique:users'],
                'email' => ['required', 'email', 'unique:users'],
                'country_code' => 'required',
                'phone' => '',
                'state' => 'required',
                'password' => ['required', 'confirmed', 'min:8'],
                'language' => '',
                'avatar' => '',
                'birthday' => 'nullable|date_format:Y-m-d',
            ]);

            $languages_array = $request->input('languages');
            if(!empty($languages_array)) {
                $languages_string = implode(',', $languages_array);
                $validatedData["languages"] = $languages_string;
            }

            $user = User::create([
                'name' => $validatedData['name'],
                'nick_name' => $validatedData['nick_name'],
                'email' => $validatedData['email'],
                'country_code' => $validatedData['country_code'],
                'phone' => $validatedData['phone'],
                'state' => $validatedData['state'],
                'password' => Hash::make($request['password']),
                'language' => $validatedData['languages'],
                'avatar' => '',
            ]);

            $customer = Customer::create([
                'user_id' => $user['id'],
                'customer_type' => $request['customer_type'],
                'birthday' => $request['birthday'],
                'contact_name' => $request['contact_name'],
                'contact_phone' => $request['contact_phone'],
            ]);

            flashy()->success(__('messages.create_success'));

            $customer->user->assignRole('Client');
            flashy()->success(__('messages.create_customers'));
        });
        return redirect('/customers');
    }

    public function registers(Request $request)
    {
        DB::transaction(function () use($request) {
            $validatedData = $request->validate([
                'customer_type' => 'required',
                'name' => 'required',
                'email' => ['required', 'email', 'unique:users'],
                'password' => ['required', 'confirmed', 'min:8'],

            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'nick_name' => null,
                'email' => $validatedData['email'],
                'country_code' => '1',
                'phone' => '',
                'state' => '1',
                'password' => Hash::make($request['password']),
                'language' => '',
                'avatar' => '',
            ]);

            $customer = Customer::create([
                'user_id' => $user['id'],
                'customer_type' => $validatedData['customer_type'],
                'birthday' => null,
                'contact_name' => '',
                'contact_phone' => '',
            ]);

            $customer->user->assignRole('Client');
            flashy()->success(__('messages.successful_registration'));
        });

        return redirect('/login');
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        if($customer->customer_type == "Juridical"){
            $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Juridical')->get();
        }
        else{
            $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();
        }
        $validations = DB::table('validations')->where('user_id', 'like', $customer->user->id)->get();


        $this->authorize('view', $customer);

        return view(\Auth::user()->getBaseFolderView() . '.customers.profile', ['customer'=>$customer, 'documentValidates' => $documentValidates, 'validations' => $validations]);
    }

    public function edit($id)
    {
        $countries = Country::getList();
        $customer = Customer::findOrFail($id);
        $languages = Language::getList();
        $languages_array= explode(',', $customer->user->language);

        $this->authorize('update', $customer);

        return view(\Auth::user()->getBaseFolderView() . '.customers.edit',['customer'=>$customer, 'countries' => $countries, 'languages'=>$languages, 'languages_seleccionados'=>$languages_array]);
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $user = User::find($customer->user_id);

        $this->authorize('update', $customer);

        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'customer_type' => 'required',
            'document' => '',
            'document_number' => '',
            'birthday' => '',
            'contact_name' => '',
            'contact_phone' =>'',
        ]);
        Customer::whereId($id)->update($validatedData);

        $validatedData2 = request()->validate([
            'name' => 'required',
            'nick_name' => Rule::unique ('users')->ignore($user->id),
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'country_code' => '',
            'phone' => '',
            'state' => 'required',
            'avatar' => '',
        ]);
        $languages_array = $request->input('languages');
        if(!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData2["language"] = $languages_string;
        }

        User::whereId($customer->user_id)->update($validatedData2);

        flashy()->success(__('messages.update_customers'));
        return redirect('/customers/' . $customer->id);
    }

    public function destroy($id)
    {
        try{
            $customer = Customer::findOrFail($id);
            $user_id = $customer['user_id'];
            $customer->delete();
            $this->authorize('delete', $customer);
            $user = User::findOrFail($user_id);
            $user->delete();
            flashy()->success(__('messages.delete_customers'));
        } catch(\Throwable $th) {
            flashy()->success(__('messages.delete_customers'));
        }
        return redirect('/customers');
    }
}
