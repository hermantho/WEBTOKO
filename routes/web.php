<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/listproduk', [ListProdukController::class, 'show']);
