<?php

namespace App\Observers;

use App\Notifications\ServiceRequestNotification;
use App\ServiceRequest;

class ServiceRequestObserver
{
    public function updated(ServiceRequest $serviceRequest)
    {
        if($serviceRequest->state==3||$serviceRequest->state==5)
        {
            $user = $serviceRequest->customer->user;
            $user->notify(new ServiceRequestNotification($serviceRequest));
        }

    }
}
