<?php

namespace App\Observers;

use App\Notifications\ServiceRequestOfferorNotification;
use App\ServiceRequestOfferor;

class ServiceRequestOfferorObserver
{
    public function created(ServiceRequestOfferor $serviceRequestOfferor)
    {
        $user = $serviceRequestOfferor->offeror->user;
        $user->notify(new ServiceRequestOfferorNotification($serviceRequestOfferor));
    }
    public function updated(ServiceRequestOfferor $serviceRequestOfferor)
    {
        if($serviceRequestOfferor->state==4||$serviceRequestOfferor->state==5)
        {
            $user = $serviceRequestOfferor->offeror->user;
            $user->notify(new ServiceRequestOfferorNotification($serviceRequestOfferor));
        }
    }
}
