<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@tokko.test',
            'password' => bcrypt(12345678),
        ]);

        $admin->assignRole('admin');

        
        $user = User::create([
            'name' => 'Kodir',
            'email' => 'kodir@tokko.test',
            'password' => bcrypt(12345678),
        ]);

        $user->assignRole('user');



    }
}
