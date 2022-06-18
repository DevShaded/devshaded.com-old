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

        // Fun commands
        DB::table('commands')->insert([
            [
                'name'        => '/8ball',
                'description' => 'Ask a question and get an answer from the magic 8 ball',
                'options'     => '< message >',
                'category'    => 'fun'
            ],
            [
                'name'        => '/coinflip',
                'description' => 'Flips a coin and return either Heads or Tails',
                'options'     => 'NONE',
                'category'    => 'fun'
            ],
            [
                'name'        => '/cookie',
                'description' => 'Returns a fortune cookie message',
                'options'     => 'NONE',
                'category'    => 'fun'
            ],
            [
                'name'        => '/diceroll',
                'description' => 'Dice roll, returns a number between 1 and 6',
                'options'     => 'NONE',
                'category'    => 'fun'
            ],
            [
                'name'        => '/hug',
                'description' => 'Hug the mentioned user',
                'options'     => '< user >',
                'category'    => 'fun'
            ],
            [
                'name'        => '/kiss',
                'description' => 'Kiss the mentioned user',
                'options'     => '< user >',
                'category'    => 'fun'
            ],
            [
                'name'        => '/rps',
                'description' => 'Rock, Paper, Scissors',
                'options'     => '< tool >',
                'category'    => 'fun'
            ],
            [
                'name'        => '/slap',
                'description' => 'Slap the mentioned user',
                'options'     => '< user >',
                'category'    => 'fun'
            ],
        ]);

        // Information commands
        DB::table('commands')->insert([
            [
                'name'        => '/weather',
                'description' => 'Get the current weather forecast for a location',
                'options'     => '< location > < units >',
                'category'    => 'information'
            ],
            [
                'name'        => '/randomcat',
                'description' => 'Get a picture of a random cat!',
                'options'     => 'NONE',
                'category'    => 'information'
            ],
            [
                'name'        => '/randomdog',
                'description' => 'Get a picture of a random dog!',
                'options'     => 'NONE',
                'category'    => 'information'
            ],
        ]);

        // Moderation commands
        DB::table('commands')->insert([
            [
                'name'        => '/ban',
                'description' => 'Ban the mentioned user from a server',
                'options'     => '< target > [ reason ]',
                'level'       => '2',
                'permission'  => 'BAN_MEMBERS',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/clean',
                'description' => 'Clear a certain amount of infractions of the mentioned user in a server',
                'options'     => '< target > < amount > [ reason ]',
                'level'       => '1',
                'permission'  => 'MANAGE_MESSAGES',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/clearinfractions',
                'description' => 'Clear a certain amount of infractions of the mentioned user in a server',
                'options'     => '< target > < amount > [ reason ]',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/infractions',
                'description' => 'Get all infractions of the mentioned user in a server',
                'options'     => '< target >',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/kick',
                'description' => 'Kick the mentioned user from a server',
                'options'     => '< target > [ reason ]',
                'level'       => '2',
                'permission'  => 'KICK_MEMBERS',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/mute',
                'description' => 'Mute the mentioned user in your server',
                'options'     => '< target > [ days ] [ reason ]',
                'level'       => '2',
                'permission'  => 'MANAGE_MESSAGES',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/unban',
                'description' => 'Unban the mentioned user from a server',
                'options'     => '< target >',
                'level'       => '2',
                'permission'  => 'BAN_MEMBERS',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/unmute',
                'description' => 'Unmute the mentioned user in your server',
                'options'     => '< target > [ reason ]',
                'level'       => '2',
                'permission'  => 'MANAGE_MESSAGES',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/vckick',
                'description' => 'Kick the mentioned user from a voice channel',
                'options'     => '< target > [ reason ]',
                'level'       => '2',
                'permission'  => 'MANAGE_MESSAGES',
                'category'    => 'moderation'
            ],
            [
                'name'        => '/warn',
                'description' => 'Warn the mentioned user in a server',
                'options'     => '< target > [ reason ]',
                'level'       => '3',
                'permission'  => 'MANAGE_MESSAGES',
                'category'    => 'moderation'
            ],
        ]);

        // Public commands
        DB::table('commands')->insert([
            [
                'name'        => '/botinfo',
                'description' => 'Display information of the client/bot itself',
                'options'     => 'NONE',
                'category'    => 'public'
            ],
            [
                'name'        => '/help',
                'description' => 'Returns a message with all of the commands available from the bot',
                'options'     => 'NONE',
                'category'    => 'public'
            ],
            [
                'name'        => '/ping',
                'description' => 'Returns a message with a response time message',
                'options'     => 'NONE',
                'category'    => 'public'
            ],
            [
                'name'        => '/serverinfo',
                'description' => 'Returns a message with server information',
                'options'     => 'NONE',
                'category'    => 'public'
            ],
            [
                'name'        => '/userinfo',
                'description' => 'Display information about the mentioned user in a server',
                'options'     => '< user >',
                'category'    => 'public'
            ],
        ]);

        // Settings commands
        DB::table('commands')->insert([
            [
                'name'        => '/add',
                'description' => 'This command is to set pre-defined settings',
                'options'     => '< target >',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'settings'
            ],
            [
                'name'        => '/delete',
                'description' => 'This command is to set pre-defined settings',
                'options'     => '< target >',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'settings'
            ],
            [
                'name'        => '/remove',
                'description' => 'This command is to set pre-defined settings',
                'options'     => '< target >',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'settings'
            ],
            [
                'name'        => '/set',
                'description' => 'This command is to set pre-defined settings',
                'options'     => '< target >',
                'level'       => '1',
                'permission'  => 'ADMINISTRATOR',
                'category'    => 'settings'
            ],
        ]);
    }
}
