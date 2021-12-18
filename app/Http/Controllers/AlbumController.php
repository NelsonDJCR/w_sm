<?php

namespace App\Http\Controllers;

use App\Album;
use App\Offeror;
use App\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Spatie\MediaLibrary\Models\Media;

class AlbumController extends Controller
{
    public function deleteAlbum(Request $r)
    {
        return $r;
    }

    public function index(Offeror $offeror)
    {
        $getNumber = Auth::user()->offeror;
        return view(\Auth::user()->getBaseFolderView().'.album.index', ["getNumber"=>$getNumber->phone_emergeny ,'offeror'=>$offeror, 'videos'=>Videos::where('user_id', Auth::user()->id)->where('state',1)->get()]);
    }

    public function create(Offeror $offeror)
    {
        $album = new Album(['offeror_id'=>$offeror->id]);

        $this->authorize('create', $album);

        return view(Auth::user()->getBaseFolderView() .'.gallery.create', ['offeror' => $offeror]);
    }

    public function store(Request $request)
    {
        $album = new Album(['offeror_id'=>$request->offeror_id]);

        $this->authorize('create', $album);

        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'offeror_id' => 'required',
            'date' => 'required|date_format:Y-m-d',
        ]);


        $album = new Album($request->all());

        $album->save();
        flashy()->success(__('messages.create_success'));

        return redirect(route('album.show', $album));
    }

    public function uploadPictures(Request $request)
    {
        $album = Album::findOrFail($request['album_id']);

        if ($request->hasFile('file') && $request->file('file')->isValid()) {
            $album->addMediaFromRequest('file')->toMediaCollection();
        }
        return Response::json(
            ['message' => 'Correcto'],
            200
        );
    }

    public function deletePicture(Media $media)
    {
        $album = $media->model;

        $this->authorize('updatephoto', $album);

        $media->delete();
        flashy()->success(__('messages.delete_success'));
        return redirect()->back();
    }


    public function show(Album $album)
    {
        $this->authorize('show', $album);

        return view(Auth::user()->getBaseFolderView() .'.gallery.view', ['album' => $album]);
    }


    public function edit(Album $album)
    {
        $this->authorize('edit', $album);

        return view(Auth::user()->getBaseFolderView() .'.gallery.edit', ['album' => $album]);
    }

    public function update(Request $request, Album $album)
    {
        $this->authorize('edit', $album);

        if (strtolower($album->title) == 'Principal') {
            flashy()->error(__('messages.cannot_edit_this_item'));
            return redirect(route('album.show', $album));
        }
        $request->validate([
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'date' => 'required|date_format:Y-m-d',
        ]);

        $album->update($request->all());
        flashy()->success(__('messages.edit_success'));

        return redirect(route('album.show', $album));
    }

    public function destroy(Request $r)
    {
        $bank = Album::findOrFail($r->id);
        if ($bank->delete()) {
            return response()->json([
                'code'=>200,
                'title'=>'Eliminado!',
                'icon'=>'success',
                'msg'=>'Datos eliminados'
            ]);
        }
    }

    

}
