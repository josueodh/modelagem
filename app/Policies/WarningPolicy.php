<?php

namespace App\Policies;

use App\User;
use App\Warning;
use Illuminate\Auth\Access\HandlesAuthorization;

class WarningPolicy
{
    use HandlesAuthorization;


    /**
     * Determine whether the user can create warnings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permission == 1;
    }

    /**
     * Determine whether the user can update the warning.
     *
     * @param  \App\User  $user
     * @param  \App\Warning  $warning
     * @return mixed
     */
    public function update(User $user, Warning $warning)
    {
        return $user->permission == 1;
    }

    /**
     * Determine whether the user can delete the warning.
     *
     * @param  \App\User  $user
     * @param  \App\Warning  $warning
     * @return mixed
     */
    public function delete(User $user, Warning $warning)
    {
        return $user->permission == 1;
    }
}
