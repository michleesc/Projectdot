<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    //
    //
    public function index() 
    {
        return view('index');
    }

    

    // public function jabatanview()
    // {
    //     $jabatans = DB::table('jabatans')->get();
    //     return view('jabatans/tambah',['jabatans' => $jabatans]);
    // }

    // public function penggajianview()
    // {
    //     $penggajians = DB::table('penggajians')->get();
    //     return view('penggajians/tambah',['penggajians' => $penggajians]);
    // }

}
