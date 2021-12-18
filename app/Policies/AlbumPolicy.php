<?php

namespace App\Policies;

use App\User;
use App\Album;
use Illuminate\Auth\Access\HandlesAuthorization;

class AlbumPolicy
{
    use HandlesAuthorization;

    public function create(User $user, Album $album)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($album->offeror_id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function show(User $user, Album $album)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Client') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($album->offeror_id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function edit(User $user, Album $album)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($album->offeror_id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }

    public function delete(User $user, Album $album)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif ($user->getRoleName() == 'Model') {
            if ($album->offeror_id == $user->offeror->id) {
                return true;
            } else return false;
        } else return false;
    }


    public function updatephoto(User $user, Album $album)
    {
        if ($user->getRoleName() == 'Administrator') {
            return true;
        } elseif (($user->getRoleName() == 'Model')) {
            if (auth()->user()->id == $album->offeror->user->id) {
                return true;
            } else return false;
        } else return false;
    }
}
