<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
    	for($i = 1; $i <= 5; $i++){
    		DB::table('locations')->insert([
    			'NAME' => $faker->city,
    		]);
 
    	}

        for($i = 1; $i <= 20; $i++){
    		DB::table('companies')->insert([
    			'NAME' => $faker->company,
    			'LOCATION_ID' => $faker->numberBetween(1,5),
    		]);
    	}

        for($i = 1; $i <= 80; $i++){
    		DB::table('people')->insert([
    			'NAME' => $faker->name,
    			'COMPANY_ID' => $faker->numberBetween(1,20),
    		]);
 
    	}
    }
}
