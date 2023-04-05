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
            <div class="relative w-full h-full max-w-2xl md:h-auto bg-white overflow-y-auto">
                <!-- Modal content -->
                <div class="relative rounded-lg">
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
                    <!-- Modal body -->
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