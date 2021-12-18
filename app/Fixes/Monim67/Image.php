<?php

namespace App\Fixes\Monim67;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Image
{
    public function handle($fileContents)
    {
        $directory = config('lui-croppie.directory');

        $path = $directory . DIRECTORY_SEPARATOR . date('FY') . DIRECTORY_SEPARATOR;

        $filename = $this->generateFileName($path);


        $fullPath = $path . $filename . '.jpg';

        Storage::disk(config('lui-croppie.storage'))->put($fullPath, $fileContents);

        return $fullPath;
    }

    protected function generateFileName($path)
    {
        $filename = Str::random(20);

        while (Storage::disk(config('lui-croppie.storage'))->exists($path . $filename . '.jpg')) {
            $filename = Str::random(20);
        }
        return $filename;
    }

    public static function deleteFileIfExists($path)
    {
        if (Storage::disk(config('lui-croppie.storage'))->exists($path)) {
            Storage::disk(config('lui-croppie.storage'))->delete($path);
        }
    }
}
