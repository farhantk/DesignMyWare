<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    

    <title>tirtaFarhn</title>
</head>
<body>
    
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
    </section>
    <!-- END: Hero -->
    <section class="p-24 container">
        <div class="pt-16 bg-white flex w-full border border-gray-200 rounded-lg shadow ">
            <div class="w-1/3 flex flex-col items-center py-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</h5>
                <span class="text-sm text-gray-500 dark:text-gray-400">Visual Designer</span>
                <div class="flex mt-4 space-x-3 md:mt-6">
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Message</a>
                </div>
            </div>
            <div class="w-full p-10">                 
                <form>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{auth()->user()->email}}" disabled readonly>
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama lengkap</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{auth()->user()->name}}">
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">No Handphone</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{auth()->user()->name}}">
                    </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
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