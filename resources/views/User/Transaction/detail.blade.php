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