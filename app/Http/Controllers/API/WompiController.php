<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WompiController extends Controller
{
    public function confirmationWompi(Request $r)
    {
        $transaction = $r->data['transaction']['status'];
        $reference =  $r->data['transaction']['reference'];

        if ($transaction == 'APPROVED') {
            $state = 5;
        }else{
            $state = 3;
        }
        
        DB::table('service_requests')
        ->where('reference', $reference)
        ->update([
            'state' => $state,
        ]);
        return 1;
    }
}
