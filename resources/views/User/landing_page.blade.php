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
                  <svg xmlns="http://www.w3.org/2000/svg"  width="80" height="80"  data-name="Layer 1" viewBox="0 0 512 512" id="delivery-truck"><path fill="#fff" d="M472.3,221.3l-59.1-54.7A69.906,69.906,0,0,0,365.7,148H335.5v-6.1a50.018,50.018,0,0,0-50-50H67.2a50.018,50.018,0,0,0-50,50V365.8a10.029,10.029,0,0,0,10,10H58.4a53.141,53.141,0,0,0,104.8,0H349.4a53.141,53.141,0,0,0,104.8,0h30.5a10.029,10.029,0,0,0,10-10V272.7A69.617,69.617,0,0,0,472.3,221.3ZM458.7,236H399.5V181.2l.1.1ZM67.2,111.9H285.5a30.088,30.088,0,0,1,30,30V178h0v78.4h0v1.4H37.2V141.9A30.088,30.088,0,0,1,67.2,111.9Zm43.6,288.2A33.1,33.1,0,1,1,143.9,367,33.139,33.139,0,0,1,110.8,400.1Zm0-86.3a53.282,53.282,0,0,0-52,42H37.2v-78H315.5v78H162.8A53.2,53.2,0,0,0,110.8,313.8Zm291,86.3A33.1,33.1,0,1,1,434.9,367,33.139,33.139,0,0,1,401.8,400.1Zm73-44.3h-21a53.19,53.19,0,0,0-104,0H335.5V256.4h0V168h30.2a52.829,52.829,0,0,1,13.8,1.9V236a20.059,20.059,0,0,0,20,20h72.4a49.287,49.287,0,0,1,2.9,16.7Z"></path><path fill="#fff" d="M110.8 338.5a28.4 28.4 0 1 0 28.4 28.4A28.445 28.445 0 0 0 110.8 338.5zm0 36.9a8.4 8.4 0 1 1 8.4-8.4A8.451 8.451 0 0 1 110.8 375.4zM401.8 338.5a28.4 28.4 0 1 0 28.4 28.4A28.445 28.445 0 0 0 401.8 338.5zm0 36.9a8.4 8.4 0 1 1 8.4-8.4A8.451 8.451 0 0 1 401.8 375.4zM155.3 212.4a9.993 9.993 0 0 0 7.1 3h0a10.327 10.327 0 0 0 7.1-2.9l48.1-48.1a9.97 9.97 0 0 0-14.1-14.1l-41 41L142.6 171a9.97 9.97 0 1 0-14.2 14z"></path></svg>
                  <h1 class="text-white">Produksi Cepat<br><span class="pt-0">1-3 hari</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <span class="items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" data-name="Layer 1" viewBox="0 0 48 48" id="clothes"><path fill="#fff"d="M47.388,9.763l-8.2-3.45c-.023-.009-.048-.012-.071-.02s-.026-.014-.04-.019l-7.643-2.2V1a1,1,0,0,0-1-1H17.569a1,1,0,0,0-1,1V4.078l-7.643,2.2c-.014,0-.025.015-.04.019s-.048.011-.071.02l-8.2,3.45A1,1,0,0,0,0,10.685V47a1,1,0,0,0,1,1H47a1,1,0,0,0,1-1V10.685A1,1,0,0,0,47.388,9.763ZM46,40.693H39.8V8.74L46,11.349ZM37.8,46H25V39.019h2.19v-2H25V31.348h2.19v-2H25V23.676h2.19v-2H25V16.005h2.19v-2H25V10.067l5.627-4.139,7.17,2.06ZM18.569,2.893,23,5.915V7.584l-4.431-3.26ZM25,5.915l4.431-3.022V4.324L25,7.584ZM24,4.176,20.81,2h6.38ZM8.2,8.74V40.693H2V11.349ZM2,42.693H8.2V46H2Zm8.2-34.7,7.17-2.06L23,10.067v3.938H20.6v2H23v5.671H20.6v2H23v5.672H20.6v2H23v5.671H20.6v2H23V46H10.2ZM39.8,46V42.693H46V46Z"></path></svg>
                    </span>
                    <h1 class="text-white">Bahan Permium<br><span class="pt-0">Printing berkualitas</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 512 512" id="guaranteed"><path fill="#fff" d="M454.162 150.773c-3.46-3.248-6.557-6.121-9.338-8.701-22.597-20.962-22.597-20.962-29.452-51.013-.845-3.699-1.784-7.818-2.866-12.438-5.264-22.471-24.283-38.431-47.327-39.712-4.738-.263-8.958-.474-12.747-.662-30.784-1.533-30.784-1.533-55.353-20.147a2128.743 2128.743 0 0 0-10.188-7.685c-18.477-13.831-43.305-13.831-61.781 0a2079.472 2079.472 0 0 0-10.188 7.685c-24.568 18.614-24.568 18.614-55.353 20.147-3.789.188-8.009.399-12.747.662-23.044 1.282-42.063 17.241-47.328 39.712-1.082 4.62-2.021 8.739-2.865 12.438-6.855 30.05-6.855 30.05-29.452 51.012-2.781 2.581-5.878 5.454-9.338 8.701-16.828 15.794-21.14 40.245-10.729 60.842 2.141 4.234 4.068 7.994 5.8 11.369 14.064 27.427 14.064 27.427 10.229 58.012-.472 3.764-.997 7.955-1.561 12.666-2.739 22.916 9.675 44.418 30.891 53.504 4.361 1.868 8.254 3.509 11.749 4.981 14.636 6.168 21.727 9.163 27.453 14.155L85.87 464.677a8.003 8.003 0 0 0 8.63 11.258l45.641-7.975 23.277 40.059a7.999 7.999 0 0 0 14.17-.643l40.323-86.612c3.121-.952 5.992-1.837 8.638-2.654 29.451-9.088 29.453-9.088 58.904 0 3.02.932 6.346 1.957 9.992 3.066l40.131 86.2a8.003 8.003 0 0 0 7.254 4.623c2.84 0 5.479-1.51 6.916-3.98l23.277-40.059 45.641 7.975a8.002 8.002 0 0 0 8.63-11.258l-46.13-99.082c5.59-4.581 12.685-7.576 26.619-13.448 3.496-1.474 7.389-3.114 11.75-4.982 21.216-9.086 33.63-30.587 30.892-53.504-.563-4.711-1.089-8.902-1.562-12.667-3.836-30.584-3.836-30.584 10.229-58.011 1.73-3.376 3.658-7.135 5.799-11.369 10.411-20.596 6.099-45.047-10.729-60.841zM169.551 486.729l-18.379-31.627a8.01 8.01 0 0 0-8.294-3.861l-36.034 6.296 36.043-77.417c1.885 2.817 3.985 6.064 6.454 9.889 2.059 3.188 4.351 6.738 6.948 10.71 9.662 14.774 25.584 23.203 42.425 23.367l-29.163 62.643zm200.733-35.489a8.004 8.004 0 0 0-8.294 3.861l-18.379 31.627-29.17-62.658c16.411-.53 31.828-8.915 41.271-23.352 2.597-3.972 4.889-7.521 6.946-10.708 2.774-4.297 5.083-7.868 7.142-10.912l36.518 78.437-36.034-6.295zm80.327-246.843a2093.176 2093.176 0 0 1-5.757 11.286c-15.86 30.929-16.193 32.815-11.867 67.303.469 3.737.99 7.898 1.55 12.574 1.918 16.051-6.444 30.534-21.304 36.898-4.33 1.854-8.194 3.482-11.665 4.944-32.029 13.498-33.497 14.729-52.351 43.929-2.044 3.164-4.318 6.688-6.896 10.629-8.848 13.527-24.563 19.247-40.036 14.571-4.509-1.362-8.517-2.599-12.115-3.709-16.605-5.124-25.388-7.687-34.17-7.687s-17.564 2.563-34.17 7.687c-3.599 1.11-7.606 2.347-12.115 3.709-15.472 4.677-31.188-1.043-40.035-14.571-2.579-3.943-4.854-7.467-6.897-10.631-18.854-29.197-20.322-30.429-52.352-43.927a2120.126 2120.126 0 0 1-11.664-4.944c-14.859-6.364-23.222-20.848-21.303-36.898a2075.9 2075.9 0 0 1 1.55-12.573c4.325-34.489 3.992-36.375-11.868-67.304a2093.176 2093.176 0 0 1-5.757-11.286c-7.292-14.427-4.388-30.896 7.398-41.958 3.435-3.224 6.51-6.076 9.271-8.637 25.48-23.638 26.438-25.298 34.169-59.184.838-3.672 1.771-7.761 2.845-12.347 3.688-15.739 16.499-26.489 32.639-27.386 4.703-.262 8.893-.471 12.654-.658 34.714-1.729 36.514-2.384 64.219-23.375 3.002-2.274 6.344-4.807 10.114-7.629 12.941-9.687 29.664-9.687 42.605 0 3.771 2.822 7.112 5.354 10.114 7.629 27.705 20.99 29.505 21.646 64.219 23.375 3.762.187 7.951.396 12.654.658 16.14.897 28.951 11.647 32.638 27.386 1.074 4.586 2.007 8.675 2.845 12.347 7.731 33.886 8.689 35.546 34.17 59.184 2.761 2.562 5.836 5.414 9.271 8.637 11.785 11.062 14.689 27.532 7.397 41.958zM256 79.06c-73.337 0-133 59.664-133 133s59.663 133 133 133 133-59.664 133-133-59.663-133-133-133zm0 250.001c-64.514 0-117-52.486-117-117s52.486-117 117-117 117 52.486 117 117-52.486 117-117 117zm39.567-101.278h-.012c-8.45.003-16.394 3.296-22.366 9.273-5.974 5.977-9.261 13.923-9.258 22.373.003 8.451 3.296 16.395 9.273 22.368 5.975 5.97 13.916 9.258 22.363 9.258h.01c17.444-.007 31.632-14.203 31.625-31.646-.003-8.451-3.296-16.395-9.273-22.368-5.974-5.971-13.914-9.258-22.362-9.258zm.006 47.272h-.005a15.536 15.536 0 0 1-11.054-4.576 15.53 15.53 0 0 1-4.583-11.055c-.002-4.177 1.623-8.104 4.575-11.058s6.878-4.582 11.055-4.583h.006c4.175 0 8.1 1.625 11.053 4.576a15.53 15.53 0 0 1 4.583 11.055c.003 8.621-7.009 15.638-15.63 15.641zm-79.129-78.716c17.443-.006 31.63-14.203 31.625-31.647-.007-17.441-14.197-31.625-31.637-31.625h-.011c-17.443.006-31.63 14.203-31.625 31.647.007 17.441 14.196 31.626 31.635 31.625h.013zm-15.647-31.63c-.003-8.622 7.01-15.639 15.631-15.642h.005c8.619 0 15.634 7.011 15.637 15.63.003 8.622-7.009 15.639-15.631 15.642h-.006c-8.62 0-15.633-7.011-15.636-15.63zm106.712-10.1-88.583 123.37a7.992 7.992 0 0 1-6.505 3.335 7.961 7.961 0 0 1-4.659-1.503 8 8 0 0 1-1.832-11.164l88.583-123.37a8 8 0 0 1 12.996 9.332z"></path></svg>
                    <h1 class="text-white">Garansi 100%<br><span class="pt-0">Uang kembali</span></h1>
                </div>
                <div class="w-full self-center px-4 lg:w-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="justify-self-center" width="80" height="80" viewBox="0 0 200 200" id="money"><path fill="#fff" d="M177.55,99.4H156.73a7.81,7.81,0,0,0-7.35,5.24H143.9a7.82,7.82,0,0,0-7.28,5c-.64,0-1.27,0-1.92,0A51.15,51.15,0,0,0,112,115.5L82.82,130.74l-47.6-28.27a13.63,13.63,0,0,0-16,21.91l51.3,45.53a22.31,22.31,0,0,0,14.74,5.76,20.35,20.35,0,0,0,2.91-.21c7.13-1,14.64-3.15,21.89-5.21,8.93-2.53,18.12-5.11,26.24-5.47a7.84,7.84,0,0,0,7.61,6.05h5.48a7.81,7.81,0,0,0,7.35,5.24h20.82a7.83,7.83,0,0,0,7.82-7.82v-61A7.83,7.83,0,0,0,177.55,99.4Zm-68.63,66.85c-7.13,2-14.49,4.11-21.35,5.08a17.79,17.79,0,0,1-14.29-4.54L22,121.26a9.46,9.46,0,0,1-.31-13.87,9.65,9.65,0,0,1,11.42-1.34l45.4,27-.24.13a10.84,10.84,0,1,0,10.26,19.1L123.37,133a2.08,2.08,0,0,0-2-3.65L86.5,148.59A6.7,6.7,0,0,1,78.15,147a6.67,6.67,0,0,1,2-10.19l33.71-17.64a46.93,46.93,0,0,1,20.88-5.42c.44,0,.87,0,1.3,0v46.83C127.48,161,118.06,163.65,108.92,166.25ZM140.24,163V112.46a3.66,3.66,0,0,1,3.66-3.66h5v57.87h-5A3.67,3.67,0,0,1,140.24,163Zm41,5.24a3.67,3.67,0,0,1-3.66,3.66H156.73a3.66,3.66,0,0,1-3.66-3.66v-61a3.67,3.67,0,0,1,3.66-3.66h20.82a3.67,3.67,0,0,1,3.66,3.66ZM160.8,140a5.57,5.57,0,1,0,5.57,5.57A5.57,5.57,0,0,0,160.8,140Zm0,7a1.4,1.4,0,1,1,1.4-1.4A1.4,1.4,0,0,1,160.8,147Zm0,8.59a5.57,5.57,0,1,0,5.57,5.56A5.56,5.56,0,0,0,160.8,155.54Zm0,7a1.4,1.4,0,1,1,1.4-1.4A1.4,1.4,0,0,1,160.8,162.5ZM135.17,53.21A3.18,3.18,0,0,0,132,50a6.16,6.16,0,0,1-2.26-11.9l.38-.15V36.91a1.5,1.5,0,0,1,3,0v.88l.45.12a6.16,6.16,0,0,1,4.59,6,1.5,1.5,0,1,1-3,0A3.17,3.17,0,1,0,132,47a6.16,6.16,0,0,1,1.57,12.12l-.45.12V60a1.5,1.5,0,0,1-3,0v-.9l-.38-.15a6.13,6.13,0,0,1-3.91-5.73,1.5,1.5,0,0,1,3,0,3.17,3.17,0,1,0,6.34,0Zm-3.17,27a31.78,31.78,0,1,0-31.79-31.78A31.82,31.82,0,0,0,132,80.23Zm0-59.4a27.62,27.62,0,1,1-27.62,27.62A27.65,27.65,0,0,1,132,20.83Zm-16.26,45.3a24.16,24.16,0,0,0,3,2.31l.21.13a23.44,23.44,0,0,0,4.53,2.28c.6.23,1.22.44,1.84.61a24.07,24.07,0,0,0,6.71,1,23.65,23.65,0,0,0,4.62-.45,23.89,23.89,0,0,0,19.47-23.51,23.79,23.79,0,0,0-1-6.67c-.18-.63-.39-1.24-.62-1.84a22.06,22.06,0,0,0-2.23-4.39l-.18-.29a24.17,24.17,0,0,0-2.34-3c-.26-.29-.54-.57-.81-.84a23.82,23.82,0,0,0-8.41-5.39,22.82,22.82,0,0,0-2.3-.74,24.31,24.31,0,0,0-6.25-.82,24,24,0,0,0-23.28,30.17,22.07,22.07,0,0,0,.75,2.3,23.79,23.79,0,0,0,5.42,8.36C115.17,65.61,115.46,65.88,115.74,66.13Zm-3-12.55a19.58,19.58,0,0,1-.68-5.13A19.88,19.88,0,0,1,132,28.66a20.31,20.31,0,0,1,5.17.67c.65.18,1.29.38,1.91.62a19.58,19.58,0,0,1,7,4.46l.67.69a20.09,20.09,0,0,1,1.91,2.44,1.88,1.88,0,0,1,.12.18,19.07,19.07,0,0,1,1.89,3.71c.19.49.36,1,.51,1.51a19.67,19.67,0,0,1,.78,5.51,19.7,19.7,0,0,1-16.1,19.42,20.33,20.33,0,0,1-9.39-.41c-.51-.15-1-.32-1.52-.51A19.84,19.84,0,0,1,121,65,20.75,20.75,0,0,1,118.53,63l-.68-.65a19.64,19.64,0,0,1-4.49-6.91C113.13,54.86,112.92,54.23,112.75,53.58Zm-38,30.88a3.18,3.18,0,0,0-3.17-3.18,6.16,6.16,0,0,1-2.25-11.9l.38-.15V68.16a1.5,1.5,0,0,1,3,0V69l.45.12a6.16,6.16,0,0,1,4.6,6,1.5,1.5,0,0,1-3,0,3.17,3.17,0,1,0-3.17,3.17,6.16,6.16,0,0,1,1.57,12.12l-.45.12v.71a1.5,1.5,0,0,1-3,0v-.9l-.38-.15a6.12,6.12,0,0,1-3.92-5.73,1.5,1.5,0,0,1,3,0,3.17,3.17,0,0,0,6.34,0Zm-3.17,27A31.78,31.78,0,1,0,39.8,79.7,31.81,31.81,0,0,0,71.58,111.48Zm0-59.4A27.62,27.62,0,1,1,44,79.7,27.65,27.65,0,0,1,71.58,52.08ZM55.32,97.38a23.77,23.77,0,0,0,3,2.3l.23.14A23.36,23.36,0,0,0,63,102.1c.6.23,1.22.44,1.84.61a24.07,24.07,0,0,0,6.71,1,23.58,23.58,0,0,0,4.62-.45A23.89,23.89,0,0,0,95.67,79.7,23.73,23.73,0,0,0,94.73,73c-.18-.63-.39-1.24-.62-1.84a23.47,23.47,0,0,0-2.23-4.39l-.18-.29a24,24,0,0,0-2.35-3c-.27-.29-.53-.56-.81-.83a23.68,23.68,0,0,0-8.41-5.39,22,22,0,0,0-2.3-.74A24.11,24.11,0,0,0,47.49,79.7a23.42,23.42,0,0,0,.82,6.21c.21.78.46,1.55.74,2.3a23.81,23.81,0,0,0,5.43,8.37C54.76,96.86,55.05,97.13,55.32,97.38Zm-3-12.55a19.58,19.58,0,0,1-.68-5.13A19.88,19.88,0,0,1,71.58,59.91a20.44,20.44,0,0,1,5.18.67c.65.18,1.28.38,1.9.62a19.58,19.58,0,0,1,7,4.46c.23.23.46.46.67.69a19.83,19.83,0,0,1,2,2.62,20.21,20.21,0,0,1,1.9,3.7c.18.5.35,1,.5,1.52a19.63,19.63,0,0,1,.79,5.51A19.77,19.77,0,0,1,75.4,99.12,20.28,20.28,0,0,1,66,98.71c-.52-.15-1-.32-1.52-.51a19.57,19.57,0,0,1-3.89-2,20.08,20.08,0,0,1-2.5-1.93l-.68-.65a19.78,19.78,0,0,1-4.49-6.91C52.71,86.11,52.51,85.49,52.33,84.83Z" data-name="ICON 09"></path></svg>
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
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Hoodie</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. 1000000</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Hoodie</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. 1000000</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Hoodie</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. 1000000</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Hoodie</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. 1000000</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    <div class="px-4 py-6 lg:w-1/5 xl:w-1/5">
                      <div class="w-full max-w-[250px] bg-white border border-gray-200 rounded-lg shadow ">
                        <img class="p-8 rounded-t-lg" src="{{asset('img')}}/pngegg.png" alt="product image" width="200px" height="200px" />
                        <div class="px-5 pb-5">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900">Hoodie</h5>
                            <div class="flex items-center justify-between py-2">
                                <span class="text-3xl font-bold text-gray-900">Rp. 1000000</span>
                            </div>
                            <a href="#product_overview">
                                <button class="text-base text-white bg-third rounded-lg font-semibold py-1 px-2 hover:opacity-80 hover:shadow-lg transition duration-500">Custom sekarang</button>
                            </a>
                        </div>
                      </div>
                    </div>
                    
                </div>
            </div>
            <div class="w-full px-4 pt-16 text-center">
                <a href="blog.html">
                  <button class="text-base text-white bg-third rounded-full font-semibold py-3 px-8 hover:opacity-80 hover:shadow-lg transition duration-500">Pesan sekarang</button>
                </a>
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