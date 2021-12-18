<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\Image\Manipulations;

class UploadImagesController extends Controller
{
    public function create()
    {
        return view('gallery.upload');
    }

    public function index(Album $album)
    {
        $photos = $album->getMedia();
        return view('gallery.index', ['photos' => $photos]);
    }

    public function store(Request $request)
    {
        $album = Album::findOrFail($request['album']);
        $fileAdders = $album
            ->addMultipleMediaFromRequest(['file'])
            
            ->watermark('images/whatermark.png')
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->each(function ($fileAdder) {
                $fileAdder->toMediaCollection();
            });

        return Response::json([
            'message' => 'Image saved Successfully'
        ], 200);
    }


}
