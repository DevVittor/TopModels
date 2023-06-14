<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/acompanhantes', [EventController::class, 'acompanhantes']);

Route::get('/perfil/create', [EventController::class, 'create']);
Route::get('/profile', [EventController::class, 'profile']);    
Route::get('/acompanhantes/{nome}', function ($nome = 'Vittor') {
    return view('acompanhantes', ['nome' => $nome]);
});
Route::fallback(function () {
    return view('error404');
});

Route::get('/test', function () {
    return view('test');
});
