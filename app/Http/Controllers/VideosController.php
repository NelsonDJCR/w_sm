<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class VideosController extends Controller
{

    public function store(Request $request)
    {

        $rules = [
            'video_first' => 'mimes:mp4|max:700000 ',
            'video_two' => 'mimes:mp4|max:700000 ',
            'video_three' => 'mimes:mp4|max:700000 ',
        ];
        $validator = Validator::make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['code' => 406, 'msg' => $validator->errors()->first()]);
        }


        if ($request->video_first == null & $request->video_two == null & $request->video_three == null) {
            return response()->json(['code' => 406, 'msg' => 'No ha ingresado ningún archivo']);
        }

        $registers =  count(Videos::where('user_id', Auth::user()->id)->where('state', 1)->get());


        if ($registers <=  3) {
            if ($request->hasFile('video_first')) {
                $video = $request->file('video_first')->store('videos', 'public');
                $this->saveVideo($video);
            }
            if ($request->hasFile('video_two')) {
                $video = $request->file('video_two')->store('videos', 'public');
                $this->saveVideo($video);
            }

            if ($request->hasFile('video_three')) {
                $video = $request->file('video_three')->store('videos', 'public');
                $this->saveVideo($video);
            }
            return response()->json([
                'code' => 200,
                'msg' => 'Datos guardados correctamente'
            ]);
        } else {
            return response()->json([
                'code' => 406,
                'msg' => 'Solo se pueden añadir máximo 3 videos'
            ]);
        }
    }

    public function saveVideo($route)
    {
        $user_id =  Auth::user()->id;
        $o = new Videos();
        $o->user_id =  $user_id;
        $o->route = $route;
        $o->save();
    }



    public function delete(Request $r)
    {
        $o = Videos::find($r->id);
        $o->state = 0;
        if ($o->save()) {
            return response()->json([
                'code' => 200,
                'msg' => 'Eliminado correctamente'
            ]);
        }
    }
}
