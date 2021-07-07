<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subscriptions\SubscriptionController;

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

Route::get('/subscriptions/invoice/{invoice}', [SubscriptionController::class, 'invoiceDownload'])->name('subscriptions.invoice.download');
Route::get('/subscriptions/account', [SubscriptionController::class, 'account'])->name('subscriptions.account');
Route::get('/subscriptions/checkout', [SubscriptionController::class, 'checkout'])->name('subscriptions.checkout');
Route::get('/subscriptions/premium', [SubscriptionController::class, 'premium'])->name('subscriptions.premium')->middleware(['subscribed']);
Route::get('/subscriptions/cancel', [SubscriptionController::class, 'cancel'])->name('subscriptions.cancel');
Route::get('/subscriptions/resume', [SubscriptionController::class, 'resume'])->name('subscriptions.resume');

Route::post('/subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');

Route::get('/', [SiteController::class, 'index'])->name('site.home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
