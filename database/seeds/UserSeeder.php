<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'first_name' => "System",
                'last_name' => "Admin",
                'email' => "systemadmin@kasatintin.com",
                'password' => Hash::make("Ugq=Y6M/v<^-a~6!"),
                 'user_type'=>"Admin",
            ]
        );
    }
}
