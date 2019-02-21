<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lap = DB::table('pasien')->join('kelurahan','pasien.kd_kelurahan','=','kelurahan.kd_kelurahan')->join('diagnosa','pasien.id_diagnosa','=','diagnosa.id_diagnosa')->get();
        $diagnosa = DB::table('diagnosa')->get();

        $categories = [];
        $banyakk1 = DB::table('pasien')
            ->select(DB::raw('count(pasien.umur) as jumlah'))
            ->where('pasien.id_diagnosa','=','diagnosa.id_diagnosa')
            ->orWhere('umur','<=', '12')
            ->get();

        foreach ($diagnosa as $dn) {
            $categories[] = $dn->nama_diagnosa;
        }

        // dd($banyakk1);

        return view('laporan', compact('lap','diagnosa','categories','banyakk1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lap = DB::table('pasien')->join('kelurahan','pasien.kd_kelurahan','=','kelurahan.kd_kelurahan')->join('diagnosa','pasien.id_diagnosa','=','diagnosa.id_diagnosa')->find($id);
        return view('edit.ispa' , compact('lap'));
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
            ->where('id', $id)
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

        return redirect()->route('laporan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pasien')->where('id',$id)->delete();
        return redirect('laporan');
    }
}
