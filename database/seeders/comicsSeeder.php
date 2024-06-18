<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use Faker\Factory as Faker;


class comicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('it_IT');

        for ($i = 0; $i < 10; $i++) {
            Comic::create([
                'nome' => $faker->word,
                'descrizione' => $faker->paragraph,
                'image' => $faker->imageUrl(640, 480, 'house', true), // Genera un URL di immagine casuale
                'price' => $faker->randomFloat(2, 50000, 500000), // Prezzo tra 50,000 e 500,000
                'address' => $faker->address,
                'bedrooms' => $faker->numberBetween(1, 5),
                'bathrooms' => $faker->numberBetween(1, 3),
                'square_meters' => $faker->numberBetween(50, 300),
                'property_type' => $faker->randomElement(['appartamento', 'villa', 'casa indipendente']),
                'status' => $faker->randomElement(['vendita', 'affitto']),
                'built_year' => $faker->year,
            ]);
        }
    }
}
