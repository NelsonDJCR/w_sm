<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\OfferorBlockAvailability;


class OfferorBlockAvailabilityController extends Controller
{
    public function index()
    {
        return view('offeror_blocks_availability.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(OfferorBlockAvailability::class);
    }

    public function create()
    {
        return view('offeror_blocks_availability.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'offeror_id' => 'required',
            'initial_date' => 'required',
            'final_date' => 'required',
            'motive' => 'max:15',
        ]);

        $block = OfferorBlockAvailability::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect(route('offeror_blocks_availability.index'));
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $offerorBlockAvailability = OfferorBlockAvailability::findorFail($id);
        return view('offeror_blocks_availability.edit', ['offerorBlockAvailability' => $offerorBlockAvailability]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'offeror_id' => 'required',
            'initial_date' => 'required',
            'final_date' => 'required',
            'motive' => '',
        ]);

        OfferorBlockAvailability::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect(route('offeror_blocks_availability.index'));
    }

    public function destroy($id)
    {
        $block = OfferorBlockAvailability::findOrFail($id);
        $block->delete();
        flashy()->success(__('messages.delete_success'));

        return redirect(route('offeror_blocks_availability.index'));
    }
}
