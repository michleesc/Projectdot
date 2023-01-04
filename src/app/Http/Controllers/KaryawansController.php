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

    public function tambah()
    {
        return view('karyawans/tambah');
    }

    public function store(Request $request)
    {
        DB::table('karyawans')->insert([
            'nama_karyawan' => $request->nama,
            'jabatan_karyawan' => $request->jabatan,
            'umur_karyawan' => $request->umur,
        ]);
        return redirect('/karyawans');
    }

    public function edit($id)
    {
        $karyawans = DB::table('karyawans')->where('id_karyawan',$id)->get();
        return view('edit', ['karyawans' => $karyawans]);
    }

    public function update(Request $request)
    {
        DB::table('karyawans')->where('id_karyawan',$request->id)->update([
            'nama_karyawan' => $request->nama,
            'jabatan_karyawan' => $request->jabatan,
            'umur_karyawan' => $request->umur,
        ]);
        return redirect('/karyawans');
    }

    public function hapus($id)
    {
        DB::table('karyawans')->where('id_karyawan',$id)->delete();
        return redirect('/karyawans');
    }
}
