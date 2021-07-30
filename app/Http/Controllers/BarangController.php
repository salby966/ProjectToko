<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $barang=DB::table('tb_barangs')
        ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
        ->select('tb_jenis_barangs.nama_jenis_barang','tb_barangs.*')
        ->get();
        if($keyword){
            $barang=DB::table('tb_barangs')->where("nama_barang","LIKE","%$keyword%")
            ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
            ->select('tb_jenis_barangs.nama_jenis_barang','tb_barangs.*')
            ->get();
        }
        return view('admin.barang.index',compact('barang','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang=DB::table('tb_jenis_barangs')->get();
        return view('admin.barang.create',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'nama_barang' => 'required|max:30',
            'stok_barang' => 'required'
        ]);
 
        $barang=DB::table('tb_barangs')->insert([
            'id_jenis_barang'=>$request->id_jenis_barang,
            'nama_barang'=>$request->nama_barang,
            'stok_barang'=>$request->stok_barang
        ]);
        return redirect()->route('barang.index',compact('barang'));
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
        $barang=DB::table('tb_barangs')->where('id_barang',$id)->first();
        $barang2=DB::table('tb_jenis_barangs')->get();
        return view('admin.barang.edit',compact('barang','barang2'));
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
        $barang=DB::table('tb_barangs')->where('id_barang',$id)->update([
            'id_jenis_barang'=>$request->id_jenis_barang,
            'nama_barang'=>$request->nama_barang,
            'stok_barang'=>$request->stok_barang
        ]);
        return redirect()->route('barang.index',compact('barang'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_barangs')->where('id_barang',$id)->delete();
        return redirect()->route('barang.index');
    }
}
