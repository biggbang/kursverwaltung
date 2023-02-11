<?php

namespace App\Policies;

use \App\Models\Supplier;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SupplierPolicy
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
     * Determine whether the user can view the Supplier.
     *
     * @param  User  $user
     * @param  Supplier  $supplier
     * @return mixed
     */
    public function view(User $user, Supplier  $supplier)
    {
        return true;
    }
    /**
     * Determine whether the user can create Supplier.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Supplier.
     *
     * @param User $user
     * @param  Supplier  $supplier
     * @return mixed
     */
    public function update(User $user, Supplier  $supplier)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Supplier.
     *
     * @param User  $user
     * @param  Supplier  $supplier
     * @return mixed
     */
    public function delete(User $user, Supplier  $supplier)
    {
        return true;
    }

}
