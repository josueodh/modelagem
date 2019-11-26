<?php

namespace App\Policies;

use App\User;
use App\Departament;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartamentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the Departament.
     *
     * @param  \App\User  $user
     * @param  \App\Departament  $departament
     * @return mixed
     */
    public function view(User $user, Departament $departament)
    {
        return true;
    }
    /**
     * Determine whether the user can create departaments.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->permission == 1;
    }

    /**
     * Determine whether the user can update the departament.
     *
     * @param  \App\User  $user
     * @param  \App\Departament  $departament
     * @return mixed
     */
    public function update(User $user, Departament $departament)
    {
        return $user->permission == 1;
    }

    /**
     * Determine whether the user can delete the departament.
     *
     * @param  \App\User  $user
     * @param  \App\Departament  $departament
     * @return mixed
     */
    public function delete(User $user, Departament $departament)
    {
        return $user->permission == 1;
    }
}
