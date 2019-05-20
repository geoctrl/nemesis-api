<?php

use Illuminate\Database\Seeder;

class BeastieBoys extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'id' => 3,
            'name' => 'Beastie Boys',
        ]);

        DB::table('albums')->insert([[
            'id' => 3,
            'name' => 'Licensed to Ill',
            'img' => 'https://upload.wikimedia.org/wikipedia/en/5/5c/Licensed_to_ill.jpg',
            'year' => 1986,
            'artist_id' => 3,
        ], [
            'id' => 4,
            'name' => 'Hello Nasty',
            'img' => 'https://upload.wikimedia.org/wikipedia/en/5/5f/BeastieBoysHelloNasty.jpg',
            'year' => 1998,
            'artist_id' => 3,
        ], [
            'id' => 5,
            'name' => 'Paul\'s Boutique',
            'img' => 'https://upload.wikimedia.org/wikipedia/en/0/07/BeastieBoysPaul%27sBoutique.jpg',
            'year' => 1989,
            'artist_id' => 3,
        ]]);

        DB::table('songs')->insert([[
            'name' => 'Rhymin & Stealin',
            'track' => 1,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/01 Rhymin & Stealin.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'The New Style',
            'track' => 2,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/02 The New Style.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'She\'s Crafty',
            'track' => 3,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/03 She\'s Crafty.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Posse in Effect',
            'track' => 4,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/04 Posse In Effect.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Slow Ride',
            'track' => 5,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/05 Slow Ride.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Girls',
            'track' => 6,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/06 Girls.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Fight for Your Right',
            'track' => 7,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/07 Fight For Your Right.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'No Sleep till Brooklyn',
            'track' => 8,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/08 No Sleep Till Brooklyn.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Paul Revere',
            'track' => 9,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/09 Paul Revere.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Hold It Now, Hit It',
            'track' => 10,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/10 Hold It Now, Hit It.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Brass Monkey',
            'track' => 11,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/11 Brass Monkey.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Slow and Low',
            'track' => 12,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/12 Slow And Low.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ], [
            'name' => 'Time to Get Ill',
            'track' => 13,
            'duration' => 258,
            'src' => 'Beastie Boys/Licensed To Ill/13 Time To Get Ill.mp3',
            'artist_id' => 3,
            'album_id' => 3,
        ]]);
    }
}
