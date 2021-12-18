<?php

namespace App\Policies;

use App\Offeror;
use App\User;
use App\FinancialInformation;
use Illuminate\Auth\Access\HandlesAuthorization;

class FinancialInformationPolicy
{
    use HandlesAuthorization;

    public function create(User $user, FinancialInformation $financialInformation)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($financialInformation->offeror->id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function update(User $user, FinancialInformation $financialInformation)
    {
        try {
            return $user->getRoleName() == 'Administrator' || $financialInformation->offeror_id == $user->offeror->id;
        } catch (\ErrorException $e) {
            return 0;
        }
    }
}
