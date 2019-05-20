<?php

use Illuminate\Database\Seeder;

class BenHarper extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'id' => 2,
            'name' => 'Ben Harper',
        ]);

        DB::table('albums')->insert([
            'id' => 2,
            'name' => 'Diamonds On the Inside',
            'img' => 'https://upload.wikimedia.org/wikipedia/en/9/9f/Ben_Harper_Diamonds_On_The_Inside.jpg',
            'year' => 2003,
            'artist_id' => 2,
        ]);

        DB::table('songs')->insert([[
            'name' => 'Diamonds On the Inside',
            'track' => 3,
            'duration' => 258,
            'src' => 'ben-harper/diamonds-on-the-inside/03-diamonds-on-the-inside.mp3',
            'artist_id' => 2,
            'album_id' => 2,
        ]]);
    }
}
