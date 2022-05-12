<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/',[TicketController::class,'index']);
Route::get('/add', [TicketController::class, 'create']);
Route::post('/add', [TicketController::class, 'store']);
Route::post('/destroy/{id}', [TicketController::class,'destroy']);
Route::post('/edit/{id}', [TicketController::class, 'edit']);
