<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
    		['id' => 1, 'email' => 'admin@gmail.com', 'address' => 'Direccion de prueba, calle falsa', 'phone' => '12345678', 'facebook' => NULL, 'twitter' => NULL, 'instagram' => NULL]
    	];

    	DB::table('settings')->insert($settings);
    }
}
