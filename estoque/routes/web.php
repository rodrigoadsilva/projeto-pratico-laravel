<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EstoqueController;

Route::get('/', [EstoqueController::class, 'index']);

Route::get('/contato', function () {
    return view('contato');
});