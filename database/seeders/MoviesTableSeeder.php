<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $movies = [
            [
                'name' => 'Future Hell',
                'year' => 2020,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '1 hr 33 min',
                'category' => 'Action',
                'imageId' => 35,
                'likes' => 10,
                'dislikes' => 3,
            ],
            [
                'name' => 'Soviet : The Cold War',
                'year' => 2022,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '1 hr 43 min',
                'category' => 'Action',
                'imageId' => 34,
                'likes' => 23,
                'dislikes' => 5,
            ],
            [
                'name' => 'Inside Woman',
                'year' => 2018,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '2 hr 43 min',
                'category' => 'Adventure',
                'imageId' => 33,
                'likes' => 2,
                'dislikes' => 9,
            ],
            [
                'name' => 'SpaceMan',
                'year' => 2020,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '2 hr 23 min',
                'category' => 'Comedy',
                'imageId' => 32,
                'likes' => 2,
                'dislikes' => 9,
            ],
            [
                'name' => 'Voices',
                'year' => 2020,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '2 hr 23 min',
                'category' => 'Crime',
                'imageId' => 31,
                'likes' => 2,
                'dislikes' => 9,
            ],
            [
                'name' => 'Colors of pain',
                'year' => 2020,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '1 hr 21 min',
                'category' => 'Drama',
                'imageId' => 31,
                'likes' => 2,
                'dislikes' => 9,
            ],
            [
                'name' => 'Green Magic World',
                'year' => 2020,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '1 hr 21 min',
                'category' => 'Horror',
                'imageId' => 31,
                'likes' => 2,
                'dislikes' => 9,
            ],
            [
                'name' => 'Toto family',
                'year' => 2021,
                'synopsis' => "Nine year-old orphan Beth Harmon is quiet, sullen, and by all appearances unremarkable. That is, until she plays her first game of chess. Her senses grow sharper, her thinking clearer, and for the first time in her life she feels herself fully in control. By the age of sixteen, she's competing for the U.S.",
                'range' => '1 hr 11 min',
                'category' => 'Romance',
                'imageId' => 31,
                'likes' => 20,
                'dislikes' => 9,
            ],
            // Add more movies as needed
        ];

        foreach ($movies as $movie) {
            Movie::create($movie);
        }
    }
}
