<?php
use App\Http\Controllers\EventController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ShowEventsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\TicketDocumentController;
use App\Http\Controllers\TicketTypeController;
use Illuminate\Support\Facades\Route;


// General Routes
Route::get('/', [ShowEventsController::class, 'welcome'])->name('welcome');

// Customer Routes
Route::get('/events/{event}', [ShowEventsController::class, 'show']);

// Sales - Purchases
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/events/{event}/purchases/{sale}', [SaleController::class, 'show'])->name('sales.show');
    Route::post('/events/{event}/purchases', [SaleController::class, 'store'])->name('sales.store');

    // Email Test
    Route::get('/purchases/{sale}', [SaleController::class, 'confirm'])->name('purchase.success');
});

// Admin Routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    // Events CRUD
    Route::get('events', [EventController::class, 'index'])->name('admin.events.index');
    Route::get('events/create', [EventController::class, 'create'])->name('admin.events.create');
    Route::get('events/{event}', [EventController::class, 'show'])->name('admin.events.show');
    Route::post('events', [EventController::class, 'store'])->name('admin.events.store');

    // Ticket types CRUD
    Route::get('events/{event}/ticket-types', [TicketTypeController::class, 'index'])->name('ticket-types.index');
    Route::get('events/{event}/ticket-types/create', [TicketTypeController::class, 'create'])->name('ticket-types.create');
    Route::post('events/{event}/ticket-types', [TicketTypeController::class, 'store'])->name('ticket-types.store');
});

// Stripe Routes
Route::get('/getSession/{sale}', [StripeController::class, 'getSession'])->name('get-session');

Route::get('/purchase/{sale}/cancel', [SaleController::class, 'cancel'])->name('purchase.cancel');
Route::get('/purchase/{sale}/fail', [SaleController::class, 'fail'])->name('purchase.fail');


// Ticket Document Controller
Route::get('/printer', [TicketDocumentController::class, 'create']);