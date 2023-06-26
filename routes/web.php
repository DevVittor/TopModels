<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/acompanhantes', [EventController::class, 'acompanhantes']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'store']);
Route::get('/planos', [EventController::class, 'planos']);

Route::get('/perfilCriado', [EventController::class, 'perfilCriado']);

Route::fallback(function () {
    return view('error404');
});

Route::get('/painel', [EventController::class, 'painel'])->middleware('auth');

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/
