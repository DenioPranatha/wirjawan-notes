<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("id_ID");
        for ($i=0; $i < 10; $i++) {
            Detail::create([
                "post_id" => $i+1,
                "author" => $faker->name(),
                "date" =>  $faker->date(),
                "body" => $faker->paragraph()
            ]);

        }
    }
}
