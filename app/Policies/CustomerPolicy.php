<?php

namespace App\Policies;

use App\User;
use App\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return $user->getRoleName() == 'Administrator';
    }

    public function view(User $user, Customer $customer)
    {
        return $user->id == $customer->user->id || $user->getRoleName() == 'Administrator';
    }

    public function create(User $user)
    {
        return $user->getRoleName() == 'Administrator';
    }

    public function update(User $user, Customer $customer)
    {
        return $user->id == $customer->user->id || $user->getRoleName() == 'Administrator';
    }

    public function delete(User $user)
    {
        return $user->getRoleName() == 'Administrator';
    }
}
