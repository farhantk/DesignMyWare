<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar Permintaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th scope="col" class="px-6 py-3">No</th>
                <th scope="col" class="px-6 py-3">Nama</th>
                <th scope="col" class="px-6 py-3">Handphone</th>
                <th scope="col" class="px-6 py-3">Nama Barang</th>
                <th scope="col" class="px-6 py-3">Jumlah</th>
                <th scope="col" class="px-6 py-3">Harga</th>
                <th scope="col" class="px-6 py-3">Total Harga</th>
                <th scope="col" class="px-6 py-3">Negosiasi</th>
                <th scope="col" class="px-6 py-3">Status Negosiasi</th>
                <th scope="col" class="px-6 py-3">Hapus</th>
              </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                @forelse ($pesanan_details as $details)
                  @foreach ($details as $pesanan_detail)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                      <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                          {{$no++}}
                      </th>
                      <td class="px-6 py-4">
                          {{ $pesanan_detail->pesanan->User->name}}
                      </td>
                      <td class="px-6 py-4">
                          {{ $pesanan_detail->pesanan->User->phone_number}}
                      </td>
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
                      <td>
                        {{ $pesanan_detail->harga }}
                      </td>
                      <td>
                        <form action="{{ route('admin.setuju', $pesanan_detail->id) }}" method="POST">
                          @csrf
                          @method('PATCH')
                          <select name="negotiation_status">
                              <option value="1">Accept</option>
                              <option value="0">Reject</option>
                          </select>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                      </td>
                      <td>
                        <form action="{{ route('admin.hapus', $pesanan_detail->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                      </td>
                  </tr>
                  @endforeach
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