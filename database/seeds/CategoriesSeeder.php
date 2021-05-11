<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => '{"es": "General", "en": "General"}', 'slug' => 'general', 'state' => '1'],
            ['name' => '{"es": "Referidos", "en": "Referrals"}', 'slug' => 'referidos', 'state' => '1'],
            ['name' => '{"es": "Software", "en": "Software"}', 'slug' => 'software', 'state' => '1'],
            ['name' => '{"es": "Retiros", "en": "Retreats"}', 'slug' => 'retiros', 'state' => '1'],
            ['name' => '{"es": "La Empresa", "en": "The Company"}', 'slug' => 'la-empresa', 'state' => '1']
    	];
    	DB::table('categories')->insert($categories);
    }
}
