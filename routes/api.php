<?php

use App\Models\Pesan;
use App\Models\Undangan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/konfirmasi', function(Request $request){
    $undangan = Undangan::where('url', $request->param)->first();
    $undangan->hadir = $request->hadir;
    $undangan->save();
    return redirect('/'.$request->param);
});

Route::get('/pesan', function(){
     $pesan = Pesan::with('undangan')->get();
     return $pesan;
});

Route::post('/pesan', function(Request $request){
    $pesan = Pesan::where('undangan_id', $request->id)->first();
    if($pesan){
        $pesan->isi = $request->isi;
        $pesan->undangan_id = $request->id;
        $pesan->save();
    } else {
        $pesan = new Pesan();
        $pesan->isi = $request->isi;
        $pesan->undangan_id = $request->id;
        $pesan->save();
    }
    return redirect('/'.$request->param);
});
