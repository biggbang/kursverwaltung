<?php

namespace App\Policies;

use \App\Models\Participation;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ParticipationPolicy
{
    use HandlesAuthorization;

    /**
     * @param User $user
     * @return bool
     */
    public function before(User $user)
    {
        //return true if user has super power
    }

        /**
     * @param User $user
     * @return bool
     */
    public function index(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can view the Participation.
     *
     * @param  User  $user
     * @param  Participation  $participation
     * @return mixed
     */
    public function view(User $user, Participation  $participation)
    {
        return true;
    }
    /**
     * Determine whether the user can create Participation.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Participation.
     *
     * @param User $user
     * @param  Participation  $participation
     * @return mixed
     */
    public function update(User $user, Participation  $participation)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Participation.
     *
     * @param User  $user
     * @param  Participation  $participation
     * @return mixed
     */
    public function delete(User $user, Participation  $participation)
    {
        return true;
    }

}
