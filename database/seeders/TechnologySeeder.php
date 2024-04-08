<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $labels = ["HTML", "CSS", "SQL", "JavaScript", "PHP", "GIT", "Blade"];

        foreach($labels as $label) {
            $tech = new Technology();
            $tech->label = $label;
            $tech->colour = $faker->hexColor();
            $tech->save();
        }
    }
}
