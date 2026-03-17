<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
   
    public function viewAny(User $user)
    {
        return $user->role->id === 1; // Only admin can view any user
    }
    public function view(User $user, User $model)
    {
        return $user->id === $model->id || $user->role->id === 1; // Users can view their own profile or admin can view any profile
    }
    public function create(?User $user)
    {
        return true; // Allow anyone to create a user (register)
    }
    public function update(User $user, User $model)
    {
        return $user->id === $model->id || $user->role->id === 1; // Users can update their own profile or admin can update any profile
    }
    public function delete(User $user, User $model)
    {
        return $user->role->id === 1; // Only admin can delete users
    } 
    
}
