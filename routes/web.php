<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\SmsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    $users = User::all();
    return view('welcome', compact('users'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('email-campaign', 'email-campaign')->name('gmail.campaign');
Route::post('mail-store', [CampaignController::class, 'store'])->name('campaign.store');
Route::post('campaign-stop/{id}', [CampaignController::class, 'stop'])->name('campaign.stop');
Route::get('mail-all', [CampaignController::class, 'index'])->name('campaign.index');
Route::get('send-sms', [CampaignController::class, 'smsSent']);

// SMS Campaign
Route::resource('message', SmsController::class);
Route::post('message-stop/{id}', [SmsController::class, 'stop'])->name('message.stop');