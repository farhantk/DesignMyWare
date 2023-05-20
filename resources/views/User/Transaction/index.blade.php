<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <!-- CSS -->


    <title>Transaksi | Design My Ware</title>
</head>
<body>
    
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
    </section>
    <!-- END: Hero -->
    <section class="p-24 container">
        <div class="pt-10 bg-white flex-nowarp p w-full border border-gray-200 rounded-lg shadow ">
            <div class="p-10 text-2xl font-bold">
                <h1>Daftar transaksi</h1>
                @foreach ($orders as $order)
                    <div class="w-full my-6 p-5 bg-white border border-gray-200 rounded-lg shadow">
                        @if($order->status == 'Menunggu konfirmasi')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$order->created_at}} | <span class="bg-gray-800 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$order->status}}</span></p>
                        @elseif($order->status == 'Diproses')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$order->created_at}} | <span class="bg-blue-600 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$order->status}}</span></p>
                        @elseif($order->status == 'Dikirim')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$order->created_at}} | <span class="bg-yellow-400 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$order->status}}</span></p>
                        @elseif($order->status == 'Selesai')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$order->created_at}} | <span class="bg-third text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$order->status}}</span></p>
                        @endif
                        <div class="flex flex-nowrap">
                            <div class="w-2/3">
                                @foreach ($order->pesanan->pesanan_details as $item)
                                    <h5 class="text-xl font-bold tracking-tight text-gray-900">{{$item->product->name}}</h5>
                                    <p class="mb-3 font-light text-gray-500 text-sm">{{$item->jumlah_pesanan}} barang | Rp. {{$item->total_harga}}</p>
                                @endforeach
                            </div>
                            <div class="border-l-2 ps-10 border-gray-300">
                                <h5 class="mt-10 text-base font-bold tracking-tight text-gray-700">Total belanja</h5>
                                <h5 class="text-2xl font-bold tracking-tight text-gray-900">Rp. {{$totalPrice}}</h5>

                                <h5 class="mt-4 text-base font-bold tracking-tight text-gray-700">Kurir : {{$order->courier->name}}</h5>
                                @if($order->status == 'Dikirim' || $order->status == 'Selesai')
                                    <h5 class="text-base font-bold tracking-tight text-gray-700">No Resi : {{$order->receipt_code}}</h5>
                                @endif
                                @if($order->status == 'Dikirim')
                                    <div class="flex flex-nowarp">
                                        <div class="mt-6 flex items-center">
                                            <button id='tracking' data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Lacak</button>
                                        </div>
                                    </div>
                                    <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                                        <div class="relative w-full h-full max-w-2xl md:h-auto">
                                            <!-- Modal content -->
                                            <div class="relative bg-white rounded-lg shadow">
                                                <!-- Modal header -->
                                                <div class="flex items-start justify-between p-4 border-b rounded-t">
                                                    <h3 class="text-xl font-semibold text-gray-900">
                                                        Info pengiriman
                                                    </h3>
                                                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                                        <span class="sr-only">Close modal</span>
                                                    </button>
                                                </div>

                                                @php
                                                    
                                                    $temp = (string)$order->receipt_code;
                                                    $receipt = $temp;
                                                    $courier = (string)$order->courier->name;
                                                    $api_key = '2dc5a1730c246c81eeca83daef396b1d7c2b2ac25676ad5a6a5f53f66e32063d';
                                                    $and ='&';
                        
                                                    $url = 'https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courier.'&awb='.$receipt;
                                                    $url = str_replace('&amp;', '&', 'https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courier.'&awb='.$receipt);
                                                    $response = file_get_contents($url);
                                                    $data = json_decode($response, true);
                                                    
                                                @endphp

                                                <div class="p-6 space-y-6">
                                                    <div class="items-start justify-between p-1 border-b rounded-t" id="showTrack">
                                                        <h3 class="text-sm font-light text-gray-700">
                                                            Kurir   : {{$courier}}
                                                        </h3>
                                                        <h3 class="text-sm font-light text-gray-700">
                                                            No resi : {{$receipt}}
                                                        </h3>
                                                        <h3 class="text-sm font-light text-gray-700">
                                                            Alamat  : {{$data['data']['detail']['destination']}}
                                                        </h3>
                                                    </div>
                                                    <ol class="relative border-l border-gray-200 dark:border-gray-700">
                                                        @foreach($data['data']['history'] as $step)
                                                            <li class="mb-1 ml-4">
                                                                <div class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white"></div>
                                                                <time class="mb-1 text-sm font-normal leading-none text-gray-400 md:text-xs">{{$step['date']}}</time>
                                                                <p class="mb-1 text-base font-normal text-gray-500 md:text-sm sm:text-sm">{{$step['desc']}}</p>
                                                            </li>
                                                        @endforeach                 
                                                    </ol>
                                                </div>
                                                <!-- Modal footer -->
                                                <div class="flex p-6 space-x-2 border-t border-gray-200 rounded-b">
                                                    <form action="/admin/transaction/{{$order->id}}/finish" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="text-base text-third rounded-lg font-semibold py-1.5 px-8 ring-2 ring-third ring-inset hover:opacity-80 hover:shadow-lg hover:bg-third hover:text-white transition duration-500">Paket sampai</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
    </section>   
    <!-- END: Blog -->
    <!-- START: Footer -->
    @include('User.snippet.footer')
    <!-- END: Footer -->
    <!-- START: JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>