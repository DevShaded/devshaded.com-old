<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Inertia\Inertia;

class ProjectsController extends Controller
{
    public function index()
    {
        return Inertia::render('Projects', [
            'repositories' => Repository::all(),
        ]);
    }
}
