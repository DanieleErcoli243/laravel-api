<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'My London Trip',
                'description' => 'List of pictures and infos about a trip to London.',
                'image' => '',
            ],
            [
                'title' => 'The Booleaner',
                'description' => 'The clone of an article on an online newspaper.',
                'image' => '',
            ],
            [
                'title' => 'Toboolist',
                'description' => 'The clone of a customized todo list.',
                'image' => '',
            ],
            [
                'title' => 'Boolando',
                'description' => 'The clone of an e-commerce page.',
                'image' => '',
            ],
            
            [
                'title' => 'Shoes',
                'description' => 'A page to navigate with buttons containing links connected to each part of the page that takes the whole viewport.',
                'image' => '',
            ],
            [
                'title' => 'Discord',
                'description' => 'The clone of the homepage of the well-known web-app.',
                'image' => '',
            ],
            [
                'title' => 'Dropbox',
                'description' => 'The clone of the page with subscribe-plans to Dropbox.',
                'image' => '',
            ],
            [
                'title' => 'Boolean Academy',
                'description' => 'A first approach to responsive layouts made with media-queries desktop-first.',
                'image' => '',
            ],
            [
                'title' => 'Giallo Booleano',
                'description' => 'The clone of a site of recipes with responsive layouts, made with media-queries mobile-first.',
                'image' => '',
            ],
            [
                'title' => 'SpotifyWeb',
                'description' => 'The clone of the well-known musical streaming service, with a responsive layout made with media-queries mobile-first.',
                'image' => '',
            ],
            [
                'title' => 'Bootstrap Freelance',
                'description' => 'A responsive layout totally created by using Bootstrap classes.',
                'image' => '',
            ],
            [
                'title' => 'Dashboard',
                'description' => 'A responsive dashboard entirely created by copying and pasting from Bootstrap.',
                'image' => '',
            ],
            
            [
                'title' => 'Pali e Dispari',
                'description' => 'A small program that tells you whether a number is even or odd and whether a word is palindrome or not.',
                'image' => '',
            ],
            [
                'title' => 'Treno Form',
                'description' => 'A program that prints a train ticket and tells you if you are eligible for a discount or not according to your age.',
                'image' => '',
            ],
            [
                'title' => 'FizzBuzz',
                'description' => 'A small program that prints a hundred of squares with the number from 1 to 100 and the words Fizz, Buzz and FizzBuzz instead of multiple of 3, 5 and both.',
                'image' => '',
            ],
            
            [
                'title' => 'Campo Minato',
                'description' => 'A clone of an old-style arcade videogame.',
                'image' => '',
            ],
            [
                'title' => 'Our Team',
                'description' => 'A program that prints cards dynamically injected by JS.',
                'image' => '',
            ],
            [
                'title' => 'Slider',
                'description' => 'A carousel created by our teacher using JS plain, that we recreated by using Vue JS.',
                'image' => '',
            ],
            [
                'title' => 'BoolzApp',
                'description' => 'The clone of the well-known instant-messaging web-app.',
                'image' => '',
            ],
            [
                'title' => 'DC Comics',
                'description' => 'The clone a page of the website of the comic brand, created by using Vue JS and Vite.',
                'image' => '',
            ],
            [
                'title' => 'Pokévuex',
                'description' => 'The clone of the pokédex, where both pokémon and the options to group them are injected with an ajax call.',
                'image' => '',
            ],
        ];

        foreach ($projects as $project) {
            $new_project = new Project();
            $new_project->fill($project);
            

            $new_project->save();
        }
    }
}
