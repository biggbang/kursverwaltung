<?php

namespace App\Policies;

use \App\Models\Instructor;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InstructorPolicy
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
     * Determine whether the user can view the Instructor.
     *
     * @param  User  $user
     * @param  Instructor  $instructor
     * @return mixed
     */
    public function view(User $user, Instructor  $instructor)
    {
        return true;
    }
    /**
     * Determine whether the user can create Instructor.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Instructor.
     *
     * @param User $user
     * @param  Instructor  $instructor
     * @return mixed
     */
    public function update(User $user, Instructor  $instructor)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Instructor.
     *
     * @param User  $user
     * @param  Instructor  $instructor
     * @return mixed
     */
    public function delete(User $user, Instructor  $instructor)
    {
        return true;
    }

}
