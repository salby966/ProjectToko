@extends('layouts.layout')
@section('content')
 <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3><b>TRANSAKSI</b></h3>
  	         <div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
	<form class="form-horizontal" method="Post" action="{{ route('transaksi.store')}}">
		@csrf
	<div>
		<div class="form-group">	    	
					<label for="Barang" class="col-sm-2 control-label">Nama Barang</label>
					<div class="col-sm-8">
				<select name="id_barang" class="form-control1">
				@foreach($transaksi as $data)
				<option value="{{ $data->id_barang }}">
				{{$data->nama_barang}}
				</option>
				@endforeach
			</select>
	</div>
	</div>
		<div class="form-group">	    	
					<label for=" Jumlah Pembelian" class="col-sm-2 control-label">Jumlah Pembelian</label>
		<div class="col-sm-8"> 
			<input type="number" class="form-control1" name="jumlah_pembelian">
		</div>
		</div>
		<div class="form-group">	    	
					<label for="Tanggal Transaksi" class="col-sm-2 control-label">Tanggal Transaksi</label>
			<div class="col-sm-8"> 
			<input type="date" class="form-control1" name="tgl_transaksi">
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