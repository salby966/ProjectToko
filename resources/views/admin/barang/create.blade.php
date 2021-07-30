@extends('layouts.layout')
@section('content')
 <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3><b>BARANG DAN PRODUK</b></h3>
  	         <div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
	<form class="form-horizontal" method="Post" action="{{ route('barang.store')}}">
		@csrf
	<div>
		<div class="form-group">	    	
					<label for="Barang" class="col-sm-2 control-label">Barang</label>
		<div class="col-sm-8">
					<input type="text" class="form-control1" name="nama_barang">
	</div>
	</div>
		<div class="form-group">	    	
					<label for=" Jenis Barang" class="col-sm-2 control-label">Jenis Barang</label>
			<div class="col-sm-8">
			<select name="id_jenis_barang">
				@foreach($barang as $data)
				<option value="{{ $data->id_jenis_barang }}">
				{{$data->nama_jenis_barang}}
				</option>
				@endforeach
			</select>
		</div>
		</div>
		<div class="form-group">	    	
					<label for="Stok Barang" class="col-sm-2 control-label">Jumlah Stok Barang</label>
		<div class="col-sm-8">
					<input type="text" class="form-control1" name="stok_barang">
	</div>
		</div>
	 </div>
	 <button type="submit" class="btn btn-primary">Tambah Data</button>
    </form>
  </div>
  </div>
</div>
</div>
</div>
@endsection