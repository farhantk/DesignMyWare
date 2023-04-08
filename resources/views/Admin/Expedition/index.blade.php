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

	@include('Admin.snippet.sidebar')

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Ekspedisi</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="/admin">Home</a></li>
				<li class="breadcrumb-item active">Ekspedisi</li>
				</ol>
			</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<div class="content">
		<div class="container-fluid">
             <!-- /.row -->
        <div class="row">
            <div class="col-6">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar ekspedisi</h3>
                </div>
                <!-- ./card-header -->
                <div class="card-body">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($expeditions as $expedition)
                            <tr data-widget="expandable-table" aria-expanded="false">
                                <td>{{ $expedition->name }}</td>
                                <td>
                                    <form action="/admin/expedition/{{ $expedition->id }}/delete" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a>
                                            <button type=submit>Hapus</button>
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <tr class="expandable-body">
                                <td colspan="5">
                                    <form action="/admin/expedition/{{ $expedition->id }}/edit" method="post">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="{{ $expedition->name }}">
                                            </div>
                                        </div>
                                      <!-- /.card-body -->
                      
                                      <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody> 
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <div class="col-6">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Tambah ekspedisi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/expedition" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama ekspedisi">
                            </div>
                        </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
            </div>
          </div>
          <!-- /.row -->
		</div>
		<!-- /.container-fluid -->
		</div>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@include('Admin.snippet.footer')
	</div>
	<!-- ./wrapper -->

	@include('Admin.snippet.js')

</body>
</html>
