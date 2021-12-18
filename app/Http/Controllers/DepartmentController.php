<?php

namespace App\Http\Controllers;

use App\Country;
use App\Department;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('departments.index');
    }

    /**
     * @return array
     */
    public function getListDataTables()
    {
        return Laratables::recordsOf(Department::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $countries = Country::getList();
        return view('departments.create',['countries' => $countries]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|max:100',
        ]);

        if($request->hasAny('state')){
            $validatedData["state"]=1;
        }else{
            $validatedData["state"]=0;
        }
        Department::create($validatedData);

        return redirect('/departments')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
        $countries = Country::getList();
        return view('departments.edit',['department' => $department,'countries' => $countries]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|max:100',
        ]);

        if($request->hasAny('state')){
            $validatedData["state"]=1;
        }else{
            $validatedData["state"]=0;
        }
        $department->fill($validatedData);
        $department->save();

        return redirect('/departments')->with('success', 'Editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        try{
            $department->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));

        }
        return redirect('/departments');
    }
}
