<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesStatesCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call('Altwaireb\CountriesStatesCities\Database\Seeders\BaseCountriesStatesCitiesSeeder');
    }
}
