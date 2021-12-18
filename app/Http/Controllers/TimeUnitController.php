<?php

namespace App\Http\Controllers;

use App\TimeUnit;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class TimeUnitController extends Controller
{
    public function index()
    {
        return view('time_units.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(TimeUnit::class);
    }

    public function create()
    {
        return view('time_units.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'hour' => 'required|numeric',
            'state' => 'required|numeric',
        ]);
        $timeUnit = TimeUnit::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/time_units');
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
        $timeUnit = TimeUnit::findOrFail($id);
        return view('time_units.edit', ['timeUnit' => $timeUnit]);
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
            'hour' => 'required|numeric',
            'state' => 'required|numeric',
        ]);

        TimeUnit::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/time_units');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $timeUnit = TimeUnit::findOrFail($id);
            $timeUnit->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
        return redirect('/time_units');
    }
}
