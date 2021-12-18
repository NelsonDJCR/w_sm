<?php

namespace App\Policies;

use App\DocumentValidate;
use App\User;
use App\Validation;
use http\Exception\InvalidArgumentException;
use Illuminate\Auth\Access\HandlesAuthorization;

class ValidationPolicy
{
    use HandlesAuthorization;

    public function create(User $user, DocumentValidate $documentValidate){
        if ($user->getRoleName() == 'Administrator'){
            return true;
        }
        elseif ($user->getRoleName() == 'Model') {
            if ($documentValidate->person_type == "Natural"){
                return true;
            }
            else{
                return false;
            }
        }
        elseif ($user->getRoleName() == 'Client') {
            if ($documentValidate->person_type == $user->customer->customer_type){
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }
    }

    public function update(User $user, Validation $val)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif (($user->getRoleName() == 'Model')) {
            if (auth()->user()->id == $val->user_id) {
                return true;
            } else return false;
        } elseif (($user->getRoleName() == 'Client')) {
            if (auth()->user()->id == $val->user_id) {
                return true;
            } else return false;
        } else return false;
    }

    public function delete(User $user)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } else return false;
    }

    public function verify(User $user)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } else return false;
    }

    public function show(User $user)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } else return false;
    }
}
