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
    $user->akses_undangan = $user->akses_undangan + 1;
    $user->save();
    return Inertia::render('Index/Index', ['user' => $user, 'param' => $param]);
});

Route::get('/', function () {
    return Inertia::render('Index/Index');
});

Route::prefix('admin')->controller(AdminController::class)->group(function(){
    Route::get('cek-akses', 'cekAkses');
});

// Route::get('/tes', function(){
//     return Inertia::share('nama', 'Fernanda');
// });

// Route::get('/generate-qrcode', function(){
//     return Inertia::render('TesQrcode');
// });

Route::get('/cetak/peta-belakang',function(){
    $undangans = Undangan::where('tipe', 'cetak')
    ->where('url', 'wahyu-790')
    ->orWhere('url', 'siti-791')
    // ->orWhere('url', 'tutik-568')
    // ->orderBy('id', 'desc')
    ->get()
    ;
    return Inertia::render('Cetak/PetaBelakang', ["undangans" => $undangans, "skip" => 0]);
});

// Route::get('/print-peta-depan', function(){
//     return Inertia::render('PrintPetaDepan');
// });

// Route::get('/cetak/label', function(){
//     // $undangans = Undangan::where('tipe', 'cetak')->get();
//     $undangans = Undangan
//         ::where('url', 'wahyu-790')
//         ->orWhere('url', 'siti-791')
//         ->get();
//         // dd($undangans);
//     return Inertia::render('Cetak/Label', ['undangans' => $undangans]);
// });

// Route::get('/gg/gg', function(){
//     $pesans = Pesan::with('undangan')->get();
//     dd($pesans);
// });
