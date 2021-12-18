<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\Bank;

class BankController extends Controller
{
    public function index()
    {
        return view('banks.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(Bank::class);
    }

    public function create()
    {
        return view('banks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255'
        ]);

        $bank = Bank::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/banks');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $bank = Bank::findOrFail($id);
        return view('banks.edit', ['bank' => $bank]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        Bank::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/banks');
    }

    public function destroy($id)
    {
        try{
            $bank = Bank::findOrFail($id);
            $bank->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
    }
}
