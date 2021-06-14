<?php

use Illuminate\Database\Seeder;

class HelpsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Help::class, 25)->create();
    }
}
