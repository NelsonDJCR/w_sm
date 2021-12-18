<?php

namespace App\Http\Controllers;

use App\Offeror;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function deleteUser()
    {

        $id = Auth::user()->id;

        $offeror = Offeror::where('user_id',$id)->first();
        $offeror->validated=0;
        $offeror->save();

        
        $data = User::find($id);
        DB::table('users')
            ->where('id', $id)
            ->update([
                'state' => 0,
                'email' => base64_encode($data->email),
            ]);
       

    }
}
