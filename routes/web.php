<?php

use App\Models\Undangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/{url}', function($url){
    $user = Undangan::where('url', $url)->first();
    return Inertia::render('Index', ['user' => $user]);
});

Route::get('/', function () {
    return Inertia::render('Index');
});

// Route::get('/tes', function(){
//     return Inertia::share('nama', 'Fernanda');
// });

// Route::get('/generate-qrcode', function(){
//     return Inertia::render('TesQrcode');
// });

Route::get('/cetak/peta-belakang',function(){
    $undangans = Undangan::where('tipe', 'cetak')
    ->where('url', 'tri-598')
    ->orWhere('url', 'anto-602')
    ->orWhere('url', 'crah-603')
    ->orWhere('url', 'yudi-604')
    ->orderBy('id', 'desc')
    ->get()
    ;
    return Inertia::render('Cetak/PetaBelakang', ["undangans" => $undangans]);
});

// Route::get('/print-peta-depan', function(){
//     return Inertia::render('PrintPetaDepan');
// });

Route::get('/cetak/label', function(){
    $undangans = Undangan::where('tipe', 'cetak')->get();
    return Inertia::render('Cetak/Label', ['undangans' => $undangans]);
});
