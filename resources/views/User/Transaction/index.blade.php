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
                @foreach($detailPesanan as $detail)
                    <div class="w-full my-6 p-5 bg-white border border-gray-200 rounded-lg shadow">
                        @if($detail->pesanan->order->status == 'Menunggu konfirmasi')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$detail->pesanan->order->created_at}} | <span class="bg-gray-800 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$detail->pesanan->order->status}}</span></p>
                        @elseif($detail->pesanan->order->status == 'Diproses')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$detail->pesanan->order->created_at}} | <span class="bg-blue-600 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$detail->pesanan->order->status}}</span></p>
                        @elseif($detail->pesanan->order->status == 'Dikirim')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$detail->pesanan->order->created_at}} | <span class="bg-yellow-400 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$detail->pesanan->order->status}}</span></p>
                        @elseif($detail->pesanan->order->status == 'Selesai')
                            <p class="mb-3 font-light text-gray-500 text-sm">{{$detail->pesanan->order->created_at}} | <span class="bg-third text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded">{{$detail->pesanan->order->status}}</span></p>
                        @endif
                        <h5 class="text-xl font-bold tracking-tight text-gray-900">{{$detail->product->name}}</h5>
                        <p class="mb-3 font-light text-gray-500 text-sm">{{$detail->jumlah_pesanan}} barang | Rp. {{$detail->total_harga}}</p>
                        <p class="font-light text-gray-500 text-sm">Pengiriminan : {{$detail->pesanan->order->courier->name}}</p>
                        @if($detail->pesanan->order->status == 'Dikirim')
                            <p class="mb-3 font-light text-gray-500 text-sm">No resi : {{$detail->pesanan->order->receipt_code}}</p>
                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                <button id='tracking' data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Lacak</button>
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
                                        <!-- Modal body -->
                                        @php
                                            $temp = (string)$detail->pesanan->order->receipt_code;
                                            $receipt = $temp;
                                            $courier = (string)$detail->pesanan->order->courier->name;
                                            $api_key = '2dc5a1730c246c81eeca83daef396b1d7c2b2ac25676ad5a6a5f53f66e32063d';

                                            $url = 'https://api.binderbyte.com/v1/track?api_key='.$api_key.'&courier='.$courier.'&awb='.$receipt;
                                            $response = file_get_contents($url);
                                            //$data = json_decode($response, true);
                                        @endphp
                                        <div class="p-6 space-y-6">
                                            <div class="items-start justify-between p-1 border-b rounded-t" id="showTrack">
                                                <h3 class="text-sm font-light text-gray-700">
                                                    Kurir   : {{$response}}
                                                </h3>
                                                <h3 class="text-sm font-light text-gray-700">
                                                    No resi : 
                                                </h3>
                                                <h3 class="text-sm font-light text-gray-700">
                                                    Alamat  : 
                                                </h3>
                                            </div>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                                            </p>
                                            <p class="text-base leading-relaxed text-gray-500">
                                                The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                                            </p>
                                        </div>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
                                            <button class="text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Barang sampai</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>
           <!-- This is an example component -->
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