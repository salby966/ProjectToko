<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
     // $barang=DB::table('tb_barangs')->where("nama_barang","LIKE","%$keyword%")
     //        ->join('tb_jenis_barangs','tb_jenis_barangs.id_jenis_barang','tb_barangs.id_jenis_barang')
     //        ->select('tb_jenis_barangs.nama_jenis_barang','tb_barangs.*')
     //        ->get();
     //  $range=DB::table('Order')->where('Total_value','>=','10.000')->where('Total_value','<=','50.000')->join('Customer','Order.Customer_id','Customer.Customer_id')->select('Order.Total_value','Customer.First_name','Customer.Last_name')->get();
     //  return view('index',compact('range'))
     //  $tanggal = $request->get('july-2016');
     //  $total=DB::table('Order')->join('Customer','Order.Customer_id','Customer.Customer_id')->select('Order.Total_value','Order.Transaction_id')
     //  ->SUM('Total_value')->where('Customer_id')
     //  ->SUM('Transaction_id')->where('Customer_id')
     //  ->orderBy(DB::raw("DATE_FORMAT(created_at,'%Y-%m') as tanggal"))
     //  ->get();
     //  return view('index',compact('total','tanggal'));

     //  $tanggal = $request->get('july-2016');
     //  $total=DB::table('Order')->select('Order.Transaction_date','Order.Transaction_id')
     //  ->select(
     //  	[DB::raw(count('Transaction_id as total')])
     //  ->orderBy(DB::raw("DATE_FORMAT(created_at,'%m-%Y') as tanggal"))
     //  ->get();
     //  return view('index',compact('total','tanggal'));


     //  $tanggal = $request->get('%m');
     //  $total=DB::table('Order')->join('Customer','Order.Customer_id','Customer.Customer_id')->select('Order.Transaction_date','Order.Transaction_id','Customer.First_name','Customer.Last_name')
     //  ->where('Transaction_date','<','%7')
     //  ->where('Transaction_date','>','%8')
     //  ->orderBy(DB::raw("DATE_FORMAT(created_at,'%m') as tanggal"))
     //  ->get();
     //  return view('index',compact('total','tanggal'));

     //  $loyal = $request->get('loyal');
     //  $regular = $request->get('regular');
     //  $total=DB::table('Order')->join('Customer','Order.Customer_id','Customer.Customer_id')->select('Order.Transaction_id','Total_value','Order.Transaction_date','Order.Transaction_id','Customer.First_name','Customer.Last_name')
     //  ->select
     //  	[DB::raw(SUM('Customer_id')->where('Transaction_id','<=','2'))
     //  	->select(
     //  	[DB::raw(SUM('Customer_id')->where('Transaction_id','>','2'))
     //  ->get();
     //  return view('index',compact('total'));

      
     //  Public function Largestnumber(Request $number){
     //  	$data=DB::table('array')->select(
     //  	[DB::raw(MAX('number')->get();
     //  	return view('index',compact($data));
     //  }

     //  Public function Countletters(Request $request){
     //  	$letters = $request->get('letters');
     //  	$data=DB::table('letter')
     //  	->select(
     //  	[DB::raw(count('letters')])->get();
     //  	return view('index',compact('data','letters'));
     //  }

     //   Public function Discount(Request $request){
     //  	$discount_code = $request->get('discount_code');
     //  	$data=DB::table('promo')->where('discount_code','LIKE','PROMO10'->where('item','<=','100.000')
     //  	->SUM('Total_value-0,1')
     //  	return view('index',compact('data','discount_code'));
     //  }

     //  Public function Print(Request $request){
     //  	$letter = $request->get('letter');
     //  	$data=DB::table('letter')->where('letter','')
     //  	->SUM('Total_value-0,1')
     //  	return view('index',compact('data','discount_code'));
     //  }
}
