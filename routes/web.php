<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TicketTypeController;
use Illuminate\Foundation\Application;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get(
        '/dashboard',
        function () {
            return Inertia::render('Dashboard');
        }
    )->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/events/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::post('/events', [EventController::class, 'store'])->name('events.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/events/{event}/ticket-types', [TicketTypeController::class, 'index'])->name('ticket-types.index');
    Route::get('/events/{event}/ticket-types/create', [TicketTypeController::class, 'create'])->name('ticket-types.create');
});