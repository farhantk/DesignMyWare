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

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Produk</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.product')}}">Produk</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                    </div><!-- /.col -->
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Produk</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{route('admin.product.update', $product->id)}}" method="post">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="width:150px;">Nama</span>
                                        <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Nama" aria-describedby="basic-addon1" name="name" value="{{$product->name}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="width:150px;">Varian</span>
                                        <input type="text" class="form-control" placeholder="Varian ID" aria-label="Varian" aria-describedby="basic-addon1" name="variant_id" value="{{$product->variant_id}}">
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" style="width:150px;">Deskripsi Produk</span>
                                        <textarea class="form-control" placeholder="Deskripsi Produk" aria-label="With textarea" name="desc">{{$product->desc}}</textarea>
                                    </div>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text" id="basic-addon1" style="width:150px;">Harga</span>
                                        <input type="text" class="form-control" placeholder="Harga Produk" aria-label="Harga" aria-describedby="basic-addon1" name="price" value="{{$product->price}}">
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

	@extends('Admin.snippet.footer')
	</div>
	<!-- ./wrapper -->

	@include('Admin.snippet.js')

</html>