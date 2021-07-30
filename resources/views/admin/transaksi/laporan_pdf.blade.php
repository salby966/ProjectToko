<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table">
    <thead>			   
	<tr class="active">
			<th>NO</th>
			<th>Nama Barang</th>
			<th>Tanggal Pembelian</th>
			<th>Jumlah Pembelian</th>
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
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</html>