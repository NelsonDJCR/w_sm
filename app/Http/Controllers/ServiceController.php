<?php

namespace App\Http\Controllers;

use App\Service;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(\Auth::user()->getBaseFolderView().'.service.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Service::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(\Auth::user()->getBaseFolderView().'.service.create');
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
            'type' => 'required|numeric',
            'name' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required'
        ]);
        $service = Service::create($validatedData);

        return redirect('/services')->with('success', 'Creado correctamente');
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
    public function edit(Service $service)
    {
        return view(\Auth::user()->getBaseFolderView().'.service.edit',['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validatedData = $request->validate([
            'type' => 'required|numeric',
            'name' => 'required|max:255',
            'description' => 'required',
            'tags' => 'required'
        ]);
        $service->fill($validatedData);
        $service->save();

        return redirect('/services')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        try{
            $service->delete();
            flashy()->success(__('messages.delete_success'));

        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }

        return redirect('/services');
    }
}
