<?php

namespace App\Http\Controllers;

use App\Offeror;
use App\ServiceRequest;
use App\ServiceRequestOfferor;
use App\Stage;
use App\User;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class ServiceRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $offeror)
    {
        return view(\Auth::user()->getBaseFolderView().'.service_request.index',['offeror'=>$offeror]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cartContent = \Cart::content();
        $cartTotal = \Cart::total();
        $cartTotal=intval(str_replace(',','',$cartTotal));
        $tax=0.11;
        $from='';
        $to='';
        $serviceRequestOfferors=array();
        foreach($cartContent as $product)
        {

            if(!isset($serviceRequestOfferors[$product->model->offeror->id]))
            {
                $serviceRequestOfferors[$product->model->offeror->id]=array();
                $serviceRequestOfferors[$product->model->offeror->id]['initial_date']=date("Y-m-d H:i:s",strtotime($request['from-date-'.$product->model->offeror->id].' '.$request['from-hour-'.$product->model->offeror->id].':00'));
                $serviceRequestOfferors[$product->model->offeror->id]['final_date']=date("Y-m-d H:i:s",strtotime($request['from-date-'.$product->model->offeror->id].' '.$request['from-hour-'.$product->model->offeror->id].':00'));
                $from=$serviceRequestOfferors[$product->model->offeror->id]['initial_date'];
                $to= $serviceRequestOfferors[$product->model->offeror->id]['final_date'];
                $serviceRequestOfferors[$product->model->offeror->id]['tax_value']=0;
                $serviceRequestOfferors[$product->model->offeror->id]['total_value']=0;
                $serviceRequestOfferors[$product->model->offeror->id]['base_value']=0;
                $serviceRequestOfferors[$product->model->offeror->id]['offeror_value']=0;
                $serviceRequestOfferors[$product->model->offeror->id]['state']=1;
                $serviceRequestOfferors[$product->model->offeror->id]['offeror_id']=$product->model->offeror->id;
                $serviceRequestOfferors[$product->model->offeror->id]['description']=$request['obser'];
                $serviceRequestOfferors[$product->model->offeror->id]['data']=array('products'=>array());

                $offeror_id =$product->model->offeror->id;

            }
            $serviceRequestOfferors[$product->model->offeror->id]['data']['products'][]=array('id'=>$product->id,'quantity'=>$product->qty,'name'=>$product->name,'base'=>$product->total/(1+$tax) ,'total'=>$product->total ,'currency'=>$product->model->currency->code);
            $serviceRequestOfferors[$product->model->offeror->id]['tax_value']+=$product->total/(1+$tax)*$tax;
            $serviceRequestOfferors[$product->model->offeror->id]['total_value']+=$product->total+0;
            $serviceRequestOfferors[$product->model->offeror->id]['base_value']+=($product->total/(1+$tax))+0;
            $serviceRequestOfferors[$product->model->offeror->id]['offeror_value']+=($product->total/(1+$tax))+0;
        }



        $serviceRequestData=array();
        $serviceRequestData['consecutive']=1;
        $serviceRequestData['customer_id']=auth()->user()->customer->id;
        $serviceRequestData['initial_date']=$from;
        $serviceRequestData['final_date']=$to;
        $serviceRequestData['total_models']=count($cartContent);
        $serviceRequestData['billable_items']=count($cartContent);
        $serviceRequestData['total_value']=$cartTotal;
        $serviceRequestData['tax_value']=$cartTotal;
        $serviceRequestData['base_value']=$cartTotal;
        $serviceRequestData['city_id']=$request['city_id'];
        $serviceRequestData['address']=$request['address'];
        $serviceRequestData['contact']=$request['contact'];
        $serviceRequestData['phone_contact']=$request['phone_contact'];
        $serviceRequestData['state']=1;
        $serviceRequestData['reference']='';
        $serviceRequestData['description']=$request['obser'];
        $serviceRequestData['data']=json_encode($cartContent);
          $serviceRequest = new ServiceRequest($serviceRequestData);
        $serviceRequest->save();

        foreach($serviceRequestOfferors as $key => $value)
        {

            $value['service_request_id']=$serviceRequest->id;
            $value['consecutive']=$serviceRequest->id;
            $value['customer_id']=auth()->user()->customer->id;
            $value['data']=json_encode($value['data']);
            $serviceRequestOfferorInt = new ServiceRequestOfferor($value);
            $serviceRequestOfferorInt->save();
            
            $of = Offeror::find($offeror_id);
            $offeror =User::find( $of->user_id);
            $customer =User::find( auth()->user()->customer->user_id);


            // Envio de mensaje de texto
            $phone ="+57$offeror->phone";
            $msg = "Hola ". $offeror->nick_name.", $customer->nick_name ha visto tu perfil y ha solicitado tus servicios ingresa a smirrow.com y acepta la solicitud para procesar el pago";

            $this->sendSms($msg,$phone);
            $offeror = Offeror::find($value['offeror_id']);

        }
        $serviceRequest->consecutive=$serviceRequest->id;
        $serviceRequest->save();
        flashy()->success(__('messages.create_service_request'));
        Stage::restoreCart();
        \Cart::destroy();
        Stage::storeCart();
        return redirect(route('service_request.show',$serviceRequest->id));
    }

    
    /*
        Función para el envio de mensajes al solicitar un nuevo servicio
    
    */

    public function sendSms($msg, $phone)
    {
        $sid    = "AC86d4a3b0c34fa9bb714bb3e37c93ad5a"; 
        $token  = "f0cfc7f3abbc2ea586dd595d8db3c6ec"; 
        $twilio = new Client($sid, $token); 
         
        $message = $twilio->messages 
        ->create("$phone", 
                array(  
                    "messagingServiceSid" => "MGdeff29ca19820ff8c4fc3368383d2e21",      
                    "body" => "$msg" 
                ) 
        ); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceRequest $serviceRequest)
    {
        return view(\Auth::user()->getBaseFolderView() . '.service_request.show',['serviceRequest'=>$serviceRequest]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceRequest $serviceRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceRequest  $serviceRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceRequest $serviceRequest)
    {
        //
    }

     public function confirm(Request $request)
     {
         $serviceRequest = ServiceRequest::find($request['serviceRequest']);
         $details=$serviceRequest->getServiceRequest(auth()->user()->offeror);
         foreach ($details as $detail)
         {
             $detail->state=$request['state'];
             $detail->save();
         }
         $serviceRequest->confirm();
         flashy()->success(__('messages.confirm_service_request'));
         return back();
     }

    public function pay(ServiceRequest $serviceRequest)
    {
        $serviceRequest->state=4;
        $serviceRequest->save();
        flashy()->success(__('messages.pay_service_request'));
        return back();
    }
    public function cancel(Request $request)
    {
        $serviceRequest = ServiceRequest::find($request['serviceRequest']);
        $details=$serviceRequest->getServiceRequest(auth()->user()->offeror);
        foreach ($details as $detail)
        {
            $detail->state=$request['state'];
            $detail->save();
        }

        flashy()->success(__('messages.cancel_service_request'));
        return back();
    }
    public function confirmPayment(Request $request)
    {
        $serviceRequest = ServiceRequest::find($request['serviceRequest']);
        $serviceRequest->confirmPayment();
        flashy()->success(__('messages.confirm_payment_service_request'));
        return back();
    }
    public function confirmRealization(Request $request)
    {
        $serviceRequest = ServiceRequest::find($request['serviceRequest']);
        $serviceRequest->confirmRealization();
        flashy()->success(__('messages.confirm_realization_service_request'));
        return back();
    }
    public function qualify(Request $request)
    {
        $serviceRequest = ServiceRequest::find($request['serviceRequest']);
        $serviceRequest->qualify();
        flashy()->success(__('messages.qualify_service_request'));
        return back();
    }

}
