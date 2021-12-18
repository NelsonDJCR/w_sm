<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Monim67\LaravelUserImageCroppie\Events\AvatarUpdate;
use Monim67\LaravelUserImageCroppie\Http\Handlers\Image as ImageHandler;

class AvatarController extends \Monim67\LaravelUserImageCroppie\Http\Controllers\AvatarController
{
    public function edit()
    {
        return view(\Auth::user()->getBaseFolderView().'.avatar.edit');
    }

    public function update(Request $request)
    {
        $form_field = config('lui-croppie.form_input_name');
        $model_field = config('lui-croppie.db_column_name');
        $default_avatar = config('lui-croppie.default_avatar');

        $this->validate($request, [
            $form_field => config('lui-croppie.validator'),
        ]);

        if(!$request->hasFile($form_field)){
            return response()->json([
                "message" => __('lui-croppie::form.invalid_file_error_message'),
                "errors" => [
                    $form_field => [__('lui-croppie::form.invalid_file_error_message')],
                ]
            ], 422);
        }

        $file_path = (new ImageHandler())->handle($request->file($form_field));

        if($file_path){

            $user = \Auth::user();
            if($user->$model_field != $default_avatar) {
                ImageHandler::deleteFileIfExists($user->$model_field);
            }
            $user->$model_field = $file_path;
            $user->save();

            event(new AvatarUpdate($user));

            return response()->json([
                'success' => True,
                'uploaded_image_url' => asset('storage/' . $file_path),
                'redirect_url' => route('landing'),
                'message' => __('lui-croppie::form.success_message_text', [
                    'attribute' => $form_field,
                    'ATTRIBUTE' => Str::upper($form_field),
                    'Attribute' => Str::title($form_field),
                ]),
            ]);
        }
    }
}
