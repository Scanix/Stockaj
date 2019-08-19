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
        $this->call([
            UsersTableSeeder::class,
            SectorsTableSeeder::class,
            ToolsTableSeeder::class,
            PersonsTableSeeder::class,
            LocationsTableSeeder::class,
        ]);
    }
}
