<?php

namespace App\Policies;

use App\User;
use App\Operation;
use Illuminate\Auth\Access\HandlesAuthorization;

class OperationPolicy
{
    use HandlesAuthorization;

    public function view(User $user, Operation $operation)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($operation->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }
}
