<!DOCTYPE html>
<html lang="en">
@extends('Admin.snippet.head')

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-white navbar-light">
		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->
			<li class="nav-item">
				<form class="form-inline" action="/admin/signout" method="post">
					@csrf
					<button class="btn btn-link" type="submit">Log Out</button>
				</form>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->

	@extends('Admin.snippet.sidebar')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Semua transaksi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="/admin">Home</a></li>
				<li class="breadcrumb-item active">Semua transksi</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="card-title">DataTable with minimal features & hover style</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                      <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                          <th>Tanggal</th>
                          <th>Pembeli</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr data-widget="expandable-table" aria-expanded="false">
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->User->name}}</td>
                                    <td>{{$order->pesanan->total_price}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>
                                        @if($order->status == 'Menunggu konfirmasi')
                                            <form action="/admin/transaction/{{$order->id}}/process" method="post">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="btn btn-primary">Proses</button>
                                            </form>
                                        @elseif($order->status == 'Diproses')
                                            <form action="/admin/transaction/{{$order->id}}/deliver" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Kode Resi" aria-label="Recipient's username" aria-describedby="button-addon2" name=receipt_code>
                                                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Kirim</button>
                                                </div>
                                            </form>
                                        @elseif($order->status == 'Dikirim')
                                        @elseif($order->status == 'selesai')
                                        @endif
                                    </td>
                                </tr>
                                <tr class="expandable-body">
                                    <td colspan="5">
                                        <div class="row">
                                            <div class="col-12">
                                              <h4>
                                                <i class="fas fa-globe"></i> DesignMyWare.
                                                <small class="float-right">{{$order->created_at}}</small>
                                              </h4>
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <!-- info row -->
                                          <div class="row invoice-info">
                                            <div class="col-sm-4 invoice-col">
                                              <img src="{{asset('storage/'.$order->paymentreceipt)}}" alt="">
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                              Kirim
                                              <address>
                                                <strong>{{$order->User->name}}</strong><br>
                                                {{$order->User->street}}<br>
                                                {{$order->User->province}}, {{$order->User->city}}<br>
                                                {{$order->User->subdistrict}}, {{$order->User->ward}}, {{$order->User->zip}}<br>
                                                No HP: {{$order->User->phone_number}}<br>
                                                Email: {{$order->User->email}}
                                              </address>
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-sm-4 invoice-col">
                                              <b>Kurir:</b> {{$order->courier->name}}<br>
                                              @if($order->receipt_code)
                                                <b>No Resi:</b> {{$order->receipt_code}}<br>
                                              @endif
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                            
                                          <!-- Table row -->
                                          <div class="row">
                                            <div class="col-12 table-responsive">
                                              <table class="table table-striped">
                                                <thead>
                                                <tr>
                                                  <th>Produk</th>
                                                  <th>Qty</th>
                                                  <th>Gambar</th>
                                                  <th>varian</th>
                                                  <th>Subtotal</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($order->pesanan->pesanan_details as $satuan)
                                                        <tr>
                                                          <td>{{$satuan->product->name}}</td>
                                                          <td>{{$satuan->jumlah_pesanan}}</td>
                                                          <td>{{$satuan->product->name}}</td>
                                                          <td>{{$satuan->product->name}}</td>
                                                          <td>{{$satuan->product->price * $satuan->jumlah_pesanan}}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                              </table>
                                            </div>
                                            <!-- /.col -->
                                          </div>
                                          <!-- /.row -->
                                    </td>
                                </tr>
                            @endforeach
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
                <!-- /.col -->
              </div>
		</div>
		<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@extends('Admin.snippet.footer')
	</div>
	<!-- ./wrapper -->

	@include('Admin.snippet.js')

</body>
</html>
