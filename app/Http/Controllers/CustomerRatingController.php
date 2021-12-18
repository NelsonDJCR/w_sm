<?php

namespace App\Http\Controllers;

use App\CustomerRating;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CustomerRatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ratings.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(OfferorRating::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ratings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'score' => 'required|numeric',
            'offeror_id' => 'required',
            'customer_id' => 'required',
            'service_request_offeror_id' => 'required',
            'comments' => 'max:255',
        ]);
        $rating = CustomerRating::create($validatedData);
        $rating->ServiceRequestOfferor->qualifyCustomer();
        flashy()->success(__('messages.create_success'));
        return redirect(route('home'))->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OfferorRating $rating){
        return view('ratings.edit',['rating'=>$rating]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OfferorRating $rating)
    {
        $validatedData = $request->validate([
            'rating' => 'required|numeric',
            'offeror_id' => 'required',
            'customer_id' => 'required',
            'comments'=>'max:255'
        ]);
        $rating->fill($validatedData);
        $rating->save();
        flashy()->success(__('messages.update_success'));

        return redirect('/ratings')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(OfferorRating $rating)
    {
        $rating->delete();
        flashy()->success(__('messages.delete_success'));

        return redirect('/ratings')->with('success', 'Calificación eliminada correctamente');
    }
}
