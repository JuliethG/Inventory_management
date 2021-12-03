<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //administrador
        $user = User::create([
            'name' => 'Daniel',
            'lastname' => 'Diaz',
            'role' => 'Administrador',
            'email' => 'danield15@gmail.com',
            'password' => Hash::make('administrador2021'),
            'image' => 'imageURL',
        ]);
        $user->assignRole('admin');

        //vendedor
        $user = User::create([
            'name' => 'Stefan ',
            'lastname' => 'Millan',
            'role' => 'Vendedor',
            'email' => 'smillan00@gmail.com',
            'password' => Hash::make('vendedor2021'),
            'image' => 'imageURL',
        ]);
        $user->assignRole('seller');

        //cajero
        $user = User::create([
            'name' => 'Isa',
            'lastname' => 'Vidal',
            'role' => 'Cajera',
            'email' => 'isvidal@gmail.com',
            'password' => Hash::make('cajero2021'),
            'image' => 'imageURL',
        ]);
        $user->assignRole('cashier');

        //bodeguero
        $user = User::create([
            'name' => 'Sebastian',
            'lastname' => 'Rojas',
            'role' => 'Bodeguero',
            'email' => 'rojass@gmail.com',
            'password' => Hash::make('bodeguero2021'),
            'image' => 'imageURL',
        ]);
        $user->assignRole('grocer');
    }
}
