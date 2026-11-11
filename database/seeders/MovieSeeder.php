<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        Movie::create([
            'title' => 'Inception',
            'description' => 'Науково-фантастичний трилер про занурення у сни та викрадення таємниць підсвідомості.',
            'release_year' => 2010,
            'rating' => 8.8
        ]);

        Movie::create([
            'title' => 'Interstellar',
            'description' => 'Епічна фантастика про подорож дослідників крізь червоточину в пошуках нової домівки для людства.',
            'release_year' => 2014,
            'rating' => 8.7
        ]);

        Movie::create([
            'title' => 'The Dark Knight',
            'description' => 'Культовий екшн про протистояння Бетмена та Джокера за долю Готема.',
            'release_year' => 2008,
            'rating' => 9.0
        ]);
    }
}