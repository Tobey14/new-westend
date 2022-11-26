<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/winnings/get', [UserController::class,'getWinningTickets'])->name('getWinningTickets');



Route::get('/agent/get', [AgentController::class,'getAgentDetails'])->name('getAgent');
Route::get('/agent/ticket/search', [AgentController::class,'searchTicket'])->name('searchTicket');

Route::post('/paystack/wallet/fund', [AgentController::class,'paystackFundWallet'])->name('paystackFundWallet');
Route::post('/rave/wallet/fund', [AgentController::class,'raveFundWallet'])->name('raveFundWallet');
Route::get('/agent/funded', [AgentController::class,'agentFunded'])->name('agentFunded');
Route::post('/agent/play_ticket', [UserController::class,'agentPlayTicket'])->name('agentPlayTicket');

Route::post('/agent/update_details', [AgentController::class,'updateDetails'])->name('updateDetails');



Route::get('/agent/referral/fund', [AgentController::class,'agentFundReferral'])->name('agentFundReferral');



Route::post('/user/paystack/purchase/create', [UserController::class,'paystackCreatePurchase'])->name('paystackCreatePurchase');
Route::post('/user/rave/purchase/create', [UserController::class,'raveCreatePurchase'])->name('raveCreatePurchase');
Route::get('/rave/playTicket', [UserController::class,'playTicketRave'])->name('playTicketRave');

