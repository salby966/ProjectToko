<!DOCTYPE html>
<html>
<head>
	<title>Jenis Barang</title>
</head>
<body>
	<a href="">
	<table>
		<tr>
			<th>NO</th>
			<th>Nama Jenis Barang</th>
			<th>Kelola</th>
		</tr>
		@php $a=0; @endphp
		@foreach($jenis as $data)
		<tr>
			<td>{{ $a; }}</td>
			<td>{{ $data->nama_jenis_barang}}</td>
		</tr>
		@endforeach
	</table>

</body>
</html>