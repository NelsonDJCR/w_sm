<?php

namespace App\Http\Controllers;

use App\Offeror;
use App\OfferorAvailability;
use Illuminate\Http\Request;

class OfferorAvailabilityController extends Controller
{
    public function index(OfferorAvailability $schedule)
    {
        $this->authorize('view', $schedule);

        $datesDisabled=$schedule->offeror->getDatesDisabled();
        $daysOfWeekDisabled=$schedule->offeror->getDaysOfWeekDisabled();
        $getNumber = \Auth::user()->offeror;
        $getNumber = $getNumber ? $getNumber->phone_emergeny : '';
        if(auth()->user()->offeror){
            return view(\Auth::user()->getBaseFolderView().'.offeror_availability.index', ['getNumber' => $getNumber,'schedule'=>$schedule,'datesDisabled'=>$datesDisabled,'daysOfWeekDisabled'=>$daysOfWeekDisabled]);
        } else {
            return redirect(route('home'));
        }
    }

    public function edit(OfferorAvailability $schedule)
    {
        $this->authorize('update', $schedule);
        $checked=array(
            'sunday'=>$schedule->sunday==1 ? 'checked':'',
            'monday'=>$schedule->sunday==1 ? 'checked':'',
            'tuesday'=>$schedule->sunday==1 ? 'checked':'',
            'wednesday'=>$schedule->sunday==1 ? 'checked':'',
            'thursday'=>$schedule->sunday==1 ? 'checked':'',
            'friday'=>$schedule->sunday==1 ? 'checked':'',
            'saturday'=>$schedule->sunday==1 ? 'checked':''
        );

        return view(\Auth::user()->getBaseFolderView().'.offeror_availability.edit', ['schedule'=>$schedule,'checked'=>$checked]);
    }

    public function update(Request $request, OfferorAvailability $schedule)
    {
        $this->authorize('update', $schedule);

        $schedule->star_time=$request['star_time'];
        $schedule->end_time=$request['end_time'];
        $schedule->sunday=0;
        $schedule->monday=0;
        $schedule->tuesday=0;
        $schedule->wednesday=0;
        $schedule->thursday=0;
        $schedule->friday=0;
        $schedule->saturday=0;
        if(isset($request['sunday']))
        {
            $schedule->sunday=$request['sunday'];
        }
        if(isset($request['monday']))
        {
            $schedule->monday=$request['monday'];
        }
        if(isset($request['tuesday']))
        {
            $schedule->tuesday=$request['tuesday'];
        }
        if(isset($request['wednesday']))
        {
            $schedule->wednesday=$request['wednesday'];
        }
        if(isset($request['thursday']))
        {
            $schedule->thursday=$request['thursday'];
        }
        if(isset($request['friday']))
        {
            $schedule->friday=$request['friday'];
        }
        if(isset($request['saturday']))
        {
            $schedule->saturday=$request['saturday'];
        }

        $schedule->save();
        flashy()->success(__('messages.update_success'));
        return redirect(route('offeror_availability.index', $schedule->id));
    }

    public function destroy(OfferorAvailability $offerorAvailability)
    {
        $offer=$offerorAvailability->offeror_id;
        $offerorAvailability->delete();
        return redirect('/offerors/'.$offer);
    }
}
