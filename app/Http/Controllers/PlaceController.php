<?php

namespace App\Http\Controllers;

use App\Place;
use Illuminate\Http\Request;
use Freshbitsweb\Laratables\Laratables;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('places.index');
    }

    /**
     * @return array
     */
    public function getListDataTables()
    {
        return Laratables::recordsOf(Place::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create');
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
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'state' => 'required|numeric',
            'user_at' => 'required|max:25',
            'date_at' => ''
        ]);
        $place = Place::create($validatedData);

        return redirect('/places')->with('success', 'Creación correcta');
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
    public function edit($id)
    {
        $place = Place::findOrFail($id);
        return view('places.edit', ['place' => $place]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'state' => 'required|numeric',
            'user_at' => 'required|max:25',
            'date_at' => ''
        ]);
        Place::whereId($id)->update($validatedData);

        return redirect('/places')->with('success', 'Editción correcta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return redirect('/places')->with('success', 'Eliminación correcta');
    }
}
