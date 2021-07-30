<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="/tampilan/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="/tampilan/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="/tampilan/css/lines.css" rel='stylesheet' type='text/css' />
<link href="/tampilan/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="/tampilan/js/jquery.min.js"></script>
<!----webfonts--->
<link href='/tampilan/http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->  
<!-- Nav CSS -->
<link href="/tampilan/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/tampilan/js/metisMenu.min.js"></script>
<script src="/tampilan/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="/tampilan/js/d3.v3.js"></script>
<script src="/tampilan/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/tampilan/index.html">Modern</a>
            </div>
            <!-- /.navbar-header -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       <li>
                            <a href="/"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ route('jenis_barang.index') }}"><i class="fa fa-flask nav_icon"></i>JENIS BARANG</a>
                        </li>
                        <li>
                            <a href="{{ route('barang.index') }}"><i class="fa fa-flask nav_icon"></i>BARANG DAN PRODUK</a>
                        </li>
                        <li>
                            <a href="{{ route('transaksi.index') }}"><i class="fa fa-flask nav_icon"></i>TRANSAKSI</a>
                        </li>
                        <li>
                            <a href="{{ route('rekap.index') }}"><i class="fa fa-flask nav_icon"></i>REKAPITULASI PENJUALAN</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
     	  <div class="col_3">
            @foreach($rekap1 as $data)
        	<div class="widget_3">
          <div class="col-sm-3 widget_1_box">
            <div class="r3_counter_box">
                    <i class="pull-left fa fa-thumbs-up icon-rounded"></i>
                    <div class="stats">
                      <h5><strong>
                      </strong>Total Terjual {{ $data->total_sales }}
                  </h5>
                @if($data->id_jenis_barang=='1')
                        <span>Komsumsi</span>
                @elseif($data->id_jenis_barang=='2')
                         <span>Pembersih</span>
                @elseif($data->id_jenis_barang=='3')
                         <span>Retail</span>
                        @endif
                </div>
        	</div>
        </div>
             @endforeach
        	<div class="clearfix"></div><div id="wrapper">
  <h3></h3>
    <div class="bs-example4" data-example-id="contextual-table">
    <table class="table">
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
    @foreach($rekap2 as $data2)
    <tr>
      <td>{{ $a++ }}</td>
      <td>{{ $data2->nama_barang }}</td>
      <td>{{ $data2->stok_barang}}</td>
      <td>{{ $data2->jumlah_pembelian}}</td>
      <td>{{ $data2->tgl_transaksi }}</td>
      <td>{{ $data2->nama_jenis_barang}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>
          <div class="clearfix"> </div>
	    </div>
		<div class="copy">
            <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="/tampilan/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
		</div>
       </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="/tampilan/js/bootstrap.min.js"></script>
     <!-- /#wrapper -->
    <!-- Nav CSS -->
<link href="/tampilan/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="/tampilan/js/metisMenu.min.js"></script>
<script src="/tampilan/js/custom.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="/tampilan/js/bootstrap.min.js"></script>
</body>
</html>
