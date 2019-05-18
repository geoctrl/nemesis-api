<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    $results = DB::select("SELECT * FROM artists");
    return $results;
});

$router->get('artists/{id}', function ($id) use ($router) {
    $results = DB::table('artists')
        ->join('albums', 'artists.id', '=', 'albums.artist_id')
        ->select(
            'artists.*',
            'albums.id as album_id',
            'albums.name as album_name',
            'albums.year as album_year',
            'albums.img as album_img'
        )
        ->where('artists.id', '=', $id)
        ->get();

    $artist = [
        'id' => $results[0]->id,
        'name' => $results[0]->name,
        'albums' => [],
    ];
    foreach ($results as $key => $value) {
        $artist['albums'][] = [
            'id' => $value->album_id,
            'name' => $value->album_name,
            'year' => $value->album_year,
            'img' => $value->album_img,
        ];
    }
    return response()->json($artist);
});

$router->get('albums/{id}', function ($id) use ($router) {
    $artistResults = DB::table('albums')
        ->join('artists', 'albums.artist_id', '=', 'artists.id')
        ->select(
            'albums.*',
            'artists.id as artist_id',
            'artists.name as artist_name'
        )
        ->where('albums.id', '=', $id)
        ->first();
    $album = [
        'id' => $artistResults->id,
        'name' => $artistResults->name,
        'year' => $artistResults->year,
        'img' => $artistResults->img,
    ];
    $artist = [
        'id' => $artistResults->artist_id,
        'name' => $artistResults->artist_name,
    ];
    $songsResults = DB::table('songs')
        ->where('songs.album_id', '=', $album['id'])
        ->get();
    $songs = [];
    foreach ($songsResults as $key => $value) {
        $songs[] = [
            'id' => $value->id,
            'name' => $value->name,
            'track' => $value->track,
            'src' => $value->src,
            'artist' => $artist,
            'album' => $album,
        ];
    }
    $album['songs'] = $songs;
    $album['artist'] = $artist;
    return response()->json($album);
});