<?php

namespace App\Http\Controllers\BobWatts;

use App\Http\Controllers\Controller;
use App\Models\BobWatts\Command;
use Illuminate\Validation\Rules\In;
use Inertia\Inertia;

class CommandsController extends Controller
{
    public function index()
    {
        $commands = Command::all();

        $data = [
            'categories' => [
                'fun'         => $commands->where('category', 'fun'),
                'information' => $commands->where('category', 'information'),
                'moderation'  => $commands->where('category', 'moderation'),
                'public'      => $commands->where('category', 'public'),
                'settings'    => $commands->where('category', 'settings'),
            ],
        ];

        return Inertia::render('BobWatts/Commands', [
            'data' => $data
        ]);
    }
}
