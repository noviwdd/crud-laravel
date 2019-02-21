<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IspaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pasien')->get();
        $diagnosa = DB::table('diagnosa')->get();
        $kelurahan = DB::table('kelurahan')->get();
        return view('ispa', compact('data','diagnosa','kelurahan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ispa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('pasien')->insert([
                'kd_pasien' => rand(000,999),
                'tanggal' => $request->tanggal,
                'nama' => $request->nama,
                'kd_kelurahan' => $request->kelurahan,
                'rt' => $request->rt, 
                'rw' => $request->rw,
                'jk' => $request->jk,
                'umur' => $this->auto($request->umur, $request->keterangan),
                'id_diagnosa' => $request->diagnosa
            ]);

        return redirect('laporan')->with('sukses','Data berhasil di masukkan');
    }

    public function auto($umur, $keterangan)
    {
        if($keterangan = "bulan"){
            $a = $umur * 1;
        }
        else if($keterangan = "tahun"){
            $a = $umur * 12;
        }
        
        return $a;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('pasien')
            ->where('id', 1)
            ->update([
            'tanggal' => $request->get('tanggal'),
            'nama' => $request->get('nama'),
            'kd_kelurahan' => $request->get('kelurahan'),
            'rt' => $request->get('rt'),
            'rw' => $request->get('rw'),
            'jk' => $request->get('jk'),
            'umur' => $request->get('umur'),
            'id_diagnosa' => $request->get('diagnosa')
            ]);

            return redirect('laporan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
