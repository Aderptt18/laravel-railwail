<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Policies\ClientesPolicy;
use App\Policies\ProductosPolicy;
use App\Policies\ComprasPolicy;
use App\Policies\ProveedoresPolicy;
use App\Policies\UsersPolicy;
use App\Policies\RolesPolicy;
use App\Policies\VentasPolicy;
use App\Models\Clientes;
use App\Models\Compras;
use App\Models\Productos;
use App\Models\Proveedores;
use App\Models\Role;
use App\Models\User;
use App\Models\Ventas;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Clientes::class => ClientesPolicy::class,
        Productos::class => ProductosPolicy::class,
        Compras::class => ComprasPolicy::class,
        Proveedores::class => ProveedoresPolicy::class,
        Role::class => RolesPolicy::class,
        User::class => UserPolicy::class,
        Ventas::class => VentasPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
    }
}
