<?php

namespace App\Policies;

use \App\Models\Extra;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ExtraPolicy
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
     * Determine whether the user can view the Extra.
     *
     * @param  User  $user
     * @param  Extra  $extra
     * @return mixed
     */
    public function view(User $user, Extra  $extra)
    {
        return true;
    }
    /**
     * Determine whether the user can create Extra.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Extra.
     *
     * @param User $user
     * @param  Extra  $extra
     * @return mixed
     */
    public function update(User $user, Extra  $extra)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Extra.
     *
     * @param User  $user
     * @param  Extra  $extra
     * @return mixed
     */
    public function delete(User $user, Extra  $extra)
    {
        return true;
    }

}
