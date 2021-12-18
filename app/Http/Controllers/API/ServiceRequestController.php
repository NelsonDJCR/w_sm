<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Offeror;
use App\ServiceRequest;
use App\ServiceRequestOfferor;
use App\Stage;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceRequestController extends Controller
{
    //Gets all the service request that the user has.
    public function index()
    {
        $user = auth()->user();
        if ($user->getRoleName() == 'Client') {
            return $user->customer->serviceRequest;
        } elseif ($user->getRoleName() == 'Model') {
            return $user->offeror->serviceRequestOfferor;
        } else {
            return [];
        }
    }

    public function show(ServiceRequest $serviceRequest)
    {
        $response = $serviceRequest->toArray();
        $response['detail'] = [];
        foreach ($serviceRequest->serviceRequestOfferor as $item) {

            $response['detail'][] = [
                'request_offeror_id' => $item->id,
                'offeror_id' => $item->offeror_id,
                'state' => $item->state,
                'offeror_name' => $item->offeror->name,
                'avatar_url' => $item->offeror->user->getAvatar(),
                'cover_url' => $item->offeror->albums[0]->getCover(),
                'total_messages' => $item->messages->count(),
                'items' => json_decode($item->data, true)['products'],
            ];
        }
        return $response;
    }

    public function showDetail(ServiceRequestOfferor $serviceRequestOfferor)
    {
        $response =$serviceRequestOfferor->serviceRequest->toArray();
        $response['detail'] = $serviceRequestOfferor->toArray();
        unset($response['detail']['offeror']);
        unset($response['detail']['service_request']);
        unset($response['city']);
        $response['detail']['items'] = json_decode($response['detail']['data'], true)['products'];
        unset($response['detail']['data']);
        $response['detail']['total_messages'] = $serviceRequestOfferor->messages->count();

        $response['customer'] = $serviceRequestOfferor->serviceRequest->customer->user->name;
        return $response;
    }


    public function create(Request $request)
    {
        Stage::restoreCart();
        Stage::storeCart();

        $cartContent = \Cart::content();
        $cartTotal = \Cart::total();
        $cartTotal = intval(str_replace(',', '', $cartTotal));
        $tax = 0.3;
        $from = '';
        $to = '';
        $serviceRequestOfferors = array();
        foreach ($cartContent as $product) {

            if (!isset($serviceRequestOfferors[$product->model->offeror->id])) {

                $date = Carbon::parse($request['from-date-' . $product->model->offeror->id]);
                $hour = Carbon::parse($request['from-hour-' . $product->model->offeror->id]);

                $date->hour($hour->hour);
                $date->minute($hour->minute);

                $dateTimeRequest = $date->toDateTimeString();

                $serviceRequestOfferors[$product->model->offeror->id] = array();
                $serviceRequestOfferors[$product->model->offeror->id]['initial_date'] = $dateTimeRequest;
                $serviceRequestOfferors[$product->model->offeror->id]['final_date'] = $dateTimeRequest;
                $from = $serviceRequestOfferors[$product->model->offeror->id]['initial_date'];
                $to = $serviceRequestOfferors[$product->model->offeror->id]['final_date'];
                $serviceRequestOfferors[$product->model->offeror->id]['tax_value'] = 0;
                $serviceRequestOfferors[$product->model->offeror->id]['total_value'] = 0;
                $serviceRequestOfferors[$product->model->offeror->id]['base_value'] = 0;
                $serviceRequestOfferors[$product->model->offeror->id]['offeror_value'] = 0;
                $serviceRequestOfferors[$product->model->offeror->id]['state'] = 1;
                $serviceRequestOfferors[$product->model->offeror->id]['offeror_id'] = $product->model->offeror->id;
                $serviceRequestOfferors[$product->model->offeror->id]['description'] = $request['obser'];
                $serviceRequestOfferors[$product->model->offeror->id]['data'] = array('products' => array());
            }
            $serviceRequestOfferors[$product->model->offeror->id]['data']['products'][] = array('id' => $product->id, 'quantity' => $product->qty, 'name' => $product->name, 'base' => $product->total / (1 + $tax), 'total' => $product->total, 'currency' => $product->model->currency->code);
            $serviceRequestOfferors[$product->model->offeror->id]['tax_value'] += $product->total / (1 + $tax) * $tax;
            $serviceRequestOfferors[$product->model->offeror->id]['total_value'] += $product->total + 0;
            $serviceRequestOfferors[$product->model->offeror->id]['base_value'] += ($product->total / (1 + $tax)) + 0;
            $serviceRequestOfferors[$product->model->offeror->id]['offeror_value'] += ($product->total / (1 + $tax)) + 0;
        }
        $serviceRequestData = array();
        $serviceRequestData['consecutive'] = 1;
        $serviceRequestData['customer_id'] = auth()->user()->customer->id;
        $serviceRequestData['initial_date'] = $from;
        $serviceRequestData['final_date'] = $to;
        $serviceRequestData['total_models'] = count($cartContent);
        $serviceRequestData['billable_items'] = count($cartContent);
        $serviceRequestData['total_value'] = $cartTotal;
        $serviceRequestData['tax_value'] = $cartTotal;
        $serviceRequestData['base_value'] = $cartTotal;
        $serviceRequestData['city_id'] = $request['city_id'];
        $serviceRequestData['address'] = $request['address'];
        $serviceRequestData['contact'] = $request['contact'];
        $serviceRequestData['phone_contact'] = $request['phone_contact'];
        $serviceRequestData['state'] = 1;
        $serviceRequestData['description'] = $request['obser'];
        $serviceRequestData['data'] = json_encode($cartContent);
        $serviceRequest = new ServiceRequest($serviceRequestData);
        $serviceRequest->save();

        foreach ($serviceRequestOfferors as $key => $value) {

            $value['service_request_id'] = $serviceRequest->id;
            $value['consecutive'] = $serviceRequest->id;
            $value['customer_id'] = auth()->user()->customer->id;
            $value['data'] = json_encode($value['data']);
            $serviceRequestOfferorInt = new ServiceRequestOfferor($value);
            $serviceRequestOfferorInt->save();
            $offeror = Offeror::find($value['offeror_id']);

        }
        $serviceRequest->consecutive = $serviceRequest->id;
        $serviceRequest->save();
        Stage::restoreCart();
        \Cart::destroy();
        Stage::storeCart();
        return $serviceRequest;
    }

    public function confirm(Request $request)
    {
        $serviceRequest = ServiceRequest::find($request['serviceRequest']);
        $details = $serviceRequest->getServiceRequest(auth()->user()->offeror);
        foreach ($details as $detail) {
            $detail->state = $request['state'];
            $detail->save();
        }
        $serviceRequest->confirm();
        return response()->json('Ok', 200);
    }


    public function confirmRealization(ServiceRequest $serviceRequest)
    {
        $serviceRequest->confirmRealization();
        return response()->json('Ok', 200);
    }


}
