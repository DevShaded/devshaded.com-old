<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UpdateGithubReposCommand extends Command
{
    protected $signature = 'update:github-repos';

    protected $description = 'Update GitHub repos for the projects page';

    /**
     * Get the repositories from the GitHub API
     * Then we either update already inserted repos,
     * or we insert new ones from the API
     *
     * @return string
     */
    public function handle(): string
    {
        $responses = Http::get('https://api.github.com/users/DevShaded/repos');
        $responses = json_decode($responses);

        foreach ($responses as $response) {
            if ($response->owner->login == 'DevShaded' && !$response->fork) {
                DB::table('repositories')->updateOrInsert([
                    'github_id'   => $response->id,
                    'name'        => $response->full_name,
                    'url'         => $response->html_url,
                    'description' => $response->description,
                    'language'    => $response->language ?? null
                ]);
            }
        }

        // Why won't this show in the CONSOLE??? Wesley help me!!
        return 'Successfully updated the GitHub repos!';
    }
}
