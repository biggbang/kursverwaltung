<?php

namespace App\Policies;

use \App\Models\Customer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CustomerPolicy
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
     * Determine whether the user can view the Customer.
     *
     * @param  User  $user
     * @param  Customer  $customer
     * @return mixed
     */
    public function view(User $user, Customer  $customer)
    {
        return true;
    }
    /**
     * Determine whether the user can create Customer.
     *
     * @param  User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }
    /**
     * Determine whether the user can update the Customer.
     *
     * @param User $user
     * @param  Customer  $customer
     * @return mixed
     */
    public function update(User $user, Customer  $customer)
    {
        return true;
    }
    /**
     * Determine whether the user can delete the Customer.
     *
     * @param User  $user
     * @param  Customer  $customer
     * @return mixed
     */
    public function delete(User $user, Customer  $customer)
    {
        return true;
    }

}
