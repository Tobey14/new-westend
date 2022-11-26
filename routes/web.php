<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\UserController;



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
})->name('home');

Route::get('/how-to-win', function () {
    return Inertia::render('howToWin');
})->name('howtowin');

Route::get('/daily-prizes', function () {
    return Inertia::render('dailyPrizes');
})->name('dailyPrices');

Route::get('/monthly-prizes', function () {
    return Inertia::render('monthlyPrizes');
})->name('monthlyPrices');

Route::get('/play-now', function () {
    return Inertia::render('playNow');
})->name('playNow');

Route::get('/terms-and-conditions', function () {
    return Inertia::render('termsConditions');
})->name('termsConditions');

Route::get('/frequently-asked-questions', function () {
    return Inertia::render('faq');
})->name('faq');

Route::get('/become-an-agent', function () {
    return Inertia::render('becomeAgent');
})->name('becomeAgent');

Route::get('/ticket-status/{id}', [UserController::class,'ticketStatus'] )->name('ticketStatus');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('/wallet', function () {
        return Inertia::render('Wallet');
    })->name('wallet');

    Route::get('/referrals', function () {
        return Inertia::render('Referral');
    })->name('referral');

    Route::get('/tickets', function () {
        return Inertia::render('Ticket');
    })->name('ticket');

    Route::get('/settings', function () {
        return Inertia::render('Settings');
    })->name('settings');


    Route::get('/fund', function () {

        return Inertia::render('Fund');
    })->name('fund');


    Route::get('/play', function () {

        return Inertia::render('agentPlay');
    })->name('agentPlay');
});
