<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">


    <title>Profil | Design My Ware</title>
</head>
<body>
    
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
    </section>
    <!-- END: Hero -->
    <section class="p-24">
        <h1 class="py-10 text-4xl font-bold">
            Selesaikan transaksimu
        </h1>
        <div class="pb-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Produk
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Qty
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Harga
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details_pesanan as $detail)
                            <tr class="bg-white border-b">
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    {{$detail->product->name}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$detail->jumlah_pesanan}}
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Rp. {{$detail->product->price * $detail->jumlah_pesanan}}
                                </td>
                                <td class="px-6 py-4">
                                    <form action="">
                                        @csrf
                                        <a class="font-medium text-red-600 hover:underline"><button type="submit">Hapus</button></a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <tfoot class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Rp. {{$totalPrice}}
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="">
            <div class="col-span-2 border border-gray-200 rounded-lg shadow p-10">           
                <form action="/user/checkout" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama lengkap</label>
                        <input type="text" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" required value="{{$user->name}}">
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No HP</label>
                        <input type="text" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" required value="{{$user->phone_number}}">
                    </div>

                    <div class="border-b border-gray-900/10 ">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Alamat</h2>
                  
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Provinsi</label>
                                <div class="mt-2">
                                    <input type="text" name="province" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" value="{{auth()->user()->province}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Kota/Kabupaten</label>
                                <div class="mt-2">
                                    <input type="text" name="city" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" value="{{auth()->user()->city}}">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Kecamatan</label>
                                <div class="mt-2">
                                    <input type="text" name="subdistrict" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6"  value="{{auth()->user()->subdistrict}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Kelurahan</label>
                                <div class="mt-2">
                                    <input type="text" name="ward" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" value="{{auth()->user()->ward}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Kode Pos</label>
                                <div class="mt-2">
                                    <input type="text" name="zip" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" value="{{auth()->user()->zip}}">
                                </div>
                            </div>
                            <div class="col-span-full">
                              <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Alamat lengkap</label>
                              <div class="mt-2">
                                <input type="text" name="street" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" value="{{auth()->user()->street}}">
                              </div>
                            </div>
                        </div>
                      </div>
                    <div class="mb-6 mt-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Total harga</label>
                        <input type="text" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" required readonly value="{{$totalPrice}}">
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Pilih ekspedisi pengiriman</label>
                        <select id="countries" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" name="courier">
                            
                            @foreach ($expeditions as $expedition)
                                <option value="{{$expedition->id}}">{{$expedition->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6 mt-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Bukti pembayaran</label>
                        <input class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6 @error('photo') disabled @enderror" id="default_size" type="file" name="paymentreceipt">
                        @error('paymentreceipt')
                            <div class="invalid-feedback">
                            {{$message}}
                            </div>  
                        @enderror
                        </div>
                        <h1>Jumlah yang harus dibayar sebesar Rp. {{$totalPrice}}</h1>
                        <p>BCA a.n DesignMyWare 342352352</p>
                        <p>BNI a.n DesignMyWare 534535345</p>
                        <p>BSI a.n DesignMyWare 424242455</p>
                        <p>Mandiri a.n DesignMyWare 32424672</p>


                    <button class="mt-5 text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Selesai</button>
                </form>
            </div>
            
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
