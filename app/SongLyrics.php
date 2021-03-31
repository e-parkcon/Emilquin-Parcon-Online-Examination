<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SongLyrics extends Model
{
    //

    protected $fillable = [
        'title', 'artist', 'song_lyric'
    ];
}
