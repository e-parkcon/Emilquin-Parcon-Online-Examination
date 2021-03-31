<?php

namespace App\Http\Controllers;

use App\SongLyrics;
use Illuminate\Http\Request;

class SongLyricsController extends Controller
{
// return response()->json();
// return view();
// return back(); return redirect()->route('home');
    public function get_song_list(){

        $song_lists     =   SongLyrics::get();

        return response()->json(array('data'=>$song_lists));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('song_lyrics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $new_song   =   new SongLyrics();

        $new_song->title    =   $request->title;
        $new_song->artist   =   $request->artist;
        $new_song->song_lyric   =   $request->lyrics;

        $new_song->save();
        return redirect()->route('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit_song  =   SongLyrics::find($id);

        return view('song_lyrics.edit', compact('edit_song', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $update_song    =   SongLyrics::find($id);

        $update_song->title    =   $request->title;
        $update_song->artist   =   $request->artist;
        $update_song->song_lyric   =   $request->lyrics;

        $update_song->save();
        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        SongLyrics::find($id)->delete();

    }
}
