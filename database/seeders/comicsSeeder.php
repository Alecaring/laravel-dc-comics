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
            ]);
        }
    }
}
