<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\tb_transaksi;
use App\tb_barang;

class RekappenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $rekap=DB::table('tb_transaksis')
        ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
        ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
        ->select('tb_transaksis.*','tb_barangs.nama_barang','tb_barangs.stok_barang','tb_jenis_barangs.nama_jenis_barang')
        ->get();
         if($keyword){
            $rekap=DB::table('tb_barangs')->where("nama_barang","LIKE","%$keyword%")
            ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
            ->join('tb_transaksis','tb_transaksis.id_barang','tb_barangs.id_barang')
            ->select('tb_transaksis.*','tb_barangs.nama_barang','tb_barangs.stok_barang','tb_jenis_barangs.nama_jenis_barang')
            ->get();
        }
        return view('admin.rekap.index',compact('keyword','rekap'));
    }

     public function search_rekap(Request $request){
        $keyword = $request->get('dari_tgl','sampai_tgl');
        $rekap=DB::table('tb_transaksis')
            ->where('tgl_transaksi','>=',$request->dari_tgl)
            ->where('tgl_transaksi','<=',$request->sampai_tgl)
            ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
            ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
            ->select('tb_transaksis.*','tb_barangs.nama_barang','tb_barangs.stok_barang','tb_jenis_barangs.nama_jenis_barang')
            ->get();
        return view('admin.rekap.index',compact('rekap','keyword'));
    }

    public function rekap_penjualan(){

        $rekap1=DB::table('tb_transaksis')
            ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
            ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
            ->select('tb_jenis_barangs.id_jenis_barang', DB::raw('SUM(tb_transaksis.jumlah_pembelian) as total_sales'))
                ->groupBy('tb_jenis_barangs.id_jenis_barang')
                ->havingRaw('SUM(jumlah_pembelian)')
                ->get();
        $rekap2=DB::table('tb_transaksis')
            ->join('tb_barangs','tb_barangs.id_barang','tb_transaksis.id_barang')
            ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
            ->select('tb_transaksis.*','tb_barangs.nama_barang','tb_barangs.stok_barang','tb_jenis_barangs.nama_jenis_barang')
            ->get();
            
       // $jumlah =tb_transaksi::select("id_barang","nama_barang")
       // ->sum('jumlah_pembelian');
       // $terbesar =tb_transaksi::select("id_barang","nama_barang")
       // ->max('jumlah_pembelian');
       // $terkecil =tb_transaksi::select("id_barang","nama_barang")
       // ->min('jumlah_pembelian');
       // // dd($jumlah,$terbesar,$terkecil,$rekap);
       
       return view('index',compact('rekap1','rekap2'));
    }

 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
        //
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
