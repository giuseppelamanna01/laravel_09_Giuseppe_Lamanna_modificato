<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('home');
Route::get('/contattaci', [PublicController::class, 'contactUs'])->name('contact.us');
Route::post('/contattaci/invio', [PublicController::class, 'submit'])->name('contattaci.invio');
Route::get('/contattaci/invio/success', [PublicController::class, 'success'])->name('contattaci.invio.success');