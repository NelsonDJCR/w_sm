<?php

namespace App\Http\Controllers;

use App\EpaycoPayment;
use App\Offeror;
use App\ServiceRequest;
use App\ServiceRequestOfferor;
use App\User;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Twilio\Rest\Client as Twillio;

class EpaycoPaymentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     * @throws \GuzzleHttp\Exception\GuzzleException
     */

    public function paywall(ServiceRequest $serviceRequest)
    {
        return view('.epayco_payment.paywall',['serviceRequest'=>$serviceRequest]);
        if(isset($serviceRequest))
        {
            return view('.epayco_payment.paywall',['serviceRequest'=>$serviceRequest]);
        }
        else
        {
            return back();
        }
    }

    public function index()
    {
        if(isset($_REQUEST['ref_payco']))
        {
            $ref_payco=$_REQUEST['ref_payco'];
        }

        if (isset($ref_payco)) {
            $client = new Client();
            $res = $client->request('GET', env('EPAYCO_API','https://secure.epayco.co/validation/v1/reference/') . $ref_payco, []);
            $result=\GuzzleHttp\json_decode($res->getBody(), true)['data'];
            $serviceRequest=ServiceRequest::find($result['x_id_invoice']);
            if($result['x_response']=='Aceptada')
            {
                $serviceRequest->confirmPayment();
            }
            elseif($result['x_response']=='Rechazada')
            {

            } elseif($result['x_response']=='Pendiente')
            {

            } elseif($result['x_response']=='Fallida')
            {

            }
            return redirect(route('service_request.show',$result['x_id_invoice']));
            //['response' => \GuzzleHttp\json_decode($res->getBody(), true)['data']];
        }
        else
            return back();
    }

    public function indexWeb()
    {
        $serviceRequest=null;
        $response='';
        if(isset($_REQUEST['ref_payco']))
        {
            $ref_payco=$_REQUEST['ref_payco'];
        }

        if (isset($ref_payco)) {
            $client = new Client();
            $res = $client->request('GET', env('EPAYCO_API','https://secure.epayco.co/validation/v1/reference/') . $ref_payco, []);
            $result=\GuzzleHttp\json_decode($res->getBody(), true)['data'];
            $serviceRequest=ServiceRequest::find($result['x_id_invoice']);
            if($result['x_response']=='Aceptada')
            {
                $serviceRequest->confirmPayment();
                $response='Aceptada';
            }
            elseif($result['x_response']=='Rechazada')
            {
                $response='Rechazada';
            } elseif($result['x_response']=='Pendiente')
            {
                $response='Pendiente';
            } elseif($result['x_response']=='Fallida')
            {
                $response='Fallida';
            }
        }
        else
        {
            $response='not_found';
        }
        return view('.epayco_payment.response',['serviceRequest'=>$serviceRequest,'response'=>$response]);
    }


    public function createReference(Request $r)
    {
        // Crear referencia
        $code =  "SM" . 
        (rand(1111,9999)) . 
        chr(rand(ord('A'), ord('Z'))).
        chr(rand(ord('A'), ord('Z'))).
        (rand(111,999)).
        chr(rand(ord('A'), ord('Z'))).
        chr(rand(ord('A'), ord('Z'))).
        (rand(111,999)).
        chr(rand(ord('A'), ord('Z')));

        DB::table('service_requests')
             ->where('id', $r->ref_id)
             ->update([
                  'reference' => $code,
                //   'state' => 7,
              ]);

              return $code;
    }

    public function processPayment(Request $r) {
        DB::table('service_requests')
        ->where('id', $r->ref_id)
        ->update([
            'state' => $r->state,
        ]);


        // Send SMS confirm

        $x = ServiceRequestOfferor::where('service_request_id',$r->ref_id)->first();
        $x = Offeror::where('id',$x->offeror_id)->first();
        $x = User::find($x->user_id);
        
        $msg = Auth::user()->name. " ha realizado el pago de tus servicios ingresa a smirrow.com para más información";
        $das    = "AC86d4a3b0c34fa9bb714bb3e37c93ad5a"; 
        $token  = "f0cfc7f3abbc2ea586dd595d8db3c6ec"; 
        $twilio = new Twillio($das, $token); 
        $twilio->messages 
        ->create("+57$x->phone", 
        array(  
            "messagingServiceSid" => "MGdeff29ca19820ff8c4fc3368383d2e21",      
            "body" => $msg
            ) 
        ); 


        // ServiceRequest::find(r|equest()->id)->update(request()->all());
        return 1;
        // if(isset($_REQUEST['ref_payco']))
        // {
        //     $ref_payco=$_REQUEST['ref_payco'];
        // }

        // if (isset($ref_payco)) {
        //     $client = new Client();
        //     $res = $client->request('GET', env('EPAYCO_API','https://secure.epayco.co/validation/v1/reference/') . $ref_payco, []);
        //     $result=\GuzzleHttp\json_decode($res->getBody(), true)['data'];
        //     $serviceRequest=ServiceRequest::find($result['x_id_invoice']);
        //     echo $result['x_response'];
        //     if($result['x_response']=='Aceptada')
        //     {
        //         $serviceRequest->confirmPayment();
        //     }
        //     elseif($result['x_response']=='Rechazada')
        //     {

        //     } elseif($result['x_response']=='Pendiente')
        //     {

        //     } elseif($result['x_response']=='Fallida')
        //     {

        //     }
        // } else
        //     return 'Invalid Parameters';
    }
    
}
