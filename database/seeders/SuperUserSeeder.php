<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder extends Seeder
{
    public function run()
    {
        // Crear el usuario
        $user = User::create([
            'name' => 'And',
            'email' => 'and@correo.com',
            'password' => Hash::make('and'), // Cambia la contraseña
        ]);

        // Verificar si el rol 'Super' ya existe, si no, lo crea

        // Asignar el rol al usuario
        $user->assignRole('Super');
    }
}
