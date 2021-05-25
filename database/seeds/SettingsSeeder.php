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
    		['id' => 1, 'email' => 'support@bitthrem.com', 'address' => 'Sherbrooke Ouest QC H4A 1H3 Montreal, Quebec, Canada', 'phone' => '+1 438 7953250', 'facebook' => 'https://facebook.com', 'youtube' => 'https://youtube.com', 'instagram' => 'https://instagram.com']
    	];

    	DB::table('settings')->insert($settings);
    }
}
