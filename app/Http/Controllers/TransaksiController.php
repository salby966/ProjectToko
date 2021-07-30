<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\tb_barang;
class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi=DB::table('tb_transaksis')
        ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
        ->select('tb_transaksis.*','tb_barangs.nama_barang')
        ->get();
        return view('admin.transaksi.index',compact('transaksi'));
    }

    public function search_rekap(Request $request){
        $keyword = $request->get('dari_tgl','sampai_tgl');
        $transaksi=DB::table('tb_transaksis')
            ->where('tgl_transaksi','>=',$request->dari_tgl)
            ->where('tgl_transaksi','<=',$request->sampai_tgl)
            ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
            ->select('tb_transaksis.*','tb_barangs.nama_barang')
            ->get();
        return view('admin.transaksi.index',compact('transaksi','keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transaksi=DB::table('tb_barangs')->get();
        return view('admin.transaksi.create',compact('transaksi'));
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
            'tgl_transaksi' => 'required|date',
            'jumlah_pembelian' => 'required|integer|max:30'
        ]); 

        $transaksi=DB::table('tb_transaksis')
        ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
        ->select('tb_transaksis.*','tb_barangs.nama_barang')
        ->get();
        DB::table('tb_transaksis')->insert([
            'id_barang'=>$request->id_barang,
            'tgl_transaksi'=>$request->tgl_transaksi,
            'jumlah_pembelian'=>$request->jumlah_pembelian
        ]);
        $brg = tb_barang::findorFail($request->id_barang);
        $brg->stok_barang -= $request->jumlah_pembelian;
        $brg->save();

        return redirect()->route('transaksi.index',compact('transaksi','brg'));
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
        $transaksi=DB::table('tb_transaksis')->where('id_transaksi',$id)->first();
        $transaksi2=DB::table('tb_barangs')->get();
        return view('admin.transaksi.edit',compact('transaksi','transaksi2'));
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
        DB::table('tb_transaksis')->where('id_transaksi',$id)->update([
            'id_barang'=>$request->id_barang,
            'tgl_transaksi'=>$request->tgl_transaksi,
            'jumlah_pembelian'=>$request->jumlah_pembelian
        ]);
        $brg = tb_barang::findorFail($request->id_barang);
        $brg->stok_barang -= $request->jumlah_pembelian;
        $brg->save();
        return redirect()->route('transaksi.index',compact('brg'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tb_transaksis')->where('id_transaksi',$id)->delete();
        return redirect()->route('transaksi.index');
    }

    public function print(){
        $transaksi=DB::table('tb_transaksis')
        ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
        ->select('tb_transaksis.*','tb_barangs.nama_barang')
        ->get();    
        $pdf = PDF::loadview('admin.transaksi.laporan_pdf',['transaksi'=>$transaksi]);
        return $pdf->stream();

        // $pdf = PDF::loadView('admin.transaksi.laporan_pdf','$transaksi');
        // return $pdf->download('laporan_pdf.pdf');
    }
}
