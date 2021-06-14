<?php

use Illuminate\Database\Seeder;

class BestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Best::class, 20)->create();
    }
}
