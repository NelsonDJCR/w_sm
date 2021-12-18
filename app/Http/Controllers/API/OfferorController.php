<?php

namespace App\Http\Controllers\API;

use App\Offeror;
use App\Album;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Validation\Rule;

class OfferorController extends Controller
{
    public function getFeatured()
    {
        $offPag = Offeror::with(['user', 'albums'])
        ->where('validated', "1")
        ->orderBy('id', 'DESC')
        ->paginate(30);

        $itemsTransformed = $offPag
            ->getCollection()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'user' => [
                        'name' => $item->user->name,
                        'city' => $item->city->name,
                        'height' => $item->height . ' cm',
                        'talents' => substr($item->aptitudes, 0, 20) . ' ...'
                    ],
                    'avatar' => $item->user->getAvatar(),
                    'cover' => $item->albums->first()->getCover(),
                    'slug' => route('offerors.show', $item)
                ];
            });

        $itemsTransformedAndPaginated = new LengthAwarePaginator(
            $itemsTransformed,
            $offPag->total(),
            $offPag->perPage(),
            $offPag->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $offPag->currentPage()
                ]
            ]
        );
        return $itemsTransformedAndPaginated;
    }
    public function getAccount(Offeror $offeror)
    {
        $response = [];
        $response['status'] = $offeror->validated;
        $response['email'] = $offeror->user->email_verified_at==NULL;
        $response['percent'] = $offeror->getCompletePercentage();
        $response['gallery'] = $offeror->getAlbums();
        $response['services'] = $offeror->getQuantityServices();
        $response['accesories'] = $offeror->getQuantityAccessories();
        $response['experience'] = $offeror->getQuantityExperience();
        $response['financial_info'] = $offeror->getAccounts();
        $response['avalilability'] = $offeror->getAvailability();
        $response['validate'] = !($offeror->getCompletePercentage()<60 || $offeror->getAlbums()==0 || $offeror->getQuantityServices()==0|| $offeror->getAvailability()==0);
        $response['balance'] = number_format($offeror->summary->balance, 2, ",", ".");
        $response['request'] =  $offeror->getServiceRequest();
        return $response;
    }
    public function deactivate(Offeror $offeror)
    {
        $offeror->validated=0;
        return  $offeror->save() ? '1' : '0';
    }
    public function activate(Offeror $offeror)
    {
        $can_be_activated = $offeror->getActivateAccount($offeror->user_id);
        if ($can_be_activated == 0)
        {
            return '-1';
        }
        else{
            $offeror->validated=1;
            return $offeror->save() ? '1' : '0';
        }
    }
    public function show(Offeror $offeror)
    {
        return $offeror;
    }

    public function getBook(Offeror $offeror)
    {
        $bookAlbum = [];
        foreach ($offeror->albums()->first()->getMedia() as $media) {
            $bookAlbum[] = [
                'thumb_picture_url' => $media->getFullUrl('thumb'),
                'picture_url' => $media->getFullUrl('thumb'),
                'media' => $media->id,
            ];
        }
        return $bookAlbum;
    }
    public function getAlbum(Album $album)
    {
        $albumData[] = [
            'id' => $album->id,
            'title' => $album->title,
            'date'=>\Carbon\Carbon::createFromTimeString($album->created_at)->longRelativeDiffForHumans(),
            'description' => $album->description,
            'thumb_picture_url' => $album->getCover(),
            'picture_url' => $album->getCover(),
            'media'=>[]
        ];
        foreach ($album->getMedia() as $media) {
            $albumData['media'][] = [
                'thumb_picture_url' => $media->getFullUrl('thumb'),
                'picture_url' => $media->getFullUrl('thumb'),
                'media' =>$media->id,
            ];
        }
        return $albumData;
    }

    public function getServices(Offeror $offeror)
    {
        return $offeror->services;
    }
    public function getAccessories(Offeror $offeror)
    {
        return $offeror->accessories;
    }
    public function getFinancialInformation(Offeror $offeror)
    {
        return $offeror->financialInformation;
    }
    public function getMonetaryRequest(Offeror $offeror)
    {
        return $offeror->monetaryRequest;
    }

    public function getOfferor(User $user)
    {
        return $user->Offeror;
    }
    public function update(Request $request, Offeror $offeror)
    {
        $user = $offeror->user;

        $validatedData = $request->validate([
            'name' => 'required',
            'nick_name' => Rule::unique('users')->ignore($user->id),
            'email' => ['required', 'email', Rule::unique('users')->ignore($user->id)],
            'country_code' => '',
            'phone' => '',
            'state' => '',
            'language' => '',
            'avatar' => '',
        ]);

        $user->update($validatedData);

        $validatedData2 = request()->validate([
            'document' => 'required',
            'document_number' => 'required',
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
        $validatedData2["birthday"]=date('Y-m-d',strtotime($request->birthday));

        $hobbies_array = $request->input('hobbies');
        if(is_array($hobbies_array))
        {
            $hobbies_string= implode(',', $hobbies_array);
            $validatedData2["hobbies"]=$hobbies_string;
        }
        $languages_array = $request->input('languages');
        if( is_array($languages_array)) {
            $languages_string = implode(',', $languages_array);
            $validatedData2["languages"] = $languages_string;
        }
        $aptitudes_array = $request->input('aptitudes');

        if( is_array($aptitudes_array)) {
            $aptitudes_string = implode(',', $aptitudes_array);
            $validatedData2["aptitudes"] = $aptitudes_string;
        }

        $offeror->fill($validatedData2);

        return $offeror->save()? 1 : 0;
    }
    public function getAvailability(Offeror $offeror)
    {
        return $offeror->getAvailabilityJsonCalendar();
    }
}
