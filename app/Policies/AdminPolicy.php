<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;


class AdminPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, User $model)
    {
		// dd($model->role == User::ROLE_ADMIN);
		// return $model->role == User::ROLE_ADMIN;
    }

    public function admin(User $user, User $model)
    {
		// dd($model->role == User::ROLE_ADMIN);
		return $model->role == User::ROLE_ADMIN;
    }


    public function owner(User $user, User $model)
    {
        return $model->role == User::ROLE_OWNER || $model->role == User::ROLE_ADMIN;
    }

    public function reader(User $user, User $model)
    {
        return $model->role == User::ROLE_READER;
    }



    //
    public function create(User $user)
    {
        //
    }

    public function update(User $user, User $model)
    {
        //
    }

    public function delete(User $user, User $model)
    {
        //
    }

    public function restore(User $user, User $model)
    {
        //
    }


    public function forceDelete(User $user, User $model)
    {
        //
    }
}
