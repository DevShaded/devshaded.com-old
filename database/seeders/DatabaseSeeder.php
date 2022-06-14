<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('faqs')->insert([
            [
                'question' => 'How did you get into programming?',
                'answer'   => 'I started with programming in grad school, I learned Scratch at that time. I liked programming after we did the Scratch classes, so I decided I wanted to learn more. I started learning Python, but It wasn\'t really what I wanted to learn. I wanted to learn how to make websites, and so I did.'
            ],
            [
                'question' => 'What programming languages and frameworks do you use?',
                'answer'   => 'I mainly program with PHP and JavaScript. My main go-to framework for PHP must be Laravel. I also use Vue.js and Tailwind CSS for my front-end! I also have a little experience with C#, GoLang, Lua, and Rust.'
            ],
            [
                'question' => 'Are you a self-taught or a student when it comes to programming?',
                'answer'   => 'I have learned everything by myself with the help of my friends and YouTube. I\'ve always liked to learn new technologies. I am currently applying for IT classes at my high school.'
            ],
            [
                'question' => 'What do you consider one of your best projects yet?',
                'answer'   => 'One of my best projects yet have to be my Fortnite Stats Tracker, which you can see on the project page! I am proud of this project, and I have learned a lot just by making this web app. This project was also made with Laravel and Vue.js.'
            ],
            [
                'question' => 'What tools do you use for development/coding?',
                'answer'   => 'I have used a lot of text and code editors in the past few years. I switched a lot from Atom to Brackets, but when I found VSCode everything changed. I coded much better and faster with this tool since it has good IntelliSense. I found an even better IDE for my development, and that was PhpStorm. When I first tried PhpStorm, I fell in love with this tool. It helped me a lot trough when coded with Laravel.'
            ],
            [
                'question' => 'What is your favorite food/dish?',
                'answer'   => 'That\'s a hard question since I like a lot of food/dishes. But, I would say tacos is my favorite dish. I only eat it once a week, but it is one of the meals I am most excited about when it\'s dinner time.'
            ],
        ]);

        $responses = Http::get('https://api.github.com/users/DevShaded/repos');
        $responses = json_decode($responses);

        foreach ($responses as $response) {
            DB::table('repositories')->updateOrInsert([
                'github_id'   => $response->id,
                'name'        => $response->full_name,
                'url'         => $response->html_url,
                'description' => $response->description,
                'language'    => $response->language ?? null
            ]);
        }

    }
}
