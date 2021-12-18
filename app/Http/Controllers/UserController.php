<?php

namespace App\Http\Controllers;

use App\User;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
    }

    public function getListDataTables()
    {
        return Laratables::recordsOf(User::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required', 'string', 'max:20', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorEditInfo(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255'],
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorEditPass(array $data)
    {
        return Validator::make($data, [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function store(Request $request)
    {

        $data = $this->validator($request->all())->validate();
        if ($request->hasAny('state')) {
            $data["state"] = 1;
        } else {
            $data["state"] = 0;
        }

        User::create([
            'name' => $data['name'],
            'nick_name' => $data['nick_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'state' => $data['state'],
            'password' => Hash::make($data['password']),
            'avatar' => '',
        ]);
        flashy()->success(__('messages.create_success'));

        return redirect('/users')->with('success', 'Creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->input('Edit') == 'personal') {
            $data = $this->validatorEditInfo($request->all())->validate();
            if ($request->hasAny('state')) {
                $data["state"] = 1;
            } else {
                $data["state"] = 0;
            }

            $user->fill($data);
        } elseif ($request->input('Edit') == 'pass') {
            $data = $this->validatorEditPass($request->all())->validate();
            if ($request->hasAny('state')) {
                $data["state"] = 1;
            } else {
                $data["state"] = 0;
            }

            $data['password'] = Hash::make($data['password']);

            $user->password = Hash::make($data['password']);
            $user->fill($data);
        }

        $user->save();
        flashy()->success(__('messages.update_success'));

        return redirect(route('home'))->with('success', 'Editado correctamente');
    }


    public function setLocale($locale)
    {
        if (in_array($locale, \Config::get('app.locales'))) {
            session(['locale' => $locale]);
            if (\Auth::check()) {
                if (auth()->user()->language != $locale) {
                    $user = auth()->user();
                    $user->language = $locale;
                    $user->save();
                }
            }
        }
        return redirect()->back();
    }

    public function setCurrency($currency)
    {
        if (in_array($currency, \Config::get('app.currencies'))) {
            session(['currency' => $currency]);
            if (\Auth::check()) {
                if (auth()->user()->preferred_currency != $currency) {
                    $user = auth()->user();
                    $user->preferred_currency = $currency;
                    $user->save();
                }
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        try{
            $user->delete();
        }
        catch (Throwable $e) {
            flashy()->error(__('messages.delete_error_dependency'));
            return redirect('/users')->with('success', 'Error al eliminar');
        }
        return redirect('/users')->with('success', 'Eliminado correctamente');
    }

    public function showUpdatePasswordForm()
    {
        return view(\Auth::user()->getBaseFolderView() . '.users.update_password', ['user' => auth()->user()]);
    }

    public function updatePassword(Request $request)
    {
        $user = auth()->user();
        $data = $this->validatorEditPass($request->all())->validate();
        if ($request->hasAny('state')) {
            $data["state"] = 1;
        } else {
            $data["state"] = 0;
        }
        $data['password'] = Hash::make($data['password']);

        $user->password = $data['password'];
        $user->save();
        flashy()->success(__('messages.update_success'));

        return redirect(route('home'))->with('success', 'Editado correctamente');
    }
    public function delete(Request $r)
    {
        return 12;
        // User::find(request()->id)->delete();
    }
}
