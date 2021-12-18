<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

/**
 * @method static findOrFail($id)
 */
class Album extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = ['title', 'description', 'offeror_id', 'date'];

    public function registerAllMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 540, 500)
            ->width(500)
            ->height(500)
            ->watermark('images/whatermark.png')
            ->watermarkPosition(Manipulations::POSITION_CENTER)
            ->sharpen(10);
    }

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }


    public function getCover()
    {
        if ($this->hasMedia()) {
            return $this->getMedia()->first()->getFullUrl('thumb');
        } else {
            return asset('images/covers/empty-cover.jpg');
        }
    }

}
