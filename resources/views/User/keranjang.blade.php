<!doctype html>
<html lang="en">
  <head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Daftar Pesanan | Design My Ware</title>
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css"  rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
  </head>
  <body>
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
    </section>
    <!-- END: Hero -->
    <section class="p-24 container">
        @if(session()->has('success'))
        <div id="alert-3" class="flex p-4 mb-4 text-green-800 rounded-lg bg-green-50" role="alert">
          <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
          <span class="sr-only">Info</span>
          <div class="ml-3 text-sm font-medium">
            {{session('success')}}
          </div>
          <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
          </button>
        </div>
      @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            <center>No</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Nama Barang</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Jumlah</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Harga</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Total Harga</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Negosiasi</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Status Nego</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Harga Akhir</center>
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <center>Hapus</center>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php $total_harga = 0 ?>
                    @forelse ($pesanan_details as $pesanan_id => $pesanan_details_per_id)
                        @foreach ($pesanan_details_per_id as $pesanan_detail)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <center>{{$no++}}</center>
                                </th>
                                <td class="px-6 py-4">
                                    <center>{{ $pesanan_detail->product->name}}</center>
                                </td>
                                <td class="px-6 py-4">
                                    <center>{{ $pesanan_detail->jumlah_pesanan}}</center>
                                </td>
                                <td class="px-6 py-4">
                                    <center>{{ $pesanan_detail->product->price}}</center>
                                </td>
                                <td class="px-6 py-4">
                                    <center>{{ $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->price}}</center>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('pesanan_detail.negosiasi', $pesanan_detail->id) }}" method="POST">
                                      @csrf
                                      <input type="number" name="harga" value="{{ $pesanan_detail->harga }}" />
                                      <button type="submit">Kirim</button>
                                    </form>
                                </td>
                                <td class="px-6 py-4">
                                    <center>{{ $pesanan_detail->status_nego }}</center>
                                </td>
                                <td class="px-6 py-4">
                                    @if($pesanan_detail->status_nego == 'Negosiasi' || $pesanan_detail->status_nego == 'Accept' || $pesanan_detail->status_nego == 'Reject')
                                        <center>{{ $pesanan_detail->harga_nego }}</center>
                                    @else
                                        <center>{{ $pesanan_detail->jumlah_pesanan * $pesanan_detail->product->price}}</center>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('pesanan_detail.delete', $pesanan_detail->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <center><button type="submit" class="text-red-600 hover:text-red-800">Delete</button></center>
                                    </form>
                                </td>
                            </tr>
                            <?php $total_harga += $pesanan_detail->harga_nego?>
                        @endforeach
                    @empty
                        <tr>
                            <td colspan="6">Data Kosong</td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="6" align="right"><strong>Total Harga : </strong></td>
                        <td>Rp.{{number_format($total_harga)}}</td>
                    </tr>
                    <tr>
                        <td colspan="6"></td>
                        <td colspan="2">
                            <a href="#" class="btn btn-success btn-blok">
                                <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Checkout</button>
                            </a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>  

    <!-- START: Footer -->
    @include('User.snippet.footer')
    <!-- END: Footer -->
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="assets/script/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
  </body>
  
</html>