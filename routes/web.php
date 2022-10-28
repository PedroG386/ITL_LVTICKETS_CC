<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ticketController;

Route::get('inicio', function () {
    return view('admin.index');
});

//Rutas del usuario
Route::get('/index',[ticketController::class,'index']);
Route::get('/gracias',[ticketController::class,'gracias']);

Route::get('/nuevo-ticket',[ticketController::class,'nuevoTicketForm']);
