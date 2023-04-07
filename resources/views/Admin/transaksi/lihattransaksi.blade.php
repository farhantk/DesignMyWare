<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Transaksi</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Jumlah/th>
                <th>Harga</th>
                <th>Total Harga</th>
                <th>Hapus</th>
              </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @forelse ($pesanan_details as $pesanan_detail)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$no++}}
                        </th>
                        <td class="px-6 py-4">
                            {{ $pesanan_detail->product->name}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pesanan_detail->jumlah_pesanan}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pesanan_detail->product->price}}
                        </td>
                        <td class="px-6 py-4">
                            {{ $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->price}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Data Kosong</td>
                    </tr>
                @endforelse  
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>