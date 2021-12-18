<?php

namespace App\Http\Controllers;

use App\Accessory;
use App\Currency;
use App\Offeror;
use App\OfferorAccessory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OfferorAccessoryController extends Controller
{
    public function index(Offeror $offeror)
    {
        try
        {
            $offerorAccessory = new OfferorAccessory(['offeror_id'=>auth()->user()->offeror->id]);
            $this->authorize('index', $offerorAccessory);
            $getNumber = Auth::user()->offeror;
            $getNumber = $getNumber ? $getNumber->phone_emergeny : '';
            return view(\Auth::user()->getBaseFolderView().'.offeror_accessories.index', ['getNumber' => $getNumber,'offeror'=>$offeror]);
        } catch(\ErrorException $e) {
            return redirect(route('home'));
        }
    }

    public function create($id)
    {
        $offeror = Offeror::findOrFail($id);
        $offerorAccessory = new OfferorAccessory(['offeror_id'=>$offeror->id]);
        $this->authorize('create', $offerorAccessory);

        $accessories = Accessory::getList();
        $currencies = Currency::getList();
        return view(\Auth::user()->getBaseFolderView().'.offeror_accessories.create', ['accessories' => $accessories,'offeror'=>$offeror, 'currencies' => $currencies]);
    }

    public function store(Request $request)
    {
        $offerorAccessory = new OfferorAccessory(['offeror_id'=>$request->offeror_id]);
        $this->authorize('create', $offerorAccessory);

        $validatedData = $request->validate([
            'offeror_id' => 'required|max:100',
            'accessory_id' => 'required|max:100',
            'description' => 'required',
            'cost' => 'required|string',
            'currency_id' => 'required',
        ]);

        $offerorAccessory = OfferorAccessory::create($validatedData);
        flashy()->success(__('messages.create_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_accessories.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-accessories');
        }
    }

    public function show(OfferorAccessory $offerorAccessory)
    {
        return redirect(route('home'));
    }

    public function edit(OfferorAccessory $offerorAccessory)
    {
        $this->authorize('update', $offerorAccessory);

        $accessories = Accessory::getList();
        $currencies = Currency::getList();
        return view(\Auth::user()->getBaseFolderView().'.offeror_accessories.edit',['offerorAccessory'=>$offerorAccessory,'accessories'=>$accessories, 'currencies' => $currencies]);
    }

    public function update(Request $request, OfferorAccessory $offerorAccessory)
    {
        $this->authorize('update', $offerorAccessory);

        $validatedData = $request->validate([
            'offeror_id' => 'required|max:100',
            'accessory_id' => 'required|max:100',
            'description' => 'required',
            'cost' => 'required|string',
            'currency_id' => 'required',
        ]);

        $offerorAccessory->fill($validatedData);
        $offerorAccessory->save();
        flashy()->success(__('messages.update_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_accessories.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-accessories');
        }
    }

    public function destroy(OfferorAccessory $offerorAccessory)
    {
        $this->authorize('delete', $offerorAccessory);


        $offer=$offerorAccessory->offeror_id;
        $offerorAccessory->delete();

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_accessories.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$offer]).'#btabs-static-accessories');
        }
    }

    public function autocomplete(Request $request)
    {
        $data = [];

        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("accessories")
                ->select("id","name")
                ->where('name','LIKE',"%$search%")
                ->get();
        }
        return response()->json($data);
    }
    public function storeAccessory(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'type'=>'required|numeric',
            'tags'=>'required'
        ]);
        $accessory = Accessory::create($validatedData);
        flashy()->success(__('messages.create_success'));
        return(redirect(route('offeror_accessories.createAccessory', Auth::user()->offeror->id)));
    }

}
