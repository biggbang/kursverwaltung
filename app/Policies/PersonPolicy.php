<?php

namespace App\Policies;

use \App\Models\Person;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonPolicy
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
     * Determine whether the user can view the Person.
     *
     * @param  User  $user
     * @param  Person  $person
     * @return mixed
     */
    public function view(User $user, Person  $person)
    {
        return true;
    }
    /**
     * Determine whether the user can create Person.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Person.
     *
     * @param User $user
     * @param  Person  $person
     * @return mixed
     */
    public function update(User $user, Person  $person)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Person.
     *
     * @param User  $user
     * @param  Person  $person
     * @return mixed
     */
    public function delete(User $user, Person  $person)
    {
        return true;
    }

}
