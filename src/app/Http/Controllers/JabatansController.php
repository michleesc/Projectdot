<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JabatansController extends Controller
{
    //
    // public function view()
    // {
    //     $karyawans = DB::table('karyawans')->get();

    //     return view('jabatans/view', ['karyawans' => $karyawans]);
    // }


    // public function store(Request $request)
    // {
    //     DB::table('karyawans')->insert([
    //         'nama_karyawan' => $request->nama,
    //         'jabatan_karyawan' => $request->jabatan,
    //         'umur_karyawan' => $request->umur,
    //     ]);
    //     return redirect('/jabatans/view');
    // }

    // public function edit($id)
    // {
    //     $karyawans = DB::table('karyawans')->where('id_karyawan',$id)->get();
    //     return view('/jabatans/edit', ['karyawans' => $karyawans]);
    // }

    // public function update(Request $request)
    // {
    //     DB::table('karyawans')->where('id_karyawan',$request->id)->update([
    //         'nama_karyawan' => $request->nama,
    //         'jabatan_karyawan' => $request->jabatan,
    //         'umur_karyawan' => $request->umur,
    //     ]);
    //     return redirect('/jabatans/view');
    // }

    // public function hapus($id)
    // {
    //     DB::table('karyawans')->where('id_karyawan',$id)->delete();
    //     return redirect('/jabatans/view');
    // }
}
