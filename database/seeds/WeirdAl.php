<?php

use Illuminate\Database\Seeder;

class WeirdAl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'id' => 1,
            'name' => '"Weird Al" Yankovic',
        ]);

        DB::table('albums')->insert([
            'id' => 1,
            'name' => 'Poodle Hat',
            'img' => 'http://weirdal.com/wp-content/uploads/2014/12/alb21.jpg',
            'year' => 2003,
            'artist_id' => 1,
        ]);

        DB::table('songs')->insert([[
            'name' => 'Couch Potato',
            'track' => 1,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/01-couch-potato.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Hardware Store',
            'track' => 2,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/02-hardware-store.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Trash Day',
            'track' => 3,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/03-trash-day.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Party At the Leper Colony',
            'track' => 4,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/04-party-at-the-leper-colony.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Angry White Boy Polka',
            'track' => 5,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/05-angry-white-boy-polka.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Wanna B Ur Lovr',
            'track' => 6,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/06-wanna-b-ur-lovr.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'A Complicated Song',
            'track' => 7,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/07-a-complicated-song.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Why Does This Always Happen To Me',
            'track' => 8,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/08-why-does-this-always-happen-to-me.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Ode To a Superhero',
            'track' => 9,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/09-ode-to-a-superhero.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Bob',
            'track' => 10,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/10-bob.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Ebay',
            'track' => 11,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/11-ebay.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ], [
            'name' => 'Genius In France',
            'track' => 12,
            'duration' => 258,
            'src' => 'weird-al-yankovic/poodle-hat/12-genius-in-france.mp3',
            'artist_id' => 1,
            'album_id' => 1,
        ]]);
    }
}
