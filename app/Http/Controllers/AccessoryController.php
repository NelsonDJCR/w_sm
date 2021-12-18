<?php

namespace App\Http\Controllers;

use App\Accessory;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class AccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('accessories.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Accessory::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accessories.create');
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
            'description' => 'required',
            'type'=>'required|numeric',
            'tags'=>'required'
        ]);
        $accessory = Accessory::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/accessories')->with('success', 'Creado correctamente');
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
    public function edit(Accessory $accessory){
        return view('accessories.edit',['accessory'=>$accessory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accessory $accessory)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'type'=>'required|numeric',
            'tags'=>'required'
        ]);
        $accessory->fill($validatedData);
        $accessory->save();
        flashy()->success(__('messages.update_success'));

        return redirect('/accessories')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accessory $accessory)
    {
        try{
            $accessory->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
        return redirect('/accessories');
    }
}
