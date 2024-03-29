<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountriesSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsSeeder::class);
        $this->call(BestsSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(HelpsSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(SettingsSeeder::class);
    }
}
