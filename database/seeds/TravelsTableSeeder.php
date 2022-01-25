<?php

use Faker\Generator as Faker;
use App\Travel;
use Illuminate\Database\Seeder;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++) {

            $new_travel = new Travel();
            $new_travel->destination = $faker->country();
            $new_travel->vacation_days = $faker->numberBetween(2,30);
            $new_travel->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $new_travel->departure_day = $faker->dateTimeBetween($startDate = '-1 week', $endDate = '+4 weeks', $timezone = null);
            $new_travel->price = $faker->numberBetween(100,999);
            $new_travel->save();
        }
    }
}
