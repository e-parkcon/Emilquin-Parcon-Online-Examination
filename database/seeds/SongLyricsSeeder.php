<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SongLyricsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('song_lyrics')->insert([
            
            [
                'title' => 'If you’re too shy (Let Me Know)',
                'artist' => 'The 1975',
                
                'song_lyric' => 'I see her online all the time
                I\'m trying not to stare down there
                While she talks about her tough time
                Girl of your dreams, you know what I mean
                There\'s something \'bout her stare that makes you nervous
                And you say things that you don\'t mean
                Well, I found my hotel
                I called up the twins
                It\'s seven in the morning so they won\'t let me in
                I need to get back
                I\'ve gotta see the girl on the screen
                "Maybe I would like you better if you took off your clothes
                I\'m not playing with you, baby
                I think that you should give it a go"
                She said, "Maybe I would like you better if you took off your clothes
                I wanna see, and stop thinking
                If you\'re too shy, then let me
                Too shy, then let me know"
                I\'ve been wearing nothing every time I call you
                And I\'m starting to feel weird about it
                Sometimes it\'s better if you think about it
                This time, I think I\'m gonna drink through it
                But I see her online
                And don\'t think that I should be calling all the time
                I just wanted a happy ending
                And I\'m pretending I don\'t care about her stare
                While she\'s giving me a tough time
                Well, I found a motel
                It looked like the bins
                I think there\'d been a murder so we couldn\'t get in
                I need to get back
                I\'ve gotta see the girl on the screen
                Maybe I would like you better if you took off your clothes
                I\'m not playing with you, baby
                I think that you should give it a go
                She said, "Maybe I would like you better if you took off your clothes
                I wanna see, and stop thinking
                If you\'re too shy, then let me
                Too shy, then let me know (too shy, then let me know)
                Well, if you\'re too shy, then let me me know (too shy, then let me know)
                If you\'re too shy then let me go"
                Oh, yeah
                I see her online all the time
                She said, "Maybe I would like you better if you took off your clothes
                I\'m not playing with you, baby
                I think that you should give it a go"
                She said, "Maybe I would like you better if you took off your clothes
                I wanna see, and stop thinking
                If you\'re too shy, then let me
                Too shy, then let me know"',

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'It\'s not living, if it\'s not with you',
                'artist' => 'The 1975',
                
                'song_lyric' => 'Danny ran into some complications
                He falls asleep during conversations
                He\'s gotta search the street when he\'s on vacation
                The worst thing is that I\'m in the same situation
                And all I do is sit and think about you
                If I knew what you\'d do
                Collapse my veins, wearing beautiful shoes
                It\'s not living, if it\'s not with you
                And Danny says we\'re living in a simulation
                But he works in a petrol station (Selling petrol)
                He says it all began with his operation
                And I know you think you\'re sly but you need some imagination
                And all I do is sit and think about you
                If I knew what you\'d do
                Collapse my veins, wearing beautiful shoes
                It\'s not living, if it\'s not with you
                All I do is sit and drink without you
                If I choose, then I lose
                Distract my brain from the terrible news
                It\'s not living, if it\'s not with you
                I can\'t stop sweating or control my feet
                Got a twenty-stone monkey that I just can\'t beat
                I can stage a situation, but I just can\'t eat
                And there\'s a feeling, you\'re replacing embrace
                It\'s true that–
                All I do is sit and think about you
                If I knew what you\'d do
                Collapse my veins, wearing beautiful shoes
                It\'s not living, if it\'s not with you
                All I do is sit and drink without you
                If I choose, then I lose
                Distract my brain from the terrible news
                It\'s not living, if it\'s not with you
                Oh, I\'ll try to get a job in a bank, I think
                Danny spent the time trying to pack in the drinks for me
                I feel sick and I know I that I\'ll lose, but
                It\'s not living, if it\'s not with you
                (It\'s not, it\'s not)
                It\'s not living, if it\'s not with you
                (It\'s not, it\'s not)
                (It\'s not, it\'s not)
                It\'s not living, if it\'s not with you
                (It\'s not living, if it\'s not with you)
                (It\'s not, it\'s not)
                (It\'s not, it\'s not)
                (It\'s not, it\'s not)
                (It\'s not living, if it\'s not with you)',

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'title' => 'Robbers',
                'artist' => 'The 1975',
                
                'song_lyric' => 'She had a face straight out a magazine
                God only knows but you\'ll never leave her
                Her balaclava is starting to chafe
                When she gets his gun he\'s begging, babe stay, stay
                Stay, stay, stay
                I\'ll give you one more time
                We\'ll give you one more fight
                Said one more line
                Will I know you?
                Now if you never shoot, you\'ll never know
                And if you never eat, you\'ll never grow
                You\'ve got a pretty kind of dirty face
                And when she\'s leaving your home
                She\'s begging you to stay, stay
                Stay, stay, stay
                I\'ll give you one more time
                We\'ll give you one more fight
                Said one more line
                There\'ll be a riot, cause I know you
                Well now that you\'ve got your gun
                It\'s much harder now the police have come
                And I\'ll shoot him if it\'s what you ask
                But if you just take off your mask
                You\'d find out everything\'s gone wrong
                Now everybody\'s dead
                And they\'re driving past my old school
                And he\'s got his gun, he\'s got his suit on
                She says, babe, you look so cool
                You look so cool
                You look so cool
                You look so cool
                You look so cool
                You look so cool',

                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]); 
    }
}
