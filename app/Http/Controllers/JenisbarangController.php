<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JenisbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis= DB::table('tb_jenis_barangs')->get();
        return view('admin.jenis_barang.index',compact('jenis'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenis_barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function message(){
        return [
        'nama_jenis_barang.required' => 'A title is Required',
    ];
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_jenis_barang' => 'required|max:20'
        ]);

        $jenis= DB::table('tb_jenis_barangs')->insert([
            'nama_jenis_barang'=> $request->nama_jenis_barang
        ]);
        return redirect()->route('jenis_barang.index',compact('jenis'))->with('message','Data Berhasil di Simpan');
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
        $jenis=DB::table('tb_jenis_barangs')->where('id_jenis_barang',$id)->first();
        return view('admin.jenis_barang.edit',compact('jenis'));
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
        $jenis=DB::table('tb_jenis_barangs')->where('id_jenis_barang',$id)->update([
            'nama_jenis_barang'=>$request->nama_jenis_barang
        ]);
        return redirect()->route('jenis_barang.index',compact('jenis'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_jenis_barangs')->where('id_jenis_barang',$id)->delete();
        return redirect()->route('jenis_barang.index');
    }
}
