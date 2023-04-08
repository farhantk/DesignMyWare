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
				<h1 class="m-0">Transaksi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="/admin">Home</a></li>
				<li class="breadcrumb-item active">Lihat Seluruh Transaksi</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
		<div class="container-fluid">
            @include('Admin.transaksi.lihattransaksi')
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
