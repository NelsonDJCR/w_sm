<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\Aptitude;

class AptitudeController extends Controller
{
    public function index()
    {
        return view('aptitudes.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Aptitude::class);
    }

    public function create()
    {
        return view('aptitudes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $aptitude = Aptitude::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/aptitudes');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $aptitude = Aptitude::findOrFail($id);
        return view('aptitudes.edit', ['aptitude' => $aptitude]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Aptitude::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/aptitudes');
    }

    public function destroy($id)
    {
        try{
            $aptitude = Aptitude::findOrFail($id);
            $aptitude->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));

        }
        return redirect('/aptitudes');
    }
}
