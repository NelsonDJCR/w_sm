<?php

namespace App\Policies;

use App\User;
use App\Offeror;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferorPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->getRoleName() == 'Administrator' || $user->getRoleName() == 'Agencia';
    }

    public function view(User $user, Offeror $offeror)
    {
        return $user->id == $offeror->user->id || $user->getRoleName() == 'Administrator' || $user->getRoleName() == 'Client';
    }

    public function show(User $user, Offeror $offeror)
    {
        return $user->id == $offeror->user->id || $user->getRoleName() == 'Administrator' || ($user->getRoleName() == 'Client' && $offeror->validated == 1)|| $user->getRoleName() == 'Agencia';
    }

    public function create(User $user)
    {
        return $user->getRoleName() == 'Administrator' || $user->getRoleName() == 'Agencia';
    }

    public function update(User $user, Offeror $offeror)
    {
        return $user->id == $offeror->user->id || $user->getRoleName() == 'Administrator'|| $user->getRoleName() == 'Agencia';
    }

    public function delete(User $user)
    {
        return $user->getRoleName() == 'Administrator';
    }
}
