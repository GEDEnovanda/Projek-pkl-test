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
  <x-navbar></x-navbar>
  {{-- hero section --}}
  <section id="beranda" style="background-image:url('{{ asset('img/bg1.png') }}')" class="rounded-b-md relative isolate px-6 pt-14 lg:px-8 bg-no-repeat bg-cover min-h-screen">
   
    <div class="mx-auto py-32 sm:py-48 lg:py-56 mt-20">
      <div class="text-center">
        <h1 class="text-balance text-6xl   font-semibold text-white ">YAYASAN GUNA WIDYA PRAMESTI</h1>
        <div class="flex flex-row justify-center space-x-7 mt-11">
          <div class="mt-10 w-56">
            <a href="#" class="rounded-md bg-white px-7 py-4 text-base font-semibold text-primary shadow-sm hover:-translate-y-1 transition-transform duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 block text-center">DONASI</a>
        </div>
        
          <div class="mt-10 w-56">
            <a href="#" class="rounded-md bg-white bg-opacity-65 px-7 py-4 text-base font-semibold text-primary shadow-sm hover:bg-opacity-100 hover:-translate-y-1 duration-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 block text-center">Lebih Lanjut -></a>
          </div>
        </div>
        
      </div>
    </div>
  </section>

  {{-- halaman tentang --}}
  <section id="About">
        <div class="overflow-hidden bg-white py-24 sm:py-32">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
              <div class="lg:pr-8 lg:pt-4">
                <div class="lg:max-w-lg">
                  <h2 class="text-base/7 font-semibold text-shadow-sm text-primary">Yaguwipa</h2>
                  <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-shadow-sm text-gray-900 sm:text-5xl">Tentang Kami</p>
                  <p class="mt-2 text-lg/8 text-gray-600">Menjadi lembaga sosial yang mampu menghasilkan riset dan menyelenggarakan pendidikan sesuai kebutuhan masyarakat dan industri.</p>
                  <dl class="mt-10 max-w-xl space-y-8 text-base/7 text-gray-600 lg:max-w-none">
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
                    <div class="relative pl-9">
                      <dt class="inline font-semibold text-gray-900">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                          <path fill-rule="evenodd" d="M8.161 2.58a1.875 1.875 0 0 1 1.678 0l4.993 2.498c.106.052.23.052.336 0l3.869-1.935A1.875 1.875 0 0 1 21.75 4.82v12.485c0 .71-.401 1.36-1.037 1.677l-4.875 2.437a1.875 1.875 0 0 1-1.676 0l-4.994-2.497a.375.375 0 0 0-.336 0l-3.868 1.935A1.875 1.875 0 0 1 2.25 19.18V6.695c0-.71.401-1.36 1.036-1.677l4.875-2.437ZM9 6a.75.75 0 0 1 .75.75V15a.75.75 0 0 1-1.5 0V6.75A.75.75 0 0 1 9 6Zm6.75 3a.75.75 0 0 0-1.5 0v8.25a.75.75 0 0 0 1.5 0V9Z" clip-rule="evenodd" />
                        </svg>
                        Misi Kami.
                      </dt>
                      <dd class="inline">Mengembangkan riset, pendidikan, dan pelatihan berbasis data dan teknologi informasi untuk memenuhi kebutuhan industri dan masyarakat, serta meningkatkan kualitas SDM melalui kegiatan yang mencakup aspek sosial, kemanusiaan, dan keagamaan.</dd>
                    </div>
                    <div class="relative pl-9">
                      <dt class="inline font-semibold text-gray-900">
                        <svg class="absolute left-1 top-1 h-5 w-5 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                          <path fill-rule="evenodd" d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd" />
                        </svg>
                        Tujuan.
                      </dt>
                      <dd class="inline">Mendirikan lembaga riset, pendidikan, pelatihan, dan badan amal untuk pengembangan SDM, pemberian beasiswa, serta penyelenggaraan program riset dan kegiatan akademik guna meningkatkan kualitas dan solusi bagi masyarakat.</dd>
                    </div>
                  </dl>
                </div>
                {{-- Gambar layout --}}
              </div>
                <div class="relative ml-28 ">
                  <div class="max-w-64 h-auto  flex flex-col items-center absolute top-0 left-0 z-10 drop-shadow-md">
                      <img class="h-auto max-w-full" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                  </div>
                  <div class="max-w-80 h-96  flex flex-col items-center relative ml-52 z-20 mt-20 drop-shadow-md">
                    <img class="h-auto max-w-full" src="{{ asset('img/anakair.jpg') }}" alt="">
                  </div>
                  <div class="max-w-60 h-auto  flex flex-col items-center absolute top-0 mb-60 mt-60 ml-14 left-0 z-10 drop-shadow-md">
                    <img class="h-auto max-w-full" src="{{ asset('img/anak belajar.jpg') }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image:url('{{ asset('img/2.png') }}')" class="relative isolate px-6 pt-14 lg:px-8 bg-no-repeat bg-cover min-h-screen flex flex-col items-center justify-center">

          <!-- Container untuk h1 di tengah -->
          <div class="bg-primary h-16 w-72 flex items-center rounded-md justify-center">
              <h1 class="text-white text-xl font-semibold  text-center px-7 py-4">Galeri Kami</h1>
          </div>
      
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


  <section id="anggota" class="pt-16 bg-white">
    <div  class="relative min-h-screen">
      <!-- Background bagian atas dengan warna biru -->
      <div class="h-1/2 mb bg-white">
        <p class="ml-24 mt-10 text-shadow-sm text-primary text-base/7 font-bold">Anggota Kami</p>
        <h1 class="ml-24 pt-2 text-gray-900 font-semibold text-shadow-sm text-5xl">Anggota Yayasan Guna Widya Pramesti</h1>
        <p class="ml-24 pt-2 text-gray-900 max-w-3xl">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste asperiores, enim quis commodi, iusto quibusdam perspiciatis dolorem, corrupti quas dolores alias ullam sit eaque eveniet esse assumenda minus accusamus provident!</p>
      </div>
      
      <!-- Background bagian bawah dengan warna ungu dan lengkungan di atas -->
<div class="h-1/2 bg-primary rounded-t-[50px]"></div>

  
      <!-- Div yang ditumpuk di tengah background -->
      <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex space-x-4">

        <div class="bg-white p-6 w-64 h-96 rounded-lg shadow-lg group relative overflow-hidden transition-all duration-300 ease-in-out transform hover:scale-105 hover:bg-opacity-70" style="background-image:url('{{ asset('img/gambaranak.jpg') }}'); background-size: cover; background-position: center">
          <h2 class="text-2xl font-bold text-white mb-4">Donatur</h2>
      
          <!-- Centered overlay on hover -->
          <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
             <a href="#" class="text-white text-xl font-bold">lihat semua</a>
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
  
</body>
</html>