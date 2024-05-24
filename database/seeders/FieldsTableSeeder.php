<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Field;
use Faker\Generator as Faker;

class FieldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $new_field= new Field();
            $new_field->nome_campo = $faker->word();
            $new_field->coperto = $faker->numberBetween(0, 1);
            $new_field->tipo_manto = $faker->word();
            $new_field->illuminazione = $faker->numberBetween(0, 1);
            $new_field->colore_campo = $faker->colorName();
            $new_field->costo = $faker->numberBetween(8, 15);
            $new_field->image = $faker->imageUrl(640, 480, 'padel', true);
            $new_field->save();
        }
    }
}
