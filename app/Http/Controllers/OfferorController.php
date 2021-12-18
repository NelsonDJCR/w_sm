<?php

namespace App\Http\Controllers;

use App\Aptitude;
use App\BraSize;
use App\City;
use App\Contexture;
use App\Currency;
use App\Ethnicity;
use App\EyeColor;
use App\HairColor;
use App\Hobby;
use App\ModelLevel;
use App\HairLength;
use App\Jobs\SendEmail;
use App\Language;
use App\Offeror;
use App\Country;
use App\PantsSize;
use App\Profession;
use App\ShirtSize;
use App\ShoesSize;
use App\SkinColor;
use App\Style;
use App\AcademicLevel;
use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;
use App\User;
use App\Album;
use App\Videos;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class OfferorController extends Controller
{

    public function getUsers()
    {



        if (\Auth::user()->getBaseFolderView() == "agency_views") {
            
            // $offers = Offeror::where('agency',\Auth::user()->id);

            
            return Laratables::recordsOf(Offeror::class, function ($query)
            {
                return $query->where('agency', \Auth::user()->id);

            });



        }else{   
            return Laratables::recordsOf(Offeror::class);
        }




        return Laratables::recordsOf(Offeror::class);

        // return Laratables::recordsOf(Offeror::class);
        // return \Auth::user()->id;
        $id = \Auth::user()->id;

        return Offeror::where('agency', $id)->get()->toArray();
        return response()->json([
            'draw' => 2,
            'recordsTotal' => 1,
            'recordsFiltered' => 1,
            'data' => Offeror::where('agency', $id)->get()
        ]);

        // $request->toArray()
        return Offeror::where('agency', $id)->toArray();
    }

    public function index(Offeror $offeror)
    {
        // return 1;
        // return \Auth::user()->getBaseFolderView() .'.offerors.index';

        $this->authorize('index', $offeror);


        // if (\Auth::user()->getBaseFolderView() == "agency_views") {



        //     return view(\Auth::user()->getBaseFolderView() .'.offerors.index');
        // } 

        return view(\Auth::user()->getBaseFolderView() . '.offerors.index');
    }

    public function home(Offeror $offeror)
    {

        $this->authorize('view', $offeror);

        $services = $offeror->services()->getModels();
        $accessories = $offeror->accesories()->getModels();
        return "home";
        return view('offerors.home', ['offeror' => $offeror, 'services' => $services, 'accessories' => $accessories]);
    }

    public function register()
    {
        if (isset($_GET["Ag"])) {
            $agency = base64_decode($_GET["Ag"]);
        } else {
            $agency = 0;
        }

        return view('offerors.register', ['agency' => $agency]);
    }
    public function registerAgency()
    {
        if (isset($_GET["Ag"])) {
            $agency = base64_decode($_GET["Ag"]);
        } else {
            $agency = 0;
        }

        return view('agency_views.register', ['agency' => $agency]);
    }

    public function getListDataTables()
    {
        // return 1;
        return Laratables::recordsOf(Offeror::class);
    }

    public function create(Offeror $offeror)
    {
        $this->authorize('index', $offeror);

        $countries = Country::getList();
        $cities = City::getList();
        $ethnicities = Ethnicity::getList();
        $skin_colors = SkinColor::getList();
        $eye_colors = EyeColor::getList();
        $hair_colors = HairColor::getList();
        $hair_lengths = HairLength::getList();
        $contextures = Contexture::getList();
        $styles = Style::getList();
        $shoes_sizes = ShoesSize::getList();
        $shirt_sizes = ShirtSize::getList();
        $bra_sizes = BraSize::getList();
        $pants_sizes = PantsSize::getList();
        $professions = Profession::getList();
        $languages = Language::getList();
        $aptitudes = Aptitude::getList();
        $hobbies = Hobby::getList();
        $model_levels = ModelLevel::getList();
        $academic_levels = AcademicLevel::getList();

        return view(\Auth::user()->getBaseFolderView() .'.offerors.create', [
            'countries' => $countries,
            'cities' => $cities,
            'ethnicities' => $ethnicities,
            'skin_colors' => $skin_colors,
            'eye_colors' => $eye_colors,
            'hair_colors' => $hair_colors,
            'hair_lengths' => $hair_lengths,
            'contextures' => $contextures,
            'shoes_sizes' => $shoes_sizes,
            'styles' => $styles,
            'shirt_sizes' => $shirt_sizes,
            'bra_sizes' => $bra_sizes,
            'pants_sizes' => $pants_sizes,
            'professions' => $professions,
            'languages' => $languages,
            'aptitudes' => $aptitudes,
            'hobbies' => $hobbies,
            'model_levels' => $model_levels,
            'academic_levels' => $academic_levels
        ]);
    }
    public function edit(Offeror $offeror)
    {
        $this->authorize('update', $offeror);

        $countries = Country::getList();
        $cities = City::getList();
        $ethnicities = Ethnicity::getList();
        $skin_colors = SkinColor::getList();
        $eye_colors = EyeColor::getList();
        $hair_colors = HairColor::getList();
        $hair_lengths = HairLength::getList();
        $contextures = Contexture::getList();
        $styles = Style::getList();
        $shoes_sizes = ShoesSize::getList();
        $shirt_sizes = ShirtSize::getList();
        $bra_sizes = BraSize::getList();
        $pants_sizes = PantsSize::getList();
        $professions = Profession::getList();
        $languages = Language::getList();
        $aptitudes = Aptitude::getList();
        $hobbies = Hobby::getList();
        $model_levels = ModelLevel::getList();
        $academic_levels = AcademicLevel::getList();


        $hobbies_array = explode(',', $offeror->hobbies);
        $languages_array = explode(',', $offeror->languages);
        $aptitudes_array = explode(',', $offeror->aptitudes);
        $getNumber = Auth::user()->offeror;

        $getNumber = $getNumber ? $getNumber->phone_emergeny : '';




        return view(\Auth::user()->getBaseFolderView() . '.offerors.edit', [
            'getNumber' => $getNumber,
            'offeror' => $offeror,
            'countries' => $countries,
            'cities' => $cities,
            'ethnicities' => $ethnicities,
            'skin_colors' => $skin_colors,
            'eye_colors' => $eye_colors,
            'hair_colors' => $hair_colors,
            'hair_lengths' => $hair_lengths,
            'contextures' => $contextures,
            'shoes_sizes' => $shoes_sizes,
            'styles' => $styles,
            'shirt_sizes' => $shirt_sizes,
            'bra_sizes' => $bra_sizes,
            'pants_sizes' => $pants_sizes,
            'professions' => $professions,
            'languages' => $languages,
            'aptitudes' => $aptitudes,
            'hobbies' => $hobbies,
            'model_levels' => $model_levels,
            'academic_levels' => $academic_levels,
            'hobbies_seleccionados' => $hobbies_array,
            'languages_seleccionados' => $languages_array,
            'aptitudes_seleccionados' => $aptitudes_array

        ]);
    }

    public function wizzard(Offeror $offeror)
    {
        $this->authorize('update', $offeror);

        $countries = Country::getList();
        $cities = City::getList();
        return view(\Auth::user()->getBaseFolderView() . '/offerors.edit', ['offeror' => Auth::user()->offeror, 'countries' => $countries, 'cities' => $cities]);
    }


    public function store(Request $request)
    {

        $rules = [
            'email' =>  'unique:users'
        ];
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            flashy()->error(__('messages.email_registration'));
            return redirect(route('login'));
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'nick_name' => Rule::unique('users'),
            'country_code' => '',
            'phone' => '',
            'state' => '',
            'agency' => '',
            'languages' => '',
            'avatar' => '',
            'document' => '',
            'birthday' => '',
            'gender' => '',
            'height' => 'numeric',
            'weight' => 'numeric',
            'bust_measurement' => 'numeric',
            'hip_measurement' => 'numeric',
            'waist_measurement' => 'numeric',
            'bra_size' => '',
            'pants_size' => '',
            'shoes_size' => '',
            'shirt_size' => '',
            'eyes_color' => '',
            'hair_color' => '',
            'hair_length' => '',
            'has_tatoos' => '',
            'contexture' => '',
            'skin_color' => '',
            'style' => '',
            'aptitudes' => '',
            'country_id' => '',
            'city_id' => '',
            'address' => '',
            'profession' => '',
            'description' => '',
            'ethnicity' => '',
            'piercings' => '',
            'academic_level' => '',
            'level' => '',
        ]);
        $validatedData = $request->all();
        $hobbies_array = $request->input('hobbies');
        if (!empty($hobbies_array)) {
            $hobbies_string = implode(',', $hobbies_array);
            $validatedData["hobbies"] = $hobbies_string;
        }
        $languages_array = $request->input('languages');
        if (!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData["languages"] = $languages_string;
        }
        $aptitudes_array = $request->input('aptitudes');
        if (!empty($aptitudes_array)) {
            $aptitudes_string = implode(',', $aptitudes_array);
            $validatedData["aptitudes"] = $aptitudes_string;
        }

        $validatedData['password'] = Hash::make($request->password);

        $offeror = Offeror::createFromParams($validatedData);

        if ($offeror) {
            flashy()->success(__('messages.successful_registration'));
            return redirect(route('login'));
        } else {
            flashy()->error(__('generics.error'));
            return back();
        }
    }

    

    public function storeAgency(Request $request)
    {

        $rules = [
            'email' =>  'unique:users'
        ];
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            flashy()->error(__('messages.email_registration'));
            return redirect(route('login'));
        }

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8'],
            'nick_name' => Rule::unique('users'),
            'country_code' => '',
            'phone' => '',
            'state' => '',
            'agency' => '',
            'languages' => '',
            'avatar' => '',
            'document' => '',
            'birthday' => '',
            'gender' => '',
            'height' => 'numeric',
            'weight' => 'numeric',
            'bust_measurement' => 'numeric',
            'hip_measurement' => 'numeric',
            'waist_measurement' => 'numeric',
            'bra_size' => '',
            'pants_size' => '',
            'shoes_size' => '',
            'shirt_size' => '',
            'eyes_color' => '',
            'hair_color' => '',
            'hair_length' => '',
            'has_tatoos' => '',
            'contexture' => '',
            'skin_color' => '',
            'style' => '',
            'aptitudes' => '',
            'country_id' => '',
            'city_id' => '',
            'address' => '',
            'profession' => '',
            'description' => '',
            'ethnicity' => '',
            'piercings' => '',
            'academic_level' => '',
            'level' => '',
        ]);
        $validatedData = $request->all();
        $hobbies_array = $request->input('hobbies');
        if (!empty($hobbies_array)) {
            $hobbies_string = implode(',', $hobbies_array);
            $validatedData["hobbies"] = $hobbies_string;
        }
        $languages_array = $request->input('languages');
        if (!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData["languages"] = $languages_string;
        }
        $aptitudes_array = $request->input('aptitudes');
        if (!empty($aptitudes_array)) {
            $aptitudes_string = implode(',', $aptitudes_array);
            $validatedData["aptitudes"] = $aptitudes_string;
        }

        $validatedData['password'] = Hash::make($request->password);

        $offeror = Offeror::createFromAgencyParams($validatedData);

        if ($offeror) {
            flashy()->success(__('messages.successful_registration'));
            return redirect(route('login'));
        } else {
            flashy()->error(__('generics.error'));
            return back();
        }
    }


    public function show(Offeror $offeror)
    {
        $this->authorize('show', $offeror);

        $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();
        $validations = DB::table('validations')->where('user_id', 'like', $offeror->user->id)->get();
        $videos =  Videos::where('user_id', $offeror->user->id)->where('state', 1)->get();
        $schedule = $offeror->schedule;
        $currency = Currency::getCurrencyConverter();
        $datesDisabled = $offeror->getDatesDisabled();
        $daysOfWeekDisabled = $offeror->getDaysOfWeekDisabled();
        $getNumber = Auth::user()->offeror;

        if (!isset($getNumber)) {
            $getNumber = '';
        } else {
            $getNumber = $getNumber->phone_emergeny;
        }




        return view(\Auth::user()->getBaseFolderView() . '.offerors.profile', ['getNumber' => $getNumber, 'offeror' => $offeror, 'schedule' => $schedule, 'datesDisabled' => $datesDisabled, 'daysOfWeekDisabled' => $daysOfWeekDisabled, 'currency' => $currency, 'documentValidates' => $documentValidates, 'validations' => $validations, 'videos' => $videos]);
    }

    public function validation()
    {
        return view('offerors.home');
    }

    public function profile()
    {
        return $this->show(Auth::user()->offeror);
    }


    public function showAlbum($id)
    {
        return view('examples.albumOfferor', ['id' => $id]);
    }


    public function update(Request $request, $id)
    {
        $offeror = Offeror::find($id);
        $user = User::find($offeror->user_id);

        $this->authorize('update', $offeror);

        $validatedData = $request->validate([
            'name' => 'required',
            'nick_name' => Rule::unique('users')->ignore($user->id),
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'country_code' => '',
            'phone' => '',
            'phone_emergeny' => 'required|numeric|digits:10',
            'state' => '',
            'language' => '',
            'avatar' => '',
        ]);

        $user->update($validatedData);

        $validatedData2 = request()->validate([
            'user_id' => 'required',
            'document' => '',
            'document_number' => '',
            'birthday' => '',
            'gender' => '',
            'height' => '',
            'weight' => '',
            'bust_measurement' => '',
            'hip_measurement' => '',
            'waist_measurement' => '',
            'bra_size' => '',
            'pants_size' => '',
            'shoes_size' => '',
            'shirt_size' => '',
            'eyes_color' => '',
            'hair_color' => '',
            'hair_length' => '',
            'has_tatoos' => '',
            'contexture' => '',
            'skin_color' => '',
            'style' => '',
            'aptitudes' => '',
            'country_id' => '',
            'city_id' => '',
            'address' => '',
            'profession' => '',
            'description' => '',
            'ethnicity' => '',
            'piercings' => '',
            'academic_level' => '',
            'level' => '',
        ]);
        $validatedData2 = $request->all();
        $hobbies_array = $request->input('hobbies');
        if (!empty($hobbies_array)) {
            $hobbies_string = implode(',', $hobbies_array);
            $validatedData2["hobbies"] = $hobbies_string;
        }
        $languages_array = $request->input('languages');
        if (!empty($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData2["languages"] = $languages_string;
        }
        $aptitudes_array = $request->input('aptitudes');
        if (!empty($aptitudes_array)) {
            $aptitudes_string = implode(',', $aptitudes_array);
            $validatedData2["aptitudes"] = $aptitudes_string;
        }

        $offeror->fill($validatedData2);

        $offeror->save();

        flashy()->success(__('messages.update_offerors'));
        return redirect('/offerors/' . $offeror->id . '/edit');
    }

    public function destroy($id)
    {
        try {
            $offeror = Offeror::findOrFail($id);
            $user_id = $offeror['user_id'];
            $this->authorize('delete', $offeror);
            $offeror->albums()->delete();
            $offeror->schedule()->delete();
            $offeror->delete();
            $user = User::findOrFail($user_id);
            $user->delete();
            flashy()->success(__('messages.delete_offerors'));
        } catch (\Throwable $th) {
            flashy()->error(__('messages.error_dependence'));
        }
        return redirect('/offerors');
    }

    public function deactivateAccount($id)
    {
        $offeror = Offeror::findOrFail($id);
        $offeror->validated = 0;
        $offeror->save();
        flashy()->error(__('messages.deactivate_offeror_account'));
        return redirect('/home');
    }

    public function activateAccount($id)
    {
        $offeror = Offeror::findOrFail($id);
        $can_be_activated = $offeror->getActivateAccount($offeror->user_id);
        if ($can_be_activated == 0) {
            flashy()->error(__('messages.not_activate_offeror_account'));
            return redirect('/home');
        } else {
            $offeror->validated = 1;
            $offeror->save();
            flashy()->success(__('messages.activate_offeror_account'));
            return redirect('/home');
        }
    }
}
