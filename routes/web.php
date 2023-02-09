<?php
use App\Http\Controllers\AsdosPendaftaranController;
use App\Http\Controllers\AsdosController;
use App\Http\Controllers\PraktikumController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('sisteminformasi/index');
// });

//Pemanggilan tampilan Dosen
Route::get('/', [AsdosPendaftaranController::class, 'index']);
Route::get('/add', [AsdosPendaftaranController::class, 'add']);
Route::post('/create', [AsdosPendaftaranController::class, 'create']);
Route::get('/details/{asdospendaftaran}', [AsdosPendaftaranController::class, 'detail']);
Route::post('/update/{asdospendaftaran}', [AsdosPendaftaranController::class, 'update']);
Route::get('/delete/{asdospendaftaran}', [AsdosPendaftaranController::class, 'delete']);

//Pemanggilan tampilan Asdos
Route::get('/baca', [AsdosController::class, 'index']);
Route::get('/tambah', [AsdosController::class, 'tambah']);
Route::post('/createasdos', [AsdosController::class, 'create']);
Route::get('/detaill/{asdos}', [AsdosController::class, 'detail']);
Route::post('/edit/{asdos}', [AsdosController::class, 'update']);
Route::get('/hapus/{asdos}', [AsdosController::class, 'delete']);

//Pemanggilan tampilan praktikum
Route::get('/praktik', [praktikumController::class, 'index']);
Route::get('/addpraktikum', [praktikumController::class, 'add']);
Route::post('/createpraktikum', [praktikumController::class, 'create']);
Route::get('/detailspraktikum/{praktikum}', [praktikumController::class, 'detail']);
Route::post('/updatepraktikum/{praktikum}', [praktikumController::class, 'update']);
Route::get('/deletepraktikum/{praktikum}', [praktikumController::class, 'delete']);

//Pemanggilan Tampilan home
Route::get('/template', [HomeController::class, 'index']);