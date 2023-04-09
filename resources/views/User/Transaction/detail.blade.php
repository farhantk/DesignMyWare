<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <!-- CSS -->


    <title>Home | Design My Ware</title>
</head>
<body>
    
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
    </section>
    <!-- END: Hero -->
    <section class="p-24 container">
        <div class="pt-10 bg-white flex p w-full border border-gray-200 rounded-lg shadow ">
            <div class="p-10 text-2xl font-bold">
                <h1>Daftar transaksi</h1>
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="text-base text-white bg-third rounded-lg font-semibold py-1.5 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Lacak</button>

            </div>
           <!-- This is an example component -->
        </div>
        <!-- Default Modal -->
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="drop-shadow-2xl fixed inset-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto bg-white">
                <!-- Modal content -->
                <div class="relative rounded-lg">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-4 border-b rounded-t">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Lacak
                        </h3>
                        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="flex w-full px-10 rounded-b">
                        <ol class="relative text-gray-500 border-l border-gray-200 p-10 inset-0">                  
                            <li class="mb-10 ml-6">            
                                <span class="absolute flex items-center justify-center w-8 h-8 bg-green-200 rounded-full -left-4 ring-4 ring-third">
                                    <svg aria-hidden="true" class="w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight ps-15">Personal Info</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-third">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Account Info</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                            <li class="mb-10 ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-third">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Review</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                            <li class="ml-6">
                                <span class="absolute flex items-center justify-center w-8 h-8 bg-gray-100 rounded-full -left-4 ring-4 ring-third">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                </span>
                                <h3 class="font-medium leading-tight">Confirmation</h3>
                                <p class="text-sm">Step details here</p>
                            </li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
    </section>   
    <!-- END: Blog -->
    <!-- START: Footer -->
    @include('User.snippet.footer')
    <!-- END: Footer -->
    <!-- START: JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>

    <!-- END: JS -->
</body>
</html>

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