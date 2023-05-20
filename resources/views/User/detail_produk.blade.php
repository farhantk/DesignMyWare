<?php 
    function rupiah($angka){
        $hasil_rupiah = "Rp. " . number_format($angka,0,',','.');
        return $hasil_rupiah;
     
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=""X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="{{asset('AdminLte')}}/dist/css/adminlte.min.css"> -->
        @vite('resources/css/app.css')
        <link href="{{asset('css')}}/style.css" rel="stylesheet">
        <!-- CSS -->
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
        <!-- <link rel="stylesheet" href="{{asset('AdminLte')}}/dist/css/adminlte.min.css"> -->
        <title>Detail Produk | Design My Ware</title>
    </head>
     <!-- START: Hero -->
     <section id="home" class="for-bg">
        @include('User.snippet.navbar')
        <div class="px-24 pt-24">
            <div class="flex flex-wrap pt-16">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-4xl tracking-tight font-bold text-primary sm:text-5xl sm:tracking-tight md:text-6xl md:tracking-tight">
                        <span class="text-3xl text-black xl:inline">Detail Produk</span>
                    </h1>
                    </br>
                    <form action="{{route('user.order', $product->id)}}" method="post" id="submitForm">
                        @csrf
                        <p style="font-weight:bold">Nama Produk: </p>
                        <p>{{$product->name}}</p>
                        </br>
                        <p style="font-weight:bold">Deskripsi:</p>
                        <p>{{$product->desc}}</p>
                        </br>
                        <p style="font-weight:bold">Sablon:</p>
                        <select name="sablon" id="sablon" style="width:180px;">
                            <option value="1" selected>Depan & Belakang</option>
                            <option value="2">Depan</option>
                            <option value="3">Belakang</option>
                        </select>
                        </br>
                        </br>
                        <p style="font-weight:bold">Patch:</p>
                        <input type="radio" name="patch" value="Ya" class="patch" >
                        <label for="Ya" class="mr-3">Ya</label>
                        <input type="radio" name="patch" value="Tidak" class="ml-3 patch" checked >
                        <label for="Tidak">Tidak</label>
                        </br>
                        </br>
                        <p style="font-weight:bold">Upload Gambar (Bisa lebih dari satu):</p>
                        <input type="file" name="gambar" multiple>
                        </br>
                        </br>
                        <p style="font-weight:bold">Quantity:</p>
                        <input type="number" min=1 value=1 id="qty" name="qty">
                        </br>
                        </br>
                        <p style="font-weight:bold">Total Harga:</p>
                        <p id="total_price">{{rupiah($product->price)}}</p>
                        <div class="py-8">
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-full font-semibold py-3 px-8 hover:opacity-80 hover:shadow-lg transition duration-500" id="pesan">Pesan Sekarang!</button>
                            </a>
                            <a href="https://wa.me/6282244333210">
                                <button class="text-base text-white bg-third rounded-full font-semibold py-3 px-8 hover:opacity-80 hover:shadow-lg transition duration-500" type="button" style="background-color:rgb(66 181 73 / var(--tw-bg-opacity)) !important;">Tawar Menawar</button>
                            </a>
                        </div>
                        <input type="hidden" id="totalHarga" name="totalPrice">
                    </form>
                </div>
                <div class="w-full self-center px-4 lg:w-1/2">
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
    @include('User.snippet.footer')
    <!-- END: Footer -->
    <!-- START: JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/flowbite.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $("#pesan").on("click", function(){
            console.log($(this));
            // $("#submitForm").submit();
        });
        let hargaSatuan = {!! $product->price !!};
        $("#totalHarga").val(hargaSatuan);
        let sablon = false;
        let patch = false;
        function formatRupiah(angka, prefix = "Rp. "){
			var number_string = angka.toString().replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}
        function countPrice(){
            let price = hargaSatuan;
            let totalPrice = 0;
            let qty = $("#qty").val();
            if(sablon){
                price -= 5000;
            }
            if(patch){
                price += 5000;
            }
            if(qty == 0){
                totalPrice = price;
                $("#total_price").html(formatRupiah(price));
            }else{
                totalPrice = qty * price;
                $("#total_price").html(formatRupiah(qty * price));
            }
            $("#totalHarga").val(totalPrice);
        }
        $("#sablon").on("change", function(){
            let selectedSablon = $(this).val();
            if(selectedSablon == 1){
                sablon = false;
            }else{
                sablon = true;
            }
            countPrice();
        });

        $(".patch").on("click", function(){
            let value = $(this).val();
            if(value == "Ya"){
                patch = true;
            }else{
                patch = false;
            }
            countPrice();
        })
        $("#qty").on("change", function(){
            let qty = $(this).val();
            let price = {!! $product->price !!};
            $("#total_price").html(formatRupiah(qty * price));
        })
        $("#qty").on("keyup", function(){
            let qty = $(this).val();
            let price = {!! $product->price !!};
            if(qty == 0){
                $("#total_price").html(formatRupiah(1 * price));
            }else{
                $("#total_price").html(formatRupiah(qty * price));
            }
        })
        
    </script>
</html>