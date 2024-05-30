<?php

namespace Database\Seeders;

use App\Models\Comic;
use Faker\Generator as Faker;
use Faker\Provider\ar_EG\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker ): void
    {
        for( $i = 0; $i < 20; $i++ ) {

            $newComic = new Comic();
            $newComic->title = $faker->text(15);
            $newComic->description = $faker->text(200);
            $newComic->thumb = $faker->text(200);
            $newComic->price = $faker->randomFloat(2, 10, 99);
            $newComic->series = $faker->text(50);
            $newComic->sale_date = $faker->date();
            $newComic->type = $faker->text();

            $newComic->save();

        }
    }
}
