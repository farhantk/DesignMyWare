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
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Total Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Negosiasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    @forelse ($pesanan_details as $pesanan_id => $pesanan_details_per_id)
                        @foreach ($pesanan_details_per_id as $pesanan_detail)
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
                                    <form action="{{ route('pesanan_detail.negosiasi', $pesanan_detail->id) }}" method="POST">
                                      @csrf
                                      <input type="number" name="harga" value="{{ $pesanan_detail->harga }}" />
                                      <button type="submit">Kirim</button>
                                    </form>
                                  </td>
                                  <td class="px-6 py-4">
                                    <label class="label label-success">
                                      @switch($pesanan_detail->status)
                                        @case(1)
                                          Negosiasi
                                          @break
                                        @case(2)
                                          Dikemas
                                          @break
                                        @case(3)
                                          Dikirim
                                          @break
                                        @case(4)
                                          Diterima
                                          @break
                                        @case(5)
                                          Selesai
                                          @break
                                        @default
                                          Status tidak ditemukan
                                      @endswitch
                                    </label>
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