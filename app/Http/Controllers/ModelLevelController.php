<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\ModelLevel;

class ModelLevelController extends Controller
{
    public function index()
    {
        return view('model_levels.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(ModelLevel::class);
    }

    public function create()
    {
        return view('model_levels.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $modelLevel = ModelLevel::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('model-levels');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $modelLevel = ModelLevel::findOrFail($id);
        return view('model_levels.edit', ['modelLevel' => $modelLevel]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        ModelLevel::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/model-levels');
    }

    public function destroy($id)
    {
        $modelLevel = ModelLevel::findOrFail($id);
        $modelLevel->delete();
        flashy()->success(__('messages.delete_success'));

        return redirect('/model-levels');
    }
}
