<?php

namespace App\Policies;

use \App\Models\Course;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CoursePolicy
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
     * Determine whether the user can view the Course.
     *
     * @param  User  $user
     * @param  Course  $course
     * @return mixed
     */
    public function view(User $user, Course  $course)
    {
        return true;
    }
    /**
     * Determine whether the user can create Course.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Course.
     *
     * @param User $user
     * @param  Course  $course
     * @return mixed
     */
    public function update(User $user, Course  $course)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Course.
     *
     * @param User  $user
     * @param  Course  $course
     * @return mixed
     */
    public function delete(User $user, Course  $course)
    {
        return true;
    }

}
