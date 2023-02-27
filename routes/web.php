<?php

use App\Http\Controllers\PerpustakaanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/home', function() {
    echo "Ini adalah Perpustakaan";
});

Route::prefix('/category')->group(function () {
    Route::get('/komedi', [PerpustakaanController::class, 'komedi']);
    Route::get('/sains', [PerpustakaanController::class, 'sains']);
    Route::get('/sejarah', [PerpustakaanController::class, 'sejarah']);
});

Route::get('/diskon/{diskon}', [PerpustakaanController::class, 'diskon']);

Route::prefix('/tahun')->group(function () {
    Route::get('/2000', [PerpustakaanController::class, '2000']);
    Route::get('/2001', [PerpustakaanController::class, '2001']);
    Route::get('/2002', [PerpustakaanController::class, '2002']);
});

function komedi(){
        echo  "ini adalah genre komedi";
    }
    function sains(){
        echo "ini adalah genre romance";
    }
    function sejarah(){
        echo "ini adalah genre sejarah";
    }

    Route::get('/AboutUs', function() {
        echo "Perpustakaan ini didirikan pada tahun 2023";
    });
