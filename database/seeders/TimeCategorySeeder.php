<?php

namespace Database\Seeders;

use App\Models\TimeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TimeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TimeCategory::create([
            "name" => "Quick Reads",
            "minute" => 5

        ]);

        TimeCategory::create([
            "name" => "Medium Reads",
            "minute" => 10

        ]);

        TimeCategory::create([
            "name" => "Long Reads",
            "minute" => 15

        ]);


    }
}
