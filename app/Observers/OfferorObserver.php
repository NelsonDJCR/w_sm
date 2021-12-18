<?php

namespace App\Observers;

use App\Album;
use App\Offeror;
use App\OfferorAvailability;
use App\Summary;

class OfferorObserver
{
    /**
     * Handle the offeror "created" event.
     *
     * @param \App\Offeror $offeror
     * @return void
     */
    public function created(Offeror $offeror)
    {
        //Create Default album to the offeror called BOOK
        $album = new Album([
            'title' => 'Principal',
            'description' => __('messages.gallery_message'),
            'offeror_id' => $offeror->id
        ]);

        $album->save();

        $schedule = new OfferorAvailability([
            'star_time' => '00:00:00',
            'end_time' => '00:00:00',
            'sunday'=>'0',
            'monday'=>'0',
            'tuesday'=>'0',
            'wednesday'=>'0',
            'thursday'=>'0',
            'friday'=>'0',
            'saturday'=>'0',
            'offeror_id' => $offeror->id
        ]);

        $schedule->save();

        $summary = new Summary([
            'offeror_id' => $offeror->id,
            'balance' => 0,
        ]);

        $Tags=$offeror->name.', '.$offeror->country->name.', '.$offeror->city->name.', '.$offeror->id.', '.$offeror->gender.', '.$offeror->height.', '.$offeror->weight.', '.$offeror->bust_measurement.', '.$offeror->hip_measurement.', '.$offeror->waist_measurement.', '.$offeror->bra_size.', '.$offeror->pants_size.', '.$offeror->shoes_size.', '.$offeror->shirt_size.', '.$offeror->eyes_color.', '.$offeror->hair_color.', '.$offeror->hair_length.', '.$offeror->has_tatoos.', '.$offeror->contexture.', '.$offeror->skin_color.', '.$offeror->style.', '.$offeror->languages.', '.$offeror->hobbies.', '.$offeror->aptitudes.', '.$offeror->profession.', '.$offeror->ethnicity.', '.$offeror->piercings.', '.$offeror->academic_level.', '.$offeror->level;
        if($offeror->tags!=$Tags)
        {
            $offeror->tags=$Tags;
            $offeror->save();
        }
        $summary->save();
    }

    /**
     * Handle the offeror "updated" event.
     *
     * @param \App\Offeror $offeror
     * @return void
     */
    public function updated(Offeror $offeror)
    {
        $Tags=$offeror->name.', '.$offeror->country->name.', '.$offeror->city->name.', '.$offeror->id.', '.$offeror->gender.', '.$offeror->height.', '.$offeror->weight.', '.$offeror->bust_measurement.', '.$offeror->hip_measurement.', '.$offeror->waist_measurement.', '.$offeror->bra_size.', '.$offeror->pants_size.', '.$offeror->shoes_size.', '.$offeror->shirt_size.', '.$offeror->eyes_color.', '.$offeror->hair_color.', '.$offeror->hair_length.', '.$offeror->has_tatoos.', '.$offeror->contexture.', '.$offeror->skin_color.', '.$offeror->style.', '.$offeror->languages.', '.$offeror->hobbies.', '.$offeror->aptitudes.', '.$offeror->profession.', '.$offeror->ethnicity.', '.$offeror->piercings.', '.$offeror->academic_level.', '.$offeror->level;
        if($offeror->tags!=$Tags)
        {
            $offeror->tags=$Tags;
            $offeror->save();
        }

    }

    /**
     * Handle the offeror "deleted" event.
     *
     * @param \App\Offeror $offeror
     * @return void
     */
    public function deleted(Offeror $offeror)
    {
        //
    }

    /**
     * Handle the offeror "restored" event.
     *
     * @param \App\Offeror $offeror
     * @return void
     */
    public function restored(Offeror $offeror)
    {
        //
    }

    /**
     * Handle the offeror "force deleted" event.
     *
     * @param \App\Offeror $offeror
     * @return void
     */
    public function forceDeleted(Offeror $offeror)
    {
        //
    }
}
