@extends('layouts.layout')
@section('content')
    <div id="page-wrapper">
    <div class="col-md-12 graphs">
    	<form action="{{ url('barang')}}" method="GET" class="navbar-form navbar-right">
    		@csrf
	    <input class="form-control" type="text" placeholder="Search" name="keyword" aria-label="Search">
	    <button type="submit" class="btn btn-primary">Search</button>
	  </form>
	<div class="xs">
  	<h3><b>DATA BARANG DAN PRODUK</b></h3>
  	<div class="bs-example4" data-example-id="contextual-table">
  	<div><button type="button" class="btn btn-xs btn-primary">
  		<a href="{{ route('barang.create')}}">Tambah Data</a></button></div>
    <table class="table">
    <thead>			
		<tr class="active">
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Nama Jenis Barang</th>
			<th>Stok Barang</th>
			<th colspan="2">Kelola</th>
		</tr>
		</thead>
		<tbody>
			@php $a=1; @endphp
			@foreach($barang as $data)
		<tr>
			<td>{{ $a++ }}</td>
			<td>{{ $data->nama_barang }}</td>
			<td>{{ $data->nama_jenis_barang }}</td>
			<td>{{ $data->stok_barang}}</td>
			<td>
				<button type="button" class="btn btn-sm btn-info"><a href="{{ route('barang.edit',$data->id_barang)}}">Edit Data</a></button>
			</td>
			<td>
			<form method="post" action="{{ route('barang.destroy', $data->id_barang) }}">
                          
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


	

