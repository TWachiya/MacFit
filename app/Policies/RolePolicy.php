<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;

class RolePolicy
{
    public function viewAny(User $user)
    {
        return $user->role()->first()->id === 1; // Only admin can view any role
    }
    public function view(User $user, Role $model)
    {
        return $user->role->id === 1; // Only admin can view a role
    }
    public function create(User $user)
    {
        return $user->role->id === 1; // Only admin can create a role
    }
    public function update(User $user, Role $model)
    {
        return $user->role->id === 1; // Only admin can update a role
    }
    public function delete(User $user, Role $model)
    {
        return $user->role->id === 1; // Only admin can delete a role
    }
}
