<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Empleado;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $empleado = new Empleado;

        $empleado->nombre = 'Nombre de Administrador';
        $empleado->ci='12345678';
        $empleado->direccion='Completar Campo';
        $empleado->fnacimiento='2000-01-01';
        $empleado->finicio='2010-01-01';
        $empleado->sexo='M';
        $empleado->cargo='Administrador';
        $empleado->save();
        
        $user = new User;

        $user->empleado_id='1';
        $user->email='admin@mail.com';
        $user->password=bcrypt('password');
        $user->save();

    }
}
