<?php

namespace App\Policies;

use App\User;
use App\OfferorAvailability;
use Illuminate\Auth\Access\HandlesAuthorization;

class OfferorAvailabilityPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any offeror availabilities.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the offeror availability.
     *
     * @param  \App\User  $user
     * @param  \App\OfferorAvailability  $offerorAvailability
     * @return mixed
     */
    public function view(User $user, OfferorAvailability $offerorAvailability)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($offerorAvailability->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    /**
     * Determine whether the user can create offeror availabilities.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the offeror availability.
     *
     * @param  \App\User  $user
     * @param  \App\OfferorAvailability  $offerorAvailability
     * @return mixed
     */
    public function update(User $user, OfferorAvailability $offerorAvailability)
    {
        try {
            return $user->getRoleName() == 'Administrator' || $offerorAvailability->offeror_id == $user->offeror->id;
        } catch (\ErrorException $e) {
            return 0;
        }
    }

    /**
     * Determine whether the user can delete the offeror availability.
     *
     * @param  \App\User  $user
     * @param  \App\OfferorAvailability  $offerorAvailability
     * @return mixed
     */
    public function delete(User $user, OfferorAvailability $offerorAvailability)
    {
        //
    }

    /**
     * Determine whether the user can restore the offeror availability.
     *
     * @param  \App\User  $user
     * @param  \App\OfferorAvailability  $offerorAvailability
     * @return mixed
     */
    public function restore(User $user, OfferorAvailability $offerorAvailability)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the offeror availability.
     *
     * @param  \App\User  $user
     * @param  \App\OfferorAvailability  $offerorAvailability
     * @return mixed
     */
    public function forceDelete(User $user, OfferorAvailability $offerorAvailability)
    {
        //
    }
}
