<?php

namespace App\Http\Controllers;

use App\Models\Undangan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function cekAkses(){
        return Inertia::render('Admin/CekAkses', [
            'undangans' => Undangan::orderBy('akses_undangan','desc')->get()
        ]);
    }
    public function tabel(){
        return Inertia::render('Admin/AdminTabel', [
            'users' => Undangan::all()
        ]);
    }
}
