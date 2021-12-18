<?php

namespace App\Http\Controllers;

use App\OfferorService;
use App\Currency;
use App\Offeror;
use App\Service;
use App\TimeUnit;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class OfferorServiceController extends Controller
{
    public function index(Offeror $offeror)
    {
        try
        {
            $offerorService = new OfferorService(['offeror_id'=>auth()->user()->offeror->id]);
            $this->authorize('index', $offerorService);
            $getNumber = Auth::user()->offeror;
            $getNumber = $getNumber ? $getNumber->phone_emergeny : '';
            return view(\Auth::user()->getBaseFolderView().'.offeror_services.index', ['getNumber' => $getNumber,'offeror'=>$offeror]);
        } catch(\ErrorException $e) {
            return redirect(route('home'));
        }
    }

    public function simulator()
    {
        return view(\Auth::user()->getBaseFolderView().'.offeror_services.simulator');
    }

    public function create($id)
    {
        $offeror = Offeror::findOrFail($id);

        $offerorService = new OfferorService(['offeror_id'=>$offeror->id]);
        $this->authorize('create', $offerorService);

        $services = Service::getList();
        $time_units = TimeUnit::getList();
        $currencies = Currency::getList();
        return view(\Auth::user()->getBaseFolderView().'.offeror_services.create', ['services' => $services,'offeror'=>$offeror,'time_units'=>$time_units, 'currencies' => $currencies]);
    }

    public function store(Request $request)
    {
        $offerorService = new OfferorService(['offeror_id'=>$request->offeror_id]);
        $this->authorize('create', $offerorService);

        $validatedData = $request->validate([
            'offeror_id' => 'required|max:100',
            'service_id' => 'required|max:100',
            'time_unit_id' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'cost' => 'required|string',
            'currency_id' => 'required',
        ]);

        $validatedData['id'] = Uuid::uuid4();

        $offerorService = OfferorService::create($validatedData);
        flashy()->success(__('messages.create_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_services.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-services');
        }
    }

    public function show(OfferorService $offerorService)
    {
        return redirect(route('home'));
    }

    public function edit(OfferorService $offerorService)
    {
        $this->authorize('update', $offerorService);

        $services = Service::getList();
        $time_units = TimeUnit::getList();
        $currencies = Currency::getList();
        return view(\Auth::user()->getBaseFolderView().'.offeror_services.edit', ['offerorService'=>$offerorService, 'services'=>$services,'time_units'=>$time_units, 'currencies' => $currencies]);
    }

    public function update(Request $request, OfferorService $offerorService)
    {
        $this->authorize('update', $offerorService);

        $validatedData = $request->validate([
            'offeror_id' => 'required|max:100',
            'service_id' => 'required|max:100',
            'time_unit_id' => 'required',
            'description' => 'required',
            'quantity' => 'required|string',
            'cost' => 'required|string',
            'currency_id' => 'required',
        ]);
        $offerorService->fill($validatedData);
        $offerorService->save();
        flashy()->success(__('messages.update_success'));

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_services.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$validatedData['offeror_id']]).'#btabs-static-services');
        }
    }

    public function destroy(OfferorService $offerorService)
    {
        $this->authorize('delete', $offerorService);

        $offer=$offerorService->offeror_id;
        $offerorService->delete();

        $offeror = Auth::user()->offeror;

        if(isset($offeror)){
            return(redirect(route('offeror_services.index', $offeror->id)));
        }
        else{
            return redirect(route('offerors.show', ['offeror'=>$offer]).'#btabs-static-services');
        }
    }

    public function storeService(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required|numeric',
            'name' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required'
        ]);
        $service = Service::create($validatedData);
        return(redirect(route('offeror_services.createService', Auth::user()->offeror->id)));
    }
}
