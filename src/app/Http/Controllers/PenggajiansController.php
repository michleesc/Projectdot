<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Penggajian;


class PenggajiansController extends Controller
{
    //
    public function index()
    {
        $gaji= DB::connection('db_penggajian')->table('penggajians')->get(); //cara laravel
        return response()->json($gaji);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $response = $this->validate($request, [
            'id_karyawan' => 'required',
            'jam_kerja' => 'required',
        ]);
        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;


        $gaji = DB::connection('db_penggajian')->table('penggajians')->insert($request->all());
        return response()->json(response($response));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $gaji = DB::connection('db_penggajian')->table('penggajians')->where('id', $id)->first();
        return response()->json($gaji);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gaji = DB::connection('db_penggajian')->table('penggajians')->where('id', $id)->get();
        return response()->json(" EDIT $gaji");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $request['updated_at'] = $timestamp;
        $gaji = DB::connection('db_penggajian')->table('penggajians')->where('id', $id)->update($request->all());
        return response()->json("Berhasil Update Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\penggajian  $penggajian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gaji = DB::connection('db_penggajian')->table('penggajians')->where('id', $id)->delete();
        return response()->json("Berhasil Hapus");
    }
}
