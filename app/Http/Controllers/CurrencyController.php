<?php

namespace App\Http\Controllers;

use App\Currency;
use App\Country;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('currencies.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Currency::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency = new Currency();
        return view('currencies.create', ['currency' => $currency]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required',
            'symbol' => 'required',
            'description' => 'max:255',
        ]);
        $currency = Currency::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/currencies')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Currency $currency)
    {
        return view('currencies.edit', ['currency' => $currency]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Currency $currency)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required',
            'symbol' => 'required',
            'description' => 'max:255',
        ]);
        $currency->fill($validatedData);
        $currency->save();
        flashy()->success(__('messages.update_success'));

        return redirect('/currencies')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Currency $currency)
    {
        try{
            $currency->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
        return redirect('/currencies');
    }

    public function setCurrency()
    {
        flashy()->success(__('messages.update_success'));
        return back();
    }
}
