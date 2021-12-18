<?php


namespace App\Http\Controllers\API;

use App\Album;
use App\Http\Controllers\Controller;
use App\Offeror;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\MediaLibrary\Models\Media;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = [];
        $user = auth()->user();
        if ($user->getRoleName() == 'Model') {
            foreach ($user->offeror->albums as $album) {
                $albums[] = [
                    'id' => $album->id,
                    'title' => $album->title,
                    'date'=>\Carbon\Carbon::createFromTimeString($album->created_at)->longRelativeDiffForHumans(),
                    'description' => $album->description,
                    'thumb_picture_url' => $album->getCover(),
                    'picture_url' => $album->getCover()
                ];

            }
        }
        return $albums;
    }

    public function show(Album $album)
    {
        $albumData = [
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
            ];
        }
        return $albumData;
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
        return Response::json(
            ['message' => 'Correcto'],
            200
        );
    }

}
