<?php

namespace App\Http\Controllers;

// use App\Karyawan;
use App\Models\Karyawan;
use App\Models\Jabatan;
use App\Models\Penggajian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KaryawansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kwn= DB::connection('db_karyawan')->table('karyawans')->get(); //cara laravel
        return response()->json($kwn);
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
            'nama_karyawan' => 'required',
            'gaji_perjam' => 'required',
            'id_jabatan' => 'required',
        ]);
        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;


        $kwn = DB::connection('db_karyawan')->table('karyawans')->insert($request->all());
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
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kwn = DB::connection('db_karyawan')->table('karyawans')->where('id', $id)->first();
        return response()->json($kwn);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kwn = DB::connection('db_karyawan')->table('karyawans')->where('id', $id)->get();
        return response()->json(" EDIT $kwn");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $request['updated_at'] = $timestamp;
        $kwn = DB::connection('db_karyawan')->table('karyawans')->where('id', $id)->update($request->all());
        return response()->json("Berhasil Update Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kwn = DB::connection('db_karyawan')->table('karyawans')->where('id', $id)->delete();
        return response()->json("Berhasil Hapus");
    }

    public function detail()
    {
        // cara pertama
        // $karyawans = DB::table('db_karyawan.karyawans AS db1_tb1')
        //               ->join('db_jabatan.jabatans AS db2_tb2', 'db1_tb1.jabatan_id', '=', 'db2_tb2.id')
        //               ->join('db_penggajian.penggajians AS db3_tb3', 'db1_tb1.id', '=', 'db3_tb3.karyawan_id')
        //               ->select('db1_tb1.nama_karyawan AS nama_karyawan', 'db1_tb1.gaji_perjam', 
        //               'db2_tb2.nama_jabatan AS nama_jabatan',
        //                        DB::raw('SUM(db3_tb3.jam_kerja) AS total_kerja'),
        //                        DB::raw('SUM(db3_tb3.jam_kerja) * db1_tb1.gaji_perjam AS total_gaji'))
        //               ->groupBy('db1_tb1.id')
        //               ->get();

        // cara kedua
        // $karyawans = DB::table(DB::connection('db_karyawan')->table('karyawans')->get() . ' AS db1_tb1',)
        //               ->join('db_jabatan.jabatans AS db2_tb2', 'db1_tb1.jabatan_id', '=', 'db2_tb2.id')
        //               ->join('db_penggajian.penggajians AS db3_tb3', 'db1_tb1.id', '=', 'db3_tb3.karyawan_id')
        //               ->select('db1_tb1.nama_karyawan AS nama_karyawan', 'db1_tb1.gaji_perjam', 
        //               'db2_tb2.nama_jabatan AS nama_jabatan',
        //                        DB::raw('SUM(db3_tb3.jam_kerja) AS total_kerja'),
        //                        DB::raw('SUM(db3_tb3.jam_kerja) * db1_tb1.gaji_perjam AS total_gaji'))
        //               ->groupBy('db1_tb1.id')
        //               ->get();

        // cara ketiga
        // $karyawans = DB::table(DB::connection('db_karyawan')->table('karyawans')->get() . ' AS db1_tb1')
        //               ->join(DB::connection('db_jabatan')->table('jabatans')->get() . ' AS db2_tb2', 'db1_tb1.jabatan_id', '=', 'db2_tb2.id')
        //               ->join(DB::connection('db_penggajian')->table('penggajians')->get() . ' AS db3_tb3', 'db1_tb1.id', '=', 'db3_tb3.karyawan_id')
        //               ->select('db1_tb1.nama_karyawan AS nama_karyawan', 'db1_tb1.gaji_perjam', 
        //               'db2_tb2.nama_jabatan AS nama_jabatan',
        //                        DB::raw('SUM(db3_tb3.jam_kerja) AS total_kerja'),
        //                        DB::raw('SUM(db3_tb3.jam_kerja) * db1_tb1.gaji_perjam AS total_gaji'))
        //               ->groupBy('db1_tb1.id')
        //               ->get();

        // cara keempat
        // $karyawans = DB::table((new Karyawan)->getTable() . ' AS db1_tb1')
        //               ->join((new Jabatan)->getTable() . ' AS db2_tb2', 'db1_tb1.jabatan_id', '=', 'db2_tb2.id')
        //               ->join((new Penggajian)
        //               ->getTable() . ' AS db3_tb3', 'db1_tb1.id', '=', 'db3_tb3.karyawan_id')
        //               ->select('db1_tb1.nama_karyawan AS nama_karyawan', 'db1_tb1.gaji_perjam',
        //               'db2_tb2.nama_jabatan AS nama_jabatan',
        //               DB::raw('SUM(db3_tb3.jam_kerja) AS total_kerja'),
        //               DB::raw('SUM(db3_tb3.jam_kerja) * db1_tb1.gaji_perjam AS total_gaji'))
        //               ->groupBy('db1_tb1.id')
        //               ->get();

        
        $karyawans = Karyawan::join('jabatans', 'karyawans.id_jabatan', '=', 'jabatans.id')
        ->join('penggajians', 'karyawans.id', '=', 'penggajians.id_karyawan')
        ->select('karyawans.*', 'jabatans.nama_jabatan', 
        \DB::raw('SUM(penggajians.jam_kerja) as total_kerja'), 
        \DB::raw('SUM(karyawans.gaji_perjam * penggajians.jam_kerja) as total_gaji'))
        ->groupBy('karyawans.id')
        ->get();
        return response()->json($karyawans);
    }
}