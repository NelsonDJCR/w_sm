<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\OfferorAccessory;
use App\OfferorService;
use App\Stage;
use Illuminate\Http\Request;

class StageController extends Controller
{
    public function getList()
    {

    }

    public function getCart()
    {
        Stage::restoreCart();
        Stage::storeCart();

        $cartContent = \Cart::content();
        $models = [];
        foreach ($cartContent as $item) {
            if (isset($models[(string)$item->model->offeror->id]['items'])) {
                $models[(string)$item->model->offeror->id]['items'][] = $item;
            } else {
                $models[(string)$item->model->offeror->id]['items'][] = $item;
                $models[(string)$item->model->offeror->id]['offeror_name'] = $item->model->offeror->name;
                $models[(string)$item->model->offeror->id]['offeror_id'] = $item->model->offeror->id;
                $models[(string)$item->model->offeror->id]['avatar_url'] = $item->model->offeror->user->getAvatar();
                $models[(string)$item->model->offeror->id]['cover_url'] = $item->model->offeror->albums[0]->getCover();
                $models[(string)$item->model->offeror->id]['date_picker_obj'] = $item->model->offeror->getAvailabilityJson();
            }
        }

        return [
            'total' => \Cart::totalFloat(),
            'content' => array_values($models)
        ];

    }

    public function addService(OfferorService $service, Request $request)
    {
        Stage::restoreCart();
        \Cart::add($service, $request['quantity']);
        Stage::storeCart();
        return $this->getCart();
    }

    public function addAccessory(OfferorAccessory $accessory, Request $request)
    {
        Stage::restoreCart();
        \Cart::add($accessory, $request['quantity']);
        Stage::storeCart();
        return $this->getCart();
    }

    public function remove($product)
    {
        Stage::restoreCart();
        \Cart::remove($product);
        Stage::storeCart();
        return $this->getCart();
    }

    public function checkout()
    {
        $cartContent = \Cart::content();
        $models = [];
        foreach ($cartContent as $item) {
            if (isset($models[(string)$item->model->offeror->id]['items'])) {
                $models[(string)$item->model->offeror->id]['items'][] = $item;
            } else {
                $models[(string)$item->model->offeror->id]['items'][] = $item;
            }

        }
        return $models;
    }
}
