<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Game::create([
            'title'        => 'The Witcher 3',
            'developer'    => 'CD Projekt Red',
            'genre'        => 'RPG',
            'release_date' => '2015-05-19',
            'platform'     => 'PC, PlayStation, Xbox',
            'price'        => 39.99,
        ]);

        Game::create([
            'title'        => 'Cyberpunk 2077',
            'developer'    => 'CD Projekt Red',
            'genre'        => 'Action RPG',
            'release_date' => '2020-12-10',
            'platform'     => 'PC, PlayStation, Xbox',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'Red Dead Redemption 2',
            'developer'    => 'Rockstar Games',
            'genre'        => 'Action-adventure',
            'release_date' => '2018-10-26',
            'platform'     => 'PC, PlayStation, Xbox',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'Grand Theft Auto V',
            'developer'    => 'Rockstar Games',
            'genre'        => 'Action-adventure',
            'release_date' => '2013-09-17',
            'platform'     => 'PC, PlayStation, Xbox',
            'price'        => 29.99,
        ]);

        Game::create([
            'title'        => 'The Elder Scrolls V: Skyrim',
            'developer'    => 'Bethesda Game Studios',
            'genre'        => 'Action RPG',
            'release_date' => '2011-11-11',
            'platform'     => 'PC, PlayStation, Xbox',
            'price'        => 19.99,
        ]);

        Game::create([
            'title'        => 'The Legend of Zelda: Breath of the Wild',
            'developer'    => 'Nintendo',
            'genre'        => 'Action-adventure',
            'release_date' => '2017-03-03',
            'platform'     => 'Nintendo Switch',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'Super Mario Odyssey',
            'developer'    => 'Nintendo',
            'genre'        => 'Platformer',
            'release_date' => '2017-10-27',
            'platform'     => 'Nintendo Switch',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'God of War',
            'developer'    => 'Santa Monica Studio',
            'genre'        => 'Action-adventure',
            'release_date' => '2018-04-20',
            'platform'     => 'PlayStation',
            'price'        => 39.99,
        ]);

        Game::create([
            'title'        => 'Horizon Zero Dawn',
            'developer'    => 'Guerrilla Games',
            'genre'        => 'Action RPG',
            'release_date' => '2017-02-28',
            'platform'     => 'PlayStation',
            'price'        => 19.99,
        ]);

        Game::create([
            'title'        => 'Uncharted 4: A Thief\'s End',
            'developer'    => 'Naughty Dog',
            'genre'        => 'Action-adventure',
            'release_date' => '2016-05-10',
            'platform'     => 'PlayStation',
            'price'        => 19.99,
        ]);

        Game::create([
            'title'        => 'Bloodborne',
            'developer'    => 'FromSoftware',
            'genre'        => 'Action RPG',
            'release_date' => '2015-03-24',
            'platform'     => 'PlayStation',
            'price'        => 19.99,
        ]);

        Game::create([
            'title'        => 'The Last of Us Part II',
            'developer'    => 'Naughty Dog',
            'genre'        => 'Action-adventure',
            'release_date' => '2020-06-19',
            'platform'     => 'PlayStation',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'Persona 5',
            'developer'    => 'Atlus',
            'genre'        => 'JRPG',
            'release_date' => '2017-04-04',
            'platform'     => 'PlayStation',
            'price'        => 19.99,
        ]);

        Game::create([
            'title'        => 'Persona 5 Royal',
            'developer'    => 'Atlus',
            'genre'        => 'JRPG',
            'release_date' => '2020-03-31',
            'platform'     => 'PlayStation',
            'price'        => 59.99,
        ]);

        Game::create([
            'title'        => 'Final Fantasy VII Remake',
            'developer'    => 'Square Enix',
            'genre'        => 'JRPG',
            'release_date' => '2020-04-10',
            'platform'     => 'PlayStation',
            'price'        => 59.99,
        ]);

    }
}
