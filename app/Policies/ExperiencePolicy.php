<?php

namespace App\Policies;

use App\User;
use App\Experience;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExperiencePolicy
{
    use HandlesAuthorization;

    public function create(User $user, Experience $experience)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($experience->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function update(User $user, Experience $experience)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($experience->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function delete(User $user, Experience $experience)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($experience->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

}
