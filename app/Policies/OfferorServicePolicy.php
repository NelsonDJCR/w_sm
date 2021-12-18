<?php

namespace App\Policies;

use App\User;
use App\OfferorService;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferorServicePolicy
{
    public function index(User $user, OfferorService $offerorService)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorService->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function create(User $user, OfferorService $offerorService)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorService->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function update(User $user, OfferorService $offerorService)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorService->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function delete(User $user, OfferorService $offerorService)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorService->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }
}
