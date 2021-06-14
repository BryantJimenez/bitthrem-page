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
            ['name' => '{"es": "General", "en": "General"}', 'slug' => 'general', 'description' => NULL, 'icon' => NULL, 'type' => '1', 'state' => '1'],
            ['name' => '{"es": "Referidos", "en": "Referrals"}', 'slug' => 'referidos', 'description' => NULL, 'icon' => NULL, 'type' => '1', 'state' => '1'],
            ['name' => '{"es": "Software", "en": "Software"}', 'slug' => 'software', 'description' => NULL, 'icon' => NULL, 'type' => '1', 'state' => '1'],
            ['name' => '{"es": "Retiros", "en": "Retreats"}', 'slug' => 'retiros', 'description' => NULL, 'icon' => NULL, 'type' => '1', 'state' => '1'],
            ['name' => '{"es": "La Empresa", "en": "The Company"}', 'slug' => 'la-empresa', 'description' => NULL, 'icon' => NULL, 'type' => '1', 'state' => '1'],
            ['name' => '{"es": "General", "en": "General"}', 'slug' => 'general-0', 'description' => '{"es": "Here you’ll find information about setting up payment providers, currencies and many other topics", "en": "Here you’ll find information about setting up payment providers, currencies and many other topics"}', 'icon' => 'icono-general.png', 'type' => '2', 'state' => '1'],
            ['name' => '{"es": "Referidos", "en": "Referrals"}', 'slug' => 'referidos-0', 'description' => '{"es": "Here you’ll find information about setting up payment providers, currencies and many other topics", "en": "Here you’ll find information about setting up payment providers, currencies and many other topics"}', 'icon' => 'icono-referidos.png', 'type' => '2', 'state' => '1'],
            ['name' => '{"es": "Software", "en": "Software"}', 'slug' => 'software-0', 'description' => '{"es": "Here you’ll find information about setting up payment providers, currencies and many other topics", "en": "Here you’ll find information about setting up payment providers, currencies and many other topics"}', 'icon' => 'icono-software.png', 'type' => '2', 'state' => '1'],
            ['name' => '{"es": "Retiros", "en": "Retreats"}', 'slug' => 'retiros-0', 'description' => '{"es": "Here you’ll find information about setting up payment providers, currencies and many other topics", "en": "Here you’ll find information about setting up payment providers, currencies and many other topics"}', 'icon' => 'icono-retiros.png', 'type' => '2', 'state' => '1'],
            ['name' => '{"es": "La Empresa", "en": "The Company"}', 'slug' => 'la-empresa-0', 'description' => '{"es": "Here you’ll find information about setting up payment providers, currencies and many other topics", "en": "Here you’ll find information about setting up payment providers, currencies and many other topics"}', 'icon' => 'icono-la-empresa.png', 'type' => '2', 'state' => '1'],
            ['name' => '{"es": "General", "en": "General"}', 'slug' => 'general-1', 'description' => NULL, 'icon' => NULL, 'type' => '3', 'state' => '1'],
            ['name' => '{"es": "Referidos", "en": "Referrals"}', 'slug' => 'referidos-1', 'description' => NULL, 'icon' => NULL, 'type' => '3', 'state' => '1'],
            ['name' => '{"es": "Software", "en": "Software"}', 'slug' => 'software-1', 'description' => NULL, 'icon' => NULL, 'type' => '3', 'state' => '1'],
            ['name' => '{"es": "Retiros", "en": "Retreats"}', 'slug' => 'retiros-1', 'description' => NULL, 'icon' => NULL, 'type' => '3', 'state' => '1'],
            ['name' => '{"es": "La Empresa", "en": "The Company"}', 'slug' => 'la-empresa-1', 'description' => NULL, 'icon' => NULL, 'type' => '3', 'state' => '1']
    	];
    	DB::table('categories')->insert($categories);
    }
}
