@extends('layouts.layout')
@section('content')
	</nav>
    <div id="page-wrapper">
    <div class="col-md-12 graphs">
	<div class="xs">
  	<h3><b>DATA TRANSAKSI</h3>
  	<div class="bs-example4" data-example-id="contextual-table">
  	<form method="POST" action="{{ url('search')}}">
    @csrf
    <table class="table">
    	<tr>
    		<th><button type="button" class="btn btn-xs btn-primary"><a href="{{ route('transaksi.create')}}">Tambah Data</a></button></th>
    	</tr>
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
			<th>Tanggal Pembelian</th>
			<th>Jumlah Pembelian</th>
			<th colspan="2">Kelola</th>
	</tr>
	</thead>
	<tbody>
		@php $a=1; @endphp
		@foreach($transaksi as $data)
		<tr>
			<td>{{ $a++ }}</td>
			<td>{{ $data->nama_barang }}</td>
			<td>{{ $data->tgl_transaksi }}</td>
			<td>{{ $data->jumlah_pembelian}}</td>
			<td>
			<button type="button" class="btn btn-sm btn-info"><a href="{{ route('transaksi.edit',$data->id_transaksi)}}">Edit Data</a></button>
			</td>
			<td>
			<form method="post" action="{{ route('transaksi.destroy', $data->id_transaksi) }}">
                          
                          @method('DELETE')
                          @csrf
                          
                          <button type="submit" class="btn btn-danger">Hapus</button>
			 </form>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
</div>
@endsection
