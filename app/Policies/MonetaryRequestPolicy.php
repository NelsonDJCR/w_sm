<?php

namespace App\Policies;

use App\User;
use App\MonetaryRequest;
use Illuminate\Auth\Access\HandlesAuthorization;

class MonetaryRequestPolicy
{
    use HandlesAuthorization;

    public function create(User $user, MonetaryRequest $monetaryRequest)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($monetaryRequest->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function view(User $user, MonetaryRequest $monetaryRequest)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($monetaryRequest->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function update(User $user, MonetaryRequest $monetaryRequest)
    {
        try {
            return $user->getRoleName() == 'Administrator';
        } catch (\ErrorException $e) {
            return 0;
        }
    }
}
