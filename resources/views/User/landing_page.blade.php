<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=""X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="{{asset('css')}}/style.css" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />


    <title>Home | Design My Ware</title>
</head>
<body>
    
    <!-- START: Hero -->
    <section id="home" class="for-bg">
        @include('User.snippet.navbar')
        <div class="px-24 pt-24">
            <div class="flex flex-wrap pt-16">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-4xl tracking-tight font-bold text-primary sm:text-5xl sm:tracking-tight md:text-6xl md:tracking-tight">
                        <span class="block xl:inline text-third">Patform custom pakaian</span><br>
                        <span class="text-5xl text-black xl:inline">Solusi bagi kamu yang ingin memiliki pakaian sesuai keiginan ataupun memulai berjualan online</span>
                    </h1>
                    <div class="py-8">
                      <a href="#product_overview">
                        <button class="text-base text-white bg-third rounded-full font-semibold py-3 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Bisa cutom apa saja?</button>
                      </a>
                  </div>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="relative">
                        <img src="{{asset('img')}}/banner.png" alt="entah siapa" class="max-w-full right-0">
                        <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 lg:scale-125">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#2563eb" d="M50,-63.4C62.3,-49.2,68.1,-31.1,70.1,-13.4C72,4.4,70.1,21.9,61.4,34.2C52.8,46.5,37.5,53.6,22.5,56.9C7.6,60.1,-6.9,59.4,-20.6,55C-34.3,50.7,-47.2,42.7,-53.9,31.1C-60.6,19.5,-61,4.4,-57.2,-8.8C-53.4,-22,-45.3,-33.3,-35.1,-47.8C-24.9,-62.4,-12.4,-80.2,3.2,-84C18.8,-87.8,37.6,-77.6,50,-63.4Z" transform="translate(100 100) scale(0.7)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Hero -->
    <!-- START: Portofolio -->
    <section id="portofolio" class="pt-24 pb-16 bg-third">
        <div class="container">
            <div class="w-full px-4">
              <div class="max-w-full mx-auto text-center mb-16">
                <h4 class="block text-5xl mt-1 text-white lg:text-4xl mb-2">Platform Custom Printing Terpercaya & Berkualitas </h4>
              </div>
            </div>
            <div>
              <div class="flex flex-nowrap  text-center">
                <div class="w-full justify-self-center text-center px-4 lg:w-1">
                    <img src="img/landingPage/produksi_cepat.svg" alt="" class="w-full h-32">
                  <h1 class="text-white">Produksi Cepat<br><span class="pt-0">1-3 hari</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <img src="img/landingPage/bahan_premium.svg" alt="" class="w-full h-32">
                    <h1 class="text-white">Bahan Premium<br><span class="pt-0">Printing berkualitas</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <img src="img/landingPage/uang_kembali.svg" alt="" class="w-full h-32">
                    <h1 class="text-white">Garansi 100%<br><span class="pt-0">Uang kembali</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <img src="img/landingPage/nego.svg" alt="" class="w-full h-32">
                    <h1 class="text-white">Nego Harga<br><span class="pt-0">Lebih banyak lebih murah</span></h1>
                </div>

              </div>
            </div>
            
        </div>
    </section>
    <!-- END: Portofolio -->
    <!-- START: Blog -->
    <section id="product_overview" class="pt-24 pb-28 for-bg">
        <div class="container-fluid px-24">
            <div class="w-full px-4">
                <div class="max-w-full mx-auto text-center mb-16">
                    <h4 class="block text-3xl mt-1 text-third lg:text-4xl mb-2">Bisa Custom Apa Saja?</h4>
                </div>
            </div>
            <div>
                <div class="__scroll-selector">
                    @foreach($products as $product)
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">{{$product->name}}</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. {{$product->price}}</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    @endforeach
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
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  

    <script>
        $(document).ready(function () {
            $('.__scroll-selector').removeClass('hidden').flickity({
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": true,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
    <!-- END: JS -->
</body>
</html>