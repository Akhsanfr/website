<?php

use App\Http\Controllers\AdminController;
use App\Models\Pesan;
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

Route::get('/{param}', function($param){
    $user = Undangan::where('url', $param)->first();
    if(!$user){
        return Inertia::render('Index/Index');
    }
    $user->akses_undangan = $user->akses_undangan + 1;
    $user->save();
    return Inertia::render('Index/Index', ['user' => $user, 'param' => $param]);
});

Route::get('/', function () {
    return Inertia::render('Index/Index');
});

Route::prefix('admin')->controller(AdminController::class)->group(function(){
    Route::get('cek-akses', 'cekAkses');
    Route::get('tabel', 'tabel');
});


// Route::get('/generate-qrcode', function(){
//     return Inertia::render('TesQrcode');
// });

Route::get('/cetak/peta-belakang',function(){
    $undangans = Undangan::where('tipe', 'cetak')
    ->where('url', 'nurizza-793')
    ->get()
    ;
    return Inertia::render('Cetak/PetaBelakang', ["undangans" => $undangans, "skip" => 0]);
});

// Route::get('/print-peta-depan', function(){
//     return Inertia::render('PrintPetaDepan');
// });

Route::get('/cetak/label', function(){
    $undangans = Undangan
        ::where('url', 'nurul-618')
        ->get();
    return Inertia::render('Cetak/Label', ['undangans' => $undangans, 'skip' => 0]);
});

Route::get('/tes/online-poster', function(){
    return Inertia::render('Online/OnlinePoster');
});
