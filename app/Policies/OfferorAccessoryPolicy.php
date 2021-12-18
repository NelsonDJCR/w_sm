<?php

namespace App\Policies;

use App\User;
use App\OfferorAccessory;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferorAccessoryPolicy
{
    use HandlesAuthorization;

    public function index(User $user, OfferorAccessory $offerorAccessory)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorAccessory->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function create(User $user, OfferorAccessory $offerorAccessory)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorAccessory->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function update(User $user, OfferorAccessory $offerorAccessory)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorAccessory->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function delete(User $user, OfferorAccessory $offerorAccessory)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorAccessory->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }
}
