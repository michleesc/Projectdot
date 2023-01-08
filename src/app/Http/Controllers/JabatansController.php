<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JabatansController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jabt= DB::connection('db_jabatan')->table('jabatans')->get(); //cara laravel
        return response()->json($jabt);
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
            'nama_jabatan' => 'required',
        ]);
        $request['created_at'] = $timestamp;
        $request['updated_at'] = $timestamp;


        $jabt = DB::connection('db_jabatan')->table('jabatans')->insert($request->all());
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
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $jabt = DB::connection('db_jabatan')->table('jabatans')->where('id', $id)->first();
        return response()->json($jabt);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabt = DB::connection('db_jabatan')->table('jabatans')->where('id', $id)->get();
        return response()->json(" EDIT $jabt");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        $request['updated_at'] = $timestamp;
        $jabt = DB::connection('db_jabatan')->table('jabatans')->where('id', $id)->update($request->all());
        return response()->json("Berhasil Update Data");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\jabatan  $jabatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $jabt = DB::connection('db_jabatan')->table('jabatans')->where('id', $id)->delete();
        return response()->json("Berhasil Hapus");
    }
}