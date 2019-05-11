<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Muhammad Dawood',
            'email' => 'a@a.com',
            'password' => bcrypt('password')
        ]);
    }
}
