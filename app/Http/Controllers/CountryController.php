<?php

namespace App\Http\Controllers;

use App\Country;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('countries.index');
    }

    /**
     * @return array
     */
    public function getListDataTables()
    {
        return Laratables::recordsOf(Country::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('countries.create');
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
            'country_code' => 'required|max:100',
            'language' => 'required|max:100',
        ]);

        if($request->hasAny('state')){
            $validatedData["state"]=1;
        }else{
            $validatedData["state"]=0;
        }
        Country::create($validatedData);

        return redirect('/countries')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country){
        return view('countries.edit', ['country' => $country]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country_code' => 'required|max:100',
            'language' => 'required|max:100',
        ]);

        if($request->hasAny('state')){
            $validatedData["state"]=1;
        }else{
            $validatedData["state"]=0;
        }
        $country->fill($validatedData);
        $country->save();
        return redirect('/countries')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        try{
            $country->delete();
            flashy()->success(__('messages.delete_success'));

        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }

        return redirect('/countries');
    }
}
