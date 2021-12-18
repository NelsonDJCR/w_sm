<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\Hobby;

class HobbyController extends Controller
{
    public function index()
    {
        return view('hobbies.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Hobby::class);
    }

    public function create()
    {
        return view('hobbies.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $hobby = Hobby::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/hobbies');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $hobby = Hobby::findOrFail($id);
        return view('hobbies.edit', ['hobby' => $hobby]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Hobby::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/hobbies');
    }

    public function destroy($id)
    {
        $hobby = Hobby::findOrFail($id);
        $hobby->delete();
        flashy()->success(__('messages.delete_success'));

        return redirect('/hobbies');
    }
}
