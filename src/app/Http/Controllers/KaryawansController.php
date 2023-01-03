<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawansController extends Controller
{
    //
    public function index()
    {
        $karyawans = DB::table('karyawans')->get();

        return view('index',['karyawans' => $karyawans]);
    }
}
