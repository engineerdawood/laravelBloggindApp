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
        $user = App\User::create([
            'name' => 'Muhammad Dawood',
            'email' => 'a@a.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel perferendis, dolorum accusantium totam culpa, porro ad explicabo quam est, exercitationem cum ipsum corrupti commodi iste mollitia repellat autem voluptatum dolores!',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
