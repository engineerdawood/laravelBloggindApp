<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name'=>'Laravel\'s Blog',
            'address'=> 'Pakistan, Bahawalpur',
            'contact_number' => '+92 300 9725416',
            'contact_email' => 'info@gmail.com'
        ]);
    }
}
