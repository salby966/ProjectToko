@extends('layouts.layout')
@section('content')
	</nav>
    <div id="page-wrapper">
    <div class="col-md-12 graphs">
	<div class="xs">
		<form action="{{ url('rekap')}}" method="GET" class="navbar-form navbar-right">
    		@csrf
	    <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search">
	    <button type="submit" class="btn btn-primary">Search</button>
	  </form>
  	<h3><b>DATA REKAPITULASI PENJUALAN</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
  	<form method="POST" action="{{ url('search_rekap')}}">
    @csrf
    <table class="table">
   	<tr class="active">
    			<th>Dari Tanggal <input type="date" name="dari_tgl" value="{{date('Y-m-d')}}">&nbsp;</th>
    			<th>Sampai Tanggal <input type="date" name="sampai_tgl" value="{{date('Y-m-d')}}">&nbsp;</th>
    			<th><button type="submit" class="btn btn-primary">Filter</button></th>
    </tr>
    </table>
	</form>
    <table class="table">
    <thead>			   
	<tr class="active">
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Persediaan Stok Barang</th>
			<th>Jumlah Terjual</th>
			<th>Tanggal Transaksi</th>
			<th>Jenis Barang</th>
	</tr>
	</thead>
	<tbody>
		@php $a=1; @endphp
		@foreach($rekap as $data)
		<tr>
			<td>{{ $a++ }}</td>
			<td>{{ $data->nama_barang }}</td>
			<td>{{ $data->stok_barang}}</td>
			<td>{{ $data->jumlah_pembelian}}</td>
			<td>{{ $data->tgl_transaksi }}</td>
			<td>{{ $data->nama_jenis_barang}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
@endsection
