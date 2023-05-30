<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $faker = Faker::create("id_ID");

        for ($i=0; $i < 10; $i++) {
            Post::create([
                "title" => $faker->sentence(),
                "description" =>  $faker->sentence(),
                "time_category_id" => mt_rand(1,3),
                "like" => mt_rand(0, 200),
                "latest_review" => $faker->dateTime(),
                "imgURL" => "wide.jpg",
            ]);

        }
    }
}
