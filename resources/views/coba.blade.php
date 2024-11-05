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
  <section style="background-image:url('{{ asset('img/bghero2.jpg') }}')" class="relative isolate px-6 pt-14 lg:px-8 bg-no-repeat bg-cover min-h-screen">
    <div class="absolute inset-0 bg-black opacity-50 -z-10 " aria-hidden="true">
    </div>
    <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56 mt-20">
      <div class="text-center">
        <h1 class="text-balance text-4xl font-semibold tracking-tight text-white sm:text-4xl  ">YAYASAN GUNA WIDYA PRAMESTI</h1>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="#" class="rounded-md bg-primary px-7 py-4 text-base font-semibold text-white shadow-sm hover:bg-opacity-90 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 ">DONASI</a>
        </div>
      </div>
    </div>
    {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
      <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div> --}}
  </div>
  </section>
  <section id="About">
    <div class="overflow-hidden bg-white py-24 sm:py-32">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-4xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
          <div class="lg:pr-8 lg:pt-4 w-lvw">
            <div class="">
              <p class="mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Tentang Kami</p>
              <h2 class="text-2xl pt-2 font-semibold text-primary ">Yayasan Guna Widya Pramesti</h2>

              <p class=" max-w-lg  text-gray-600 drop-shadow-lg ">Yayasan ini didirikan oleh tokoh muda Indonesia sebagai bentuk kepedulian sosial terhadap peningkatan kapasitas riset dan kualitas sumber daya manusia Indonesia. Untuk mencapai visi, misi dan tujuannya, Yayasan Guna Widya Paramesthi mendirikan Denpasar Institute sebagai Lembaga Riset & Pengembangan SDM.</p>
              <dl class="">
                <div class="relative ">
                  <div class="flex gap-4 pt-16 items-center">
                    <div class="bg-black  bg-opacity-75 w-72 max-h-64 p-8 flex flex-col items-center ">
                      <h1 class="bg-primary w-28 h-9 pt-0.5   rounded-md text-center  text-white font-semibold  text-lg">Misi Kami</h1>
                      <p class="text-white  text-sm pt-5 drop-shadow-sm">Menjadi lembaga sosial yang mampu menghasilkan riset dan menyelenggarakan pendidikan sesuai kebutuhan masyarakat dan industri. </p>
                    </div>
                    <div class="bg-black bg-opacity-75 w-72 max-h-96 p-8 flex flex-col items-center ">
                      <h1 class="bg-primary w-28 h-9 pt-0.5 rounded-md text-center text-white font-semibold  text-lg">Misi Kami</h1>
                      <p class="text-white  text-sm  pt-5">Mengembangkan riset, pendidikan, dan pelatihan berbasis data dan teknologi informasi untuk memenuhi kebutuhan industri dan masyarakat, serta meningkatkan kualitas SDM melalui kegiatan yang mencakup aspek sosial, kemanusiaan, dan keagamaan.</p>
                    </div>
              </dl>
            </div>
          </div>
            <div class="relative ml-28 ">
              <!-- Kolom Gambar dengan posisi absolut -->
              <div class="max-w-64 h-auto  flex flex-col items-center absolute top-0 left-0 z-10 drop-shadow-md">
                  <img class="h-auto max-w-full" src="{{ asset('img/gambaranak.jpg') }}" alt="">
              </div>
          
              <!-- Kolom Teks yang akan tumpang tindih di bawah gambar -->
              <div class="max-w-80 h-96  flex flex-col items-center relative ml-52 z-20 mt-20 drop-shadow-md">
                <img class="h-auto max-w-full" src="{{ asset('img/gambaranak.jpg') }}" alt="">
                  
              </div>
              <!-- Kolom Gambar dengan posisi absolut -->
              <div class="max-w-60 h-auto  flex flex-col items-center absolute top-0 mb-60 mt-60 ml-14 left-0 z-10 drop-shadow-md">
                <img class="h-auto max-w-full" src="{{ asset('img/gambaranak.jpg') }}" alt="">
            </div>
          </div>
              
          <dl class="relative">
            <div class="relative ">
              <div class="flex gap-4 pt-16 items-center">
                <div class="bg-black  bg-opacity-75 w-72 max-h-64 p-8 flex flex-col items-center ">
                  <h1 class="bg-primary w-28 h-9 pt-0.5   rounded-md text-center  text-white font-semibold  text-lg">Misi Kami</h1>
                  <p class="text-white  text-sm pt-5 drop-shadow-sm">Menjadi lembaga sosial yang mampu menghasilkan riset dan menyelenggarakan pendidikan sesuai kebutuhan masyarakat dan industri. </p>
                </div>
                <div class="bg-black bg-opacity-75 w-72 max-h-96 p-8 flex flex-col items-center ">
                  <h1 class="bg-primary w-28 h-9 pt-0.5 rounded-md text-center text-white font-semibold  text-lg">Misi Kami</h1>
                  <p class="text-white  text-sm  pt-5">Mengembangkan riset, pendidikan, dan pelatihan berbasis data dan teknologi informasi untuk memenuhi kebutuhan industri dan masyarakat, serta meningkatkan kualitas SDM melalui kegiatan yang mencakup aspek sosial, kemanusiaan, dan keagamaan.</p>
                </div>
          </dl>
          
          
        
        </div>
      </div>
    </div>
    
  </section>
  
</body>
</html>