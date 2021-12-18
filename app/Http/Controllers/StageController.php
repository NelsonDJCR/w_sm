<?php

namespace App\Http\Controllers;

use App\City;
use App\OfferorAccessory;
use App\OfferorService;
use App\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function getStageList()
    {

    }


    public function store(Request $request)
    {


    }

    public function addService(OfferorService $service, Request $request)
    {
        Stage::restoreCart();
        \Cart::add($service, $request['quant-' . $request['index']]);
        Stage::storeCart();
        flashy()->success('El servicio se agregó de forma correcta, puedes verlos desde la sección stage');
        return back();
    }

    public function addAccessory(OfferorAccessory $accessory, $quantity)
    {
        Stage::restoreCart();
        \Cart::add($accessory, $quantity);
        Stage::storeCart();
        flashy()->success('El accesorio se agregó de forma correcta, puedes verlos desde la sección stage');
        return back();
    }

    public function remove($product)
    {
        Stage::restoreCart();
        try {
            \Cart::remove($product);
        } catch (\Error $error) {

        }
        Stage::storeCart();
        flashy()->success('El item se eliminó de forma correcta.');
        return back();
    }

    public function checkout()
    {
        $customer = \Auth::user()->customer;
        $cities = City::getList();
        $cartContent = \Cart::content();
        if (!$cartContent->isEmpty()) {
            $models = [];
            foreach ($cartContent as $item) {
                if (isset($models[(string)$item->model->offeror->id]['items'])) {
                    $models[(string)$item->model->offeror->id]['items'][] = $item;
                } else {
                    $models[(string)$item->model->offeror->id]['items'][] = $item;
                }

            }
            return view('client_views.stage.checkout', ['cartContent' => $cartContent, 'models' => $models, 'cities' => $cities, 'customer' => $customer]);
        } else {
            return redirect(route('home'));
        }


    }
}
