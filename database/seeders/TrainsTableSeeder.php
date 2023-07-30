<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) { 
            $train = new train();
            
            $train->azienda = $faker->word();
            $train->stazione_dipartenza->$faker->word();
            $train->stazione_dipartenza->$faker->word();
            $train->orario_di_partenza =  $faker->time();
            $train->orario_di_arrivo =  $faker->time();
            $train->numero_carrozze = $faker->numberBetween(1,19);
            
            $train->save();
        }
    }
}
