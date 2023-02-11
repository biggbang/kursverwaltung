<?php

namespace App\Policies;

use Event;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class EventPolicy
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
     * Determine whether the user can view the Event.
     *
     * @param  User  $user
     * @param  Event  $event
     * @return mixed
     */
    public function view(User $user, Event  $event)
    {
        return true;
    }
    /**
     * Determine whether the user can create Event.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Event.
     *
     * @param User $user
     * @param  Event  $event
     * @return mixed
     */
    public function update(User $user, Event  $event)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Event.
     *
     * @param User  $user
     * @param  Event  $event
     * @return mixed
     */
    public function delete(User $user, Event  $event)
    {
        return true;
    }

}
