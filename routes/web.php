<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Index');
});

Route::get('/about', \App\Http\Controllers\AboutController::class);

Route::get('/contact', function () {
    return Inertia::render('Contact');
});

Route::get('/projects', [\App\Http\Controllers\ProjectsController::class, 'index']);

Route::prefix('/bobwatts')->group(function () {
    Route::get('/', function() {
        return Inertia::render('BobWatts/Index');
    });

    Route::get('/commands', [\App\Http\Controllers\BobWatts\CommandsController::class, 'index']);
});
