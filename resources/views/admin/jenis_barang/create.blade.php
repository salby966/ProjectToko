@extends('layouts.layout')
@section('content')
 <div id="page-wrapper">
        <div class="graphs">
	     <div class="xs">
	      <div class="well1 white">
  	       <h3><b>DATA JENIS BARANG</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
			<form class="form-horizontal" method="Post" action="{{ route('jenis_barang.store')}}">
			@csrf
				<div class="form-group">	    	
					<label for="Kategori Barang" class="col-sm-2 control-label">Jenis Barang </label>
					<div class="col-sm-8">
					<input type="text" class="form-control1" name="nama_jenis_barang" placeholder="Jenis Barang" id="formGroupExampleInput">
					@error('nama_jenis_barang') {{$message}} @enderror
					</div>
				</div>
				 <button type="submit" class="btn btn-primary">Tambah Data</button>
			</div>
		</div>
	 </div>
    </form>
  </div>
  </div>
</div>
</div>
@endsection

			