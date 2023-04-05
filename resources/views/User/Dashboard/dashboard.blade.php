<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.css" rel="stylesheet" />


    <title>Profil | Design My Ware</title>
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
        <div class="pt-16 bg-white flex w-full border border-gray-200 rounded-lg shadow ">
            <div class="w-1/3 flex flex-col items-center py-10">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</h5>
                <div class="mt-2 flex items-center gap-x-3">
                    <button type="button" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Change</button>
                  </div>
            </div>
            <div class="w-full p-10">                 
                <form action="/user/profile" method="POST">
                  @csrf
                  @method('PUT')
                    <div class="space-y-12">
                      <div class="border-b border-gray-900/10 pb-12">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                          <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="name" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{auth()->user()->name}}">
                              </div>
                            </div>
                          </div>
                          <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Jenis kelamin</label>
                            <div class="mt-2">
                              <select name="gender" id="countries" class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <option value="pria" {{ auth()->user()->name == 'pria' ? 'selected' : '' }}>Pria</option>
                                <option value="wanita" {{ auth()->user()->name == 'wanita' ? 'selected' : '' }}>Wanita</option>
                              </select>
                            </div>
                          </div>
                          <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="email" name="email" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{auth()->user()->email}}" readonly disabled>
                              </div>
                            </div>
                          </div>
                          <div class="sm:col-span-4">
                            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">No Telepon</label>
                            <div class="mt-2">
                              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="phone_number" id="username" autocomplete="username" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{auth()->user()->phone_number}}">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  
                      <div class="border-b border-gray-900/10 pb-12">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Alamat</h2>
                  
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Provinsi</label>
                                <div class="mt-2">
                                    <input type="text" name="province" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{auth()->user()->province}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Kota/Kabupaten</label>
                                <div class="mt-2">
                                    <input type="text" name="city" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{auth()->user()->city}}">
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Kecamatan</label>
                                <div class="mt-2">
                                    <input type="text" name="subdistrict" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"  value="{{auth()->user()->subdistrict}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Kelurahan</label>
                                <div class="mt-2">
                                    <input type="text" name="ward" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{auth()->user()->ward}}">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-2">
                                <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Kode Pos</label>
                                <div class="mt-2">
                                    <input type="text" name="zip" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{auth()->user()->zip}}">
                                </div>
                            </div>
                            <div class="col-span-full">
                              <label for="street-address" class="block text-sm font-medium leading-6 text-gray-900">Alamat lengkap</label>
                              <div class="mt-2">
                                <input type="text" name="street" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{auth()->user()->street}}">
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                  
                    <div class="mt-6 flex items-center justify-end gap-x-6">
                        <button type="submit" class="rounded-md bg-third px-3 py-2 text-sm font-semibold text-black shadow-sm ">Simpan</button>
                    </div>
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