@extends('layouts.layout')
@section('content')
 <div id="page-wrapper">
    <div class="col-md-12 graphs">
	<div class="xs">
  	<h3><b>DATA KATEGORI PRODUK</b></h3>
  	<div class="bs-example4" data-example-id="contextual-table">
  	<div><button type="button" class="btn btn-xs btn-primary"><a href="{{ route('jenis_barang.create')}}">Tambah Data</a></button></div></div>
    <table class="table">
    <thead>			
		<tr class="active">
			<th>NO</th>
			<th>Kategori Produk</th>
			<th colspan="2">Kelola</th>
		</tr>
		</thead>
		<tbody>
		@php $a=1; @endphp
		@foreach($jenis as $data)
		<tr>
			<td>{{ $a++ }}</td>
			<td>{{ $data->nama_jenis_barang }}</td>
			<td>
				<button type="button" class="btn btn-sm btn-info"><a href="{{ route('jenis_barang.edit',$data->id_jenis_barang)}}">Edit Data</a></button>
			</td>
			<td>
			<form method="post" action="{{ route('jenis_barang.destroy', $data->id_jenis_barang) }}">
                          
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
</div>
@endsection

