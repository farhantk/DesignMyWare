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
        <div class="grid grid-cols-3 gap-4">
            <div class="col-span-2 border border-gray-200 rounded-lg shadow p-10">           
                <form action="user/checkout" method="post">
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
                        <input type="text" id="password" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-third sm:text-sm sm:leading-6" required readonly value="{{$user->name}}">
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
                    <button class="text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Selesai</button>
                </form>
            </div>
            <div class="">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Image</span>
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Product
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Qty
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <td class="w-32 p-4">
                                    <img src="/docs/images/products/apple-watch.png" alt="Apple Watch">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Apple Watch
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div>
                                            <input type="number" id="first_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 dark:bg-gray-700" placeholder="1" required>
                                        </div>
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    $599
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-red-600hover:underline">Remove</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b">
                                <td class="w-32 p-4">
                                    <img src="/docs/images/products/imac.png" alt="Apple Imac">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Imac 27"
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div>
                                            <input type="number" id="second_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1" placeholder="1" required>
                                        </div>
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    $2499
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-red-600 hover:underline">Remove</a>
                                </td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="w-32 p-4">
                                    <img src="/docs/images/products/iphone-12.png" alt="Iphone 12">
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    Iphone 12 
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                        <div>
                                            <input type="number" id="third_product" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1" placeholder="1" required>
                                        </div>
                                        <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200" type="button">
                                            <span class="sr-only">Quantity button</span>
                                            <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                        </button>
                                    </div>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900">
                                    $999
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-red-600 hover:underline">Remove</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
<!-- Default Modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="drop-shadow-2xl fixed inset-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
    @php
        $response = Http::get('https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$detail->pesanan->order->courier->name.'&awb='.$detail->pesanan->order->receipt_code);
        $track = json_decode($response, true);
        dd($track);
    @endphp

    @if($response->ok())
        <div class="relative w-full h-full max-w-2xl md:h-auto bg-white overflow-y-auto">
            <div class="relative rounded-lg">
                <div class="flex items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Info pengiriman
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <div class="items-start justify-between p-4 border-b rounded-t">
                    <h3 class="text-m font-medium text-gray-900">
                        Kurir   : {{ $track['data']['summary']['courier'] }} {{ $track['data']['summary']['service'] }}
                    </h3>
                    <h3 class="text-m font-medium text-gray-900">
                        No resi : {{ $track['data']['summary']['awb'] }}
                    </h3>
                    <h3 class="text-m font-medium text-gray-900">
                        Alamat  : {{ $track['data']['detail']['destination'] }}
                    </h3>
                </div>
                <div class="flex w-full px-10 rounded-b">
                    <ol class="relative text-gray-500 border-l border-gray-200 px-10 pt-10 inset-0">
                        @foreach($track['data']['history'] as $history)                  
                            <li class="mb-2 ml-6">            
                                <span class="absolute flex items-center justify-center w-3 h-3 bg-green-200 rounded-full -left-2 ring-4 ring-third"></span>
                                <h3 class="font-medium leading-tight -left-2">{{ $history['date'] }}</h3>
                                <p class="text-sm -left-2">{{ $history['desc'] }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div> 
            </div>
        </div>
    @else
        <p>{{$response}}</p>
    @endif
    
</div>