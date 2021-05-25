<?php

use App\Http\Controllers\AbkController;
use App\Http\Controllers\DataKapalController;
use App\Http\Controllers\DataKapalSeluruhController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\ProsesController;
use App\Http\Controllers\SelesaiProsesController;
use App\Http\Controllers\SeluruhAbkController;
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
    return view('welcome');
});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [HomeController::class, 'index']);

    Route::resource('/home', HomeController::class);

    Route::resource('/datakapal', DataKapalController::class);
    Route::resource('/seluruhkapal', DataKapalSeluruhController::class);
    Route::resource('/pendaftaran', PendaftaranController::class);
    Route::resource('/selesaiproses', SelesaiProsesController::class);
    Route::resource('/proses', ProsesController::class);
    Route::resource('/seluruhabk', SeluruhAbkController::class);

    Route::post('datakapal/pulang', [DataKapalController::class, 'pulang'])->name('datakapal.pulang');
    Route::post('seluruhkapal/pulang', [DataKapalSeluruhController::class, 'batal'])->name('seluruhkapal.batal');


    Route::get('printberangkat/{id}', [DataKapalSeluruhController::class, 'printberangkat'])->name('dataseluruh.print');
    Route::get('printberkasdokumen/{id}', [DataKapalSeluruhController::class, 'printberkasdokumen'])->name('dokumen.cetak');
    Route::get('printdatapengalaman/{id}', [DataKapalSeluruhController::class, 'printdatapengalaman'])->name('pengalaman.print');
    Route::get('downloadberangkat/{id}', [DataKapalSeluruhController::class, 'downloadpdf'])->name('dataseluruh.download');
});