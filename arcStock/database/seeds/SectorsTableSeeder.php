<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectorsTableSeeder extends Seeder
{
    /** @var Sector list */
    const SECTORS =["Gestion matériel", "Barrière", "Zone Chill", "Blob"];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Self::SECTORS as $sector) {
            DB::table('sectors')->insert([
                'name' => $sector,
            ]);
        }
    }
}
