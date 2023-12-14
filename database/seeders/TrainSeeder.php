<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {   
        
        for ($i = 0; $i < 10; $i++) {
            $new_train = new Train();

            $new_train->company = $faker->randomElements(['Freccia Rossa', 'Italo', 'Trenitalia', 'Ferrovie dello Stato']);

            $new_train->departure_station = $faker->randomElements(['Milano', 'Torino', 'Venezia', 'Bologna', 'Firenze', 'Roma', 'Napoli']);
            $new_train->arrival_station = $faker->randomElements(['Milano', 'Torino', 'Venezia', 'Bologna', 'Firenze', 'Roma', 'Napoli']);
            $new_train->departure_time = $faker->date() . ' ' . $faker->time();
            $new_train->arrival_time = $faker->date() . ' ' . $faker->time() ;
            $new_train->train_code = $faker->bothify('???#####');
            $new_train->wagons_number = $faker->numberBetween(1, 12);
            $new_train->on_time = $faker->randomElement([true, false]);
            $new_train->delay = $faker->optional()->numberBetween(1, 10);
            $new_train->deleted = $faker->randomElement([true, false]); ;

            $new_train->save();

        }
    }
}
