<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShowEventsController;
use App\Http\Controllers\TicketTypeController;
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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// General routes
Route::get('/', function () {
    return "Vista de eventos";
});


// CUSTOMER

// Route::get('/', [ShowEventsController::class, 'welcome']);
// Route::get('/events/{event}', [ShowEventsController::class, 'show']);

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

// Sales - Purchases
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/events/{event}/purchases/{sale}', [SaleController::class, 'show'])->name('sales.show');
    Route::post('/events/{event}/purchases', [SaleController::class, 'store'])->name('sales.store');
});



// ADMIN

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/admin/events/create', [EventController::class, 'create'])->name('events.create');
    Route::get('/admin/events/{event}', [EventController::class, 'show'])->name('events.show');
    Route::post('/admin/events', [EventController::class, 'store'])->name('events.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin/events/{event}/ticket-types', [TicketTypeController::class, 'index'])->name('ticket-types.index');
    Route::get('/admin/events/{event}/ticket-types/create', [TicketTypeController::class, 'create'])->name('ticket-types.create');
    Route::post('/admin/events/{event}/ticket-types', [TicketTypeController::class, 'store'])->name('ticket-types.store');
});

Route::get('admin/dashboard', function () {
    return "Hello Admin, we are here to serve";
})->middleware('admin')->name('admin.show');