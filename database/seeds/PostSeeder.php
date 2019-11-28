<?php

use App\Pokemon;
use App\User;
use App\Post;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        $pokemon = App\Pokemon::all();
        
        foreach ($pokemon as $poke) {
            Post::create([
                'subject'    => 'I love this pokemon: ' . $poke->name,
                'idpokemon'  => $poke->id,
                'content'  => $faker->text($maxNbChars = 140),
                'iduser'   => $faker->numberBetween($min = 1, $max = 6),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
