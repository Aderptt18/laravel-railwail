<?php

namespace App\Policies;

use App\Models\Compras;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ComprasPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(['Super', 'Admin', 'GestionCompras']);
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Compras $compras): bool
    {
        return $user->hasRole(['Super', 'Admin', 'GestionCompras']);
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasRole(['Super', 'GestionCompras']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Compras $compras): bool
    {
        return $user->hasRole(['Super', 'GestionCompras']);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Compras $compras): bool
    {
        return $user->hasRole(['Super']);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Compras $compras): bool
    {
        return $user->hasRole(['Super']);
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Compras $compras): bool
    {
        return $user->hasRole(['Super']);
    }
}
