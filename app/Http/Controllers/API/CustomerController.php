<?php

namespace App\Http\Controllers\API;

use App\Customer;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CustomerController extends Controller
{

    public function show(Customer $customer)
    {
        $customer['name'] = $customer->user->name;
        $customer['email'] = $customer->user->email;
        $customer['avatar_url'] = $customer->user->getAvatar();
        $customer['nick_name'] = $customer->user->nick_name;
        $customer['contact_name'] = $customer->contact_name;
        $customer['contact_phone'] = $customer->contact_phone;
        $customer['customer_type'] = $customer->customer_type;
        $customer['document'] = $customer->document;
        $customer['document_number'] = $customer->document_number;
        $customer['birthday'] = $customer->birthday;

        return $customer;
    }

    public function showByUser(User $user)
    {
        $customer = $user->customer;
        $customer['name'] = $customer->user->name;
        $customer['email'] = $customer->user->email;
        $customer['avatar_url'] = $customer->user->getAvatar();
        $customer['nick_name'] = $customer->user->nick_name;
        $customer['contact_name'] = $customer->contact_name;
        $customer['contact_phone'] = $customer->contact_phone;
        $customer['customer_type'] = $customer->customer_type;
        $customer['document'] = $customer->document;
        $customer['document_number'] = $customer->document_number;
        $customer['birthday'] = $customer->birthday;

        return $customer;
    }

    public function update(Customer $customer, Request $request)
    {
        $user = User::find($customer->user_id);

        $this->authorize('update', $customer);

        $validatedData = $request->validate([
            'user_id' => 'required|numeric',
            'customer_type' => 'required',
            'document' => 'required',
            'document_number' => 'required',
            'birthday' => 'date',
            'contact_name' => '',
            'contact_phone' => '',
        ]);

        $customer->update($validatedData);

        $validatedData2 = request()->validate([
            'name' => 'required',
            'nick_name' => Rule::unique('users')->ignore($user->id),
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'country_code' => '',
            'phone' => '',
            'state' => 'required',
            'avatar' => '',
        ]);
        $languages_array = $request->input('languages');
        if (!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData2["language"] = $languages_string;
        }

        $customer->user->update($validatedData2);

        return response()->json('Ok');
    }

    public function updateByUser(User $user, Request $request)
    {

        $customer = $user->customer;

        $this->authorize('update', $customer);

        $validatedData = $request->validate([
            'document_number' => 'required',
            'contact_name' => '',
            'contact_phone' => '',
        ]);

        $customer->update($validatedData);

        $validatedData2 = request()->validate([
            'name' => 'required',
            'nick_name' => Rule::unique('users')->ignore($user->id),
            'country_code' => '',
            'phone' => '',
            'state' => '',
            'avatar' => '',
        ]);
        $languages_array = $request->input('languages');
        if (!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData2["language"] = $languages_string;
        }

        $user->update($validatedData2);

        return response()->json('Ok');
    }


}
