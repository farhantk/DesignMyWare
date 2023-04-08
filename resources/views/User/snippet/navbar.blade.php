<!-- START: Navbar -->
<header class="bg-transparent absolute justify-between top-0 left-0 w-full flex items-center z-10 border-b border-third">
  <div class="px-24">
      <div class="flex items-center justify-between relative">
          <div class="px-4">
              <a href="/" class="text-third block py-6 font-bold text-lg">Design My Ware</a>
          </div>
          <div class="flex items-center justify-center px-4">
              <button id="hamburger" name="hamburger" class="absolute block right-4 lg:hidden">
                  <span class="hamburger-item transition duratiaon-300 ease-in-out origin-top-left"></span>
                  <span class="hamburger-item transition duratiaon-300 ease-in-out"></span>
                  <span class="hamburger-item transition duratiaon-300 ease-in-out origin-bottom-left"></span>
              </button>
              <nav id="nav-menu" class="hidden absolute py-5 bg-secondary shadow-lg rounded max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                  <ul class="block lg:flex">
                      <li class="group">
                      <a href="#home" class="text-base text-third py-2 mx-8 flex group-hover:text-primary">Home</a> 
                      </li>
                      <li class="group">
                      <a href="#about" class="text-base text-third py-2 mx-8 flex group-hover:text-primary">About</a> 
                      </li>
                      <li class="group">
                      <a href="#portofolio" class="text-base text-third py-2 mx-8 flex group-hover:text-primary">Portofolio</a> 
                      </li>
                      <li class="group">
                      <a href="#blog" class="text-base text-third py-2 mx-8 flex group-hover:text-primary">Blog</a> 
                      </li>
                      <li class="group">
                      <a href="#contact" class="text-base text-third py-2 mx-8 flex group-hover:text-primary">Contact</a> 
                      </li>
                  </ul>
              </nav>
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="relative inset-y-0 right-0 px-24">
          @auth
              @if(auth()->user()->isAdmin)
                <a class="mr-2 text-sm  text-black">Sudah punya akun? </a>
                <a href="/signin" class="text-sm font-bold text-third">Masuk</a>
              @else
                <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" class="flex items-center text-sm font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:mr-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white" type="button">
                  <span class="sr-only">Open user menu</span>
                  @if( auth()->user()->photo )
                    <img class="w-8 h-8 mr-2 rounded-full" src="{{asset('storage/'.auth()->user()->photo)}}" alt="user-photo"/>
                  @else
                    <img class="w-8 h-8 mr-2 rounded-full" src="{{asset('storage/post-image/default.jpeg') }}" alt="user-photo"/>
                  @endif
                  <svg class="w-4 h-4 mx-1.5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
              
                <!-- Dropdown menu -->
                <div id="dropdownAvatarName" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                    <div class="px-4 py-3 text-sm text-gray-900 ">
                      <div class="font-medium ">{{auth()->user()->name}}</div>
                      <div class="truncate">{{auth()->user()->email}}</div>
                    </div>
                    <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
                      <li>
                        <a href="/user/profile" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                      </li>
                      <li>
                        <a href="/user/cart" class="block px-4 py-2 hover:bg-gray-100">Keranjang</a>
                      </li>
                      <li>
                        <a href="/user/transaction" class="block px-4 py-2 hover:bg-gray-100">Transaksi</a>
                      </li>
                      <li>
                        <a href="/user/cart" class="block px-4 py-2 hover:bg-gray-100">Daftar Pesanan</a>
                      </li>
                    </ul>
                    <div class="py-2" >
                      <form  action="/signout" method="post">
                        @csrf
                        <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                          <button type="submit">
                            Sign out
                          </button>
                        </a>
                      </form>
                    </div>
                </div>
              @endif
          @endauth
          
          @guest
            <a class="mr-2 text-sm  text-black">Sudah punya akun? </a>
            <a href="/signin" class="text-sm font-bold text-third">Masuk</a>
          @endguest
      </div>
    </header>
<!-- END: Navbar -->