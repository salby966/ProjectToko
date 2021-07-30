@extends('layouts.layout')
@section('content')
 <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
  	       <h3>Forms</h3>
  	         <div class="tab-content">
			<div class="tab-pane active" id="horizontal-form">
			<form method="Post" class="form-horizontal" action="{{ route('jenis_barang.update',$jenis->id_jenis_barang)}}">
			@method('put')
			@csrf
			<div class="form-group">	
			<label for="Jenis Barang" class="col-sm-2 control-label">Jenis Barang</label>
			<div class="col-sm-8">
				<input type="text" class="form-control1" name="nama_jenis_barang" value="{{$jenis->nama_jenis_barang}}">
			</div>
			</div>
			</div>
		</div>
	 </div>
			<button type="submit" class="btn btn-primary">Tambah Data</button>
	 </form>
  </div>
  </div>
</div>
</div>
@endsection