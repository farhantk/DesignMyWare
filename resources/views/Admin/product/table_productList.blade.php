<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-10">
              <h3 class="card-title w-100">Data Produk</h3>
            </div>
            <div class="col-2">
              <a class="btn btn-primary float-right" href="{{route('admin.product.add')}}">Tambah Produk</a>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Varian ID</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $p)
                <tr>
                  <td>{{$p->id}}</td>
                  <td>{{$p->name}}</td>
                  <td>{{$p->variant_id}}</td>
                  <td>{{$p->desc}}</td>
                  <td>{{$p->price}}</td>
                  <td class="pr-0"><a href="{{route('admin.product.edit', $p->id)}}" class="btn btn-primary">Edit</a></td>
                  <td class="pl-0"><a href="{{route('admin.product.delete', $p->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>