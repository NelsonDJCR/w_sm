<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Offeror;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function signUpCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
//            'document' => 'required|string',
            'customer_type' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        DB::transaction(function () use ($request) {
            $validatedData = $request->validate([
                'name' => 'required',
                'customer_type' => 'required',
                'email' => ['required', 'email', 'unique:users'],
//                'document' => 'required',
                'password' => ['required', 'confirmed', 'min:8'],

            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'nick_name' => null,
                'email' => $validatedData['email'],
                'country_code' => '',
                'phone' => '',
                'state' => '1',
                'password' => Hash::make($request['password']),
                'language' => '',
                'avatar' => '',
            ]);

            $customer = Customer::create([
                'user_id' => $user['id'],
                'document' => '',
                'document_number' => '',
                'birthday' => null,
                'contact_name' => '',
                'contact_phone' => '',
                'customer_type' => $validatedData['customer_type'],
            ]);

            $customer->user->assignRole('Client');
        });

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Sin autorización'
            ], 401);
        }
        $user = Auth::user();
        $tokenResult = $user->createToken('ApiPassToken');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();

        return response()->json([
            'user_id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $user->getRoleName(),
            'access_token' => $tokenResult->accessToken,
            'avatar_url' => $user->getAvatar(),
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'expires_in' => Carbon::parse($tokenResult->token->expires_at)->diffInSeconds()
        ]);
    }


    public function signUpOfferor(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
        //    'document' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|confirmed',
        ]);

        DB::transaction(function () use ($request) {
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => ['required', 'email', 'unique:users'],
            //    'document' => 'required',
                'password' => ['required', 'confirmed', 'min:8'],

            ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'nick_name' => null,
                'email' => $validatedData['email'],
                'country_code' => '',
                'phone' => '',
                'state' => '1',
                'password' => Hash::make($request['password']),
                'language' => '',
                'avatar' => '',
            ]);

            $offeror = Offeror::create([
                'name' => $validatedData['name'],
                'user_id' => $user['id'],
                'document' => '',
                'document_number' => '',
                'birthday' => null,
            ]);

            $offeror->user->assignRole('Model');
        });

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Sin autorización'
            ], 401);
        }
        $user = Auth::user();
        $tokenResult = $user->createToken('ApiPassToken');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();

        return response()->json([
            'user_id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $user->getRoleName(),
            'access_token' => $tokenResult->accessToken,
            'avatar_url' => $user->getAvatar(),
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'expires_in' => Carbon::parse($tokenResult->token->expires_at)->diffInSeconds()
        ]);
    }

    /**
     * Login user and create token
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [boolean] remember_me
     * @return [string] access_token
     * @return [string] token_type
     * @return [string] expires_at
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);

        $credentials = request(['email', 'password']);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'message' => 'Sin autorización'
            ], 401);
        }
        $user = Auth::user();
        $tokenResult = $user->createToken('ApiPassToken');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addWeeks(1);
        }

        $token->save();

        return response()->json([
            'user_id' => $user->id,
            'email' => $user->email,
            'name' => $user->name,
            'role' => $user->getRoleName(),
            'access_token' => $tokenResult->accessToken,
            'avatar_url' => $user->getAvatar(),
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse($tokenResult->token->expires_at)->toDateTimeString(),
            'expires_in' => Carbon::parse($tokenResult->token->expires_at)->diffInSeconds()
        ]);
    }


    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function user(Request $request)
    {
        $authUser = $request->user();
        $user = User::with('roles.permissions', 'customer', 'offeror')->where('id', '=', $authUser->id)->firstOrFail();
        return response()->json($user);
    }
}
