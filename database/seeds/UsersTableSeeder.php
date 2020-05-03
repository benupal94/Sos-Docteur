<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'id' => 1,
            'name' => 'Admin',
            'surname' => 'Admin',
            'phone' => '90542056',
            'sexe' => 1,
            'email' => 'admin@material.com',
            'role_id' => 1,
        ]);

        factory(App\User::class)->create([
            'id' => 3,
            'name' => 'Member',
            'surname' => 'Admin',
            'phone' => '98648753',
            'sexe' => 1,
            'email' => 'member@material.com',
            'role_id' => 2,
        ]);
    }
}
