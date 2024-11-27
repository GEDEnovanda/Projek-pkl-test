<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Halaman Baru</title>

    
</head>
<body class="h-full">
  <nav class="fixed top-0 left-0 w-full z-50 shadow-xl bg-transparent">
    <x-navbar></x-navbar>
  </nav>
  
 
  {{-- hero section --}}
  <section 
  id="hero" 
  style="background-image: url('{{ asset('img/background.jpg') }}');" 
  class="relative isolate px-6 pt-14 lg:px-8 bg-no-repeat bg-cover min-h-[85vh] flex flex-col justify-center items-start rounded-b-md"
>
  <!-- Overlay gelap -->
  <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

  <div class="text-left pl-14 mb-10 z-10"> <!-- Padding kiri dikurangi -->
    <h1 class="text-6xl font-semibold text-white leading-tight max-w-4xl">
      YAYASAN 
    </h1>
    <h1 class="text-6xl font-semibold text-white leading-tight max-w-4xl">
       GUNA WIDYA PRAMESTI
    </h1>
    <div class="flex flex-row space-x-7 mt-11">
      <div class="w-56 ">
        <a href="{{ url('/donation-form') }}" class="rounded-md bg-primary  px-7 py-4 text-base font-semibold text-white shadow-sm hover:-translate-y-1 transition-transform duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 block text-center">
          DONASI
        </a>
      </div>
    
    </div>
  </div>

  <div class="absolute right-[100px] rounded-md items-center bottom-[-100px] z-10 bg-white px-9 py-6 drop-shadow-md h-96 w-1/3">
    <h1 class="text-center mt-10 text-black text-3xl font-semibold">Tentang Yayasan Kami </h1>
    <p class="flex justify-center items-center  mt-6 text-gray-700  ">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem perferendis tempora est accusantium libero unde numquam, eius illo autem. Aliquid expedita veritatis voluptate quos sequi incidunt, blanditiis nihil corporis ipsam!
    </p>
    <div class="w-56 mt-9 ">
      <a href="#" class="rounded-md bg-primary  px-7 py-4 text-base font-semibold text-white shadow-sm hover:bg-black  duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 block text-center">
        Lebih Lanjut →
      </a>
    </div>
    <div class="w-full bg-primary h-1 mt-9"></div>
  </div>
  

</section>
<section>
  <div class="overflow-hidden   py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
        
        <!-- Div untuk Visi Kami dengan background putih dan tulisan abu-abu -->
        <div class="lg:pr-8 lg:pt-4 bg-white p-6 rounded-md shadow-lg">
          <div class="lg:max-w-lg">
            <dl class="mt-10 max-w-xl space-y-8 text-base text-gray-700 lg:max-w-none">
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    <path fill-rule="evenodd" d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 0 1 0-1.113ZM17.25 12a5.25 5.25 0 1 1-10.5 0 5.25 5.25 0 0 1 10.5 0Z" clip-rule="evenodd" />
                  </svg>
                  Visi Kami.  
                </dt>
                <dd class="inline">Menjadi lembaga sosial yang mampu menghasilkan riset dan menyelenggarakan pendidikan sesuai kebutuhan masyarakat dan industri.</dd>
              </div>
            </dl>
          </div>
        </div>
  
        <!-- Div untuk Misi Kami dengan background putih dan tulisan abu-abu -->
        <div class="lg:pl-8 lg:pt-4 bg-white p-6 rounded-md shadow-lg">
          <div class="lg:max-w-lg">
            <dl class="mt-10 max-w-xl space-y-8 text-base text-gray-700 lg:max-w-none">
              <div class="relative pl-9">
                <dt class="inline font-semibold text-gray-900">
                  <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
                  </svg>
                  Misi Kami.
                </dt>
                <dd class="inline">Mengembangkan riset, pendidikan, dan pelatihan berbasis data dan teknologi informasi untuk memenuhi kebutuhan industri dan masyarakat, serta meningkatkan kualitas SDM melalui kegiatan yang mencakup aspek sosial, kemanusiaan, dan keagamaan.</dd>
              </div>
            </dl>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
</section>


  <section  id="Galeri">
        <div class="h-10 min-w-full   bg-no-repeat bg-fixed bg-cover" style="background-image:url('{{ asset('img/gambaranak.jpg') }}')"></div>
          <div  class="relative isolate  px-6 pt-14  lg:px-8 bg-no-repeat bg-cover min-h-screen flex flex-col items-center justify-center">
            <h1 class="text-primary text-3xl font-bold  text-center px-7 py-4">Galeri Kami</h1>
            <h2 class="inline font-semibold text-gray-900 " >Galeri Kegiatan Kami Dalam Yayasan Guna Widya Pramesti</h2>

            <!-- Galeri -->
            <div class="flex flex-col items-center justify-center min-h-screen pb-40">
                <!-- ini yang pertama -->
                <div class="flex gap-2 flex-wrap justify-center">
                    <div class="relative group">
                        <img class="w-40 h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-md font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-72 max-h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xl font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-40 h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-md font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-72 max-h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xl font-bold">Selengkapnya</span>
                        </div>
                    </div>
                </div>
        
                <!-- ini yang kedua -->
                <div class="flex gap-2 flex-wrap justify-center ">
                    <div class="relative group">
                        <img class="w-60 max-h-36 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xl font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-36 h-36 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-md font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-60 max-h-36 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-xl font-bold">Selengkapnya</span>
                        </div>
                    </div>
        
                    <div class="relative group">
                        <img class="w-36 h-36 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="text-md font-bold">Selengkapnya</span>
                        </div>
                    </div>
                </div>

                {{-- ini yang ketiga --}}
                <div class="flex gap-2 flex-wrap justify-center">
                  <div class="relative group">
                      <img class="w-40 h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                          <span class="text-md font-bold">Selengkapnya</span>
                      </div>
                  </div>

                  <div class="relative group">
                      <img class="w-72 max-h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                          <span class="text-xl font-bold">Selengkapnya</span>
                      </div>
                  </div>

                  <div class="relative group">
                      <img class="w-40 h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                          <span class="text-md font-bold">Selengkapnya</span>
                      </div>
                  </div>

                  <div class="relative group">
                      <img class="w-72 max-h-40 object-cover transform transition-transform duration-300 group-hover:scale-105 group-hover:brightness-75" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                          <span class="text-xl font-bold">Selengkapnya</span>
                      </div>
                  </div>
                </div>
          </div>
      </div>
  </section>

  <div class="h-10 min-w-full bg-primary bg-no-repeat bg-fixed bg-cover" style="background-image:url('{{ asset('img/gambaranak.jpg') }}')"></div>
  
  <section id="berita" class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-3xl font-bold  text-black mb-2">Berita dan Acara Terbaru</h2>
    <div class="w-96  bg-primary h-1 mb-10"></div>
      
  
      <!-- Kontainer dengan scroll horizontal tanpa scrollbar -->
      <div class="overflow-x-auto scroll-smooth no-scrollbar">
        <div class="flex gap-6 w-[calc(100vw-4rem)] sm:w-[calc(100vw-8rem)] lg:w-[calc(3*21rem)]">
          <!-- News 1 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 1">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 1</h3>
              <p class="mt-2 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia bibendum nulla sed consectetur.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>
  
          <!-- News 2 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 2">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 2</h3>
              <p class="mt-2 text-gray-600">Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>
  
          <!-- News 3 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 3">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 3</h3>
              <p class="mt-2 text-gray-600">Nullam id dolor id nibh ultricies vehicula ut id elit. Donec id elit non mi porta gravida at eget metus.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>
  
          <!-- News 4 -->
          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 4">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 4</h3>
              <p class="mt-2 text-gray-600">Aliquam erat volutpat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 4">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 4</h3>
              <p class="mt-2 text-gray-600">Aliquam erat volutpat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 4">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 4</h3>
              <p class="mt-2 text-gray-600">Aliquam erat volutpat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 4">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 4</h3>
              <p class="mt-2 text-gray-600">Aliquam erat volutpat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>

          <div class="bg-white rounded-lg shadow-lg overflow-hidden w-80 flex-shrink-0">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x300" alt="Event 4">
            <div class="p-6">
              <h3 class="text-lg font-semibold text-gray-900">Event 4</h3>
              <p class="mt-2 text-gray-600">Aliquam erat volutpat. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Selengkapnya &rarr;</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>
  
  <style>
  /* Hilangkan scrollbar */
  .no-scrollbar::-webkit-scrollbar {
    display: none; /* Untuk browser berbasis WebKit */
  }
  .no-scrollbar {
    -ms-overflow-style: none; /* Untuk Internet Explorer */
    scrollbar-width: none;    /* Untuk Firefox */
  }
  </style>
  
  

  

  <section id="anggota" class="pt-16 bg-white">
    <div  class="relative min-h-screen">

      <div class="h-1/2 mb bg-white">
        <p class="ml-24 mt-10 text-shadow-sm text-primary text-base/7 font-bold">Anggota Kami</p>
        <h1 class="ml-24 pt-2 text-gray-900 font-semibold text-shadow-sm text-5xl">Anggota Yayasan Guna Widya Pramesti</h1>
        <p class="ml-24 pt-2 text-gray-900 max-w-3xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste asperiores, enim quis commodi, iusto quibusdam perspiciatis dolorem, corrupti quas dolores alias ullam sit eaque eveniet esse assumenda minus accusamus provident!</p>
      </div>

      <div class="h-1/2 bg-primary rounded-t-[50px] shadow-xl p-4"></div>

  
      <!-- Div yang ditumpuk di tengah background -->
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex space-x-4">

        <div class="bg-white p-6 w-64 h-96 rounded-lg shadow-lg group relative overflow-hidden transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-opacity-70" style="background-image:url('{{ asset('img/gambaranak.jpg') }}'); background-size: cover; background-position: center">
          <h2 class="text-2xl font-bold text-white mb-4">Donatur</h2>
      
          <!-- Centered overlay on hover -->
          <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
             <a href="{{ route('coba') }}" class="text-white text-xl font-bold">lihat semua</a>
          </div>
      </div>
      
      <div class="bg-white p-6 w-64 h-96 rounded-lg shadow-lg group relative overflow-hidden transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-opacity-70" style="background-image:url('{{ asset('img/gambaranak.jpg') }}'); background-size: cover; background-position: center">
        <h2 class="text-2xl font-bold text-white mb-4">Pendidik</h2>
    
        <!-- Centered overlay on hover -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
           <a href="#" class="text-white text-xl font-bold">lihat semua</a>
        </div>
    </div>
    <div class="bg-white p-6 w-64 h-96 rounded-lg shadow-lg group relative overflow-hidden transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-opacity-70" style="background-image:url('{{ asset('img/gambaranak.jpg') }}'); background-size: cover; background-position: center">
      <h2 class="text-2xl font-bold text-white mb-4">Peserta didik</h2>
  
      <!-- Centered overlay on hover -->
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
         <a href="#" class="text-white text-xl font-bold">lihat semua</a>
      </div>
    </div>
    <div class="bg-white p-6 w-64 h-96 rounded-lg shadow-lg group relative overflow-hidden transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-opacity-70" style="background-image:url('{{ asset('img/gambaranak.jpg') }}'); background-size: cover; background-position: center">
      <h2 class="text-2xl font-bold text-white mb-4">Lembaga</h2>

      <!-- Centered overlay on hover -->
      <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
        <a href="#" class="text-white text-xl font-bold">lihat semua</a>
      </div>
    </div>
    </div>
   </div>
  </section>
  
  <section>
    
  </section>
  
  <script>
    

  </script>
  
</body>
</html>