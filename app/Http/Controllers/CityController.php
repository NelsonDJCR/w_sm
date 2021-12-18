<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Department;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index()
    {
        return view('cities.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(City::class);
    }

    public function create()
    {
        $departments = Department::getList();
        $countries = Country::getList();
        return view('cities.create', ['departments' => $departments, 'countries' => $countries]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|max:100',
            'department_id' => 'required|max:100',
            'state' => 'required|numeric',
        ]);

        $city = City::create($validatedData);
        flashy()->success(__('messages.create_success'));

        return redirect('/cities');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $departments = Department::getList();
        $countries = Country::getList();
        $city = City::findOrFail($id);
        return view('cities.edit', ['city' => $city, 'departments' => $departments, 'countries' => $countries]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'country_id' => 'required|max:100',
            'department_id' => 'required|max:100',
            'state' => 'required|numeric',
        ]);

        City::whereId($id)->update($validatedData);
        flashy()->success(__('messages.update_success'));
        return redirect('/cities');
    }

    public function destroy($id)
    {
        try{
            $city = City::findOrFail($id);
            $city->delete();
            flashy()->success(__('messages.delete_success'));
        } catch(\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
        return redirect('/cities');
    }
}
