<nav x-data="{ scrolled: false }" @scroll.window="scrolled = window.scrollY > 50" class="fixed top-0 left-0 w-full z-50 transition-all">
  <div :class="{'bg-white shadow-lg': scrolled, 'bg-transparent': !scrolled}" class="flex items-center justify-between py-0 px-6 lg:px-12 max-h-16 transition-all" aria-label="Global">

    <!-- Logo -->
    <div class="flex-1 ml-14">
      <a href="#" class="-m-1.5 p-1.5">
        <img class="h-10 w-10" src="{{ asset('img/logoyag.png') }}" alt="Logo">
      </a>
    </div>

    <!-- Kolom Pencarian -->
    <div class="hidden lg:flex lg:gap-x-10 mr-6">
      <input type="text" placeholder="Cari kegiatan/berita" class="px-4 py-2 rounded-full bg-white text-black border border-gray-300 shadow-md focus:outline-none focus:ring-2 focus:ring-primary w-64" />
    </div>

    <!-- Menu items -->
    <div class="hidden lg:flex lg:gap-x-10">
      <a href="beranda#" :class="{'text-white': !scrolled, 'text-red-900': scrolled}" class="text-sm font-semibold relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Beranda</a>
      <a href="{{ url('#Galeri') }}" :class="{'text-white': !scrolled, 'text-primary': scrolled}" class="text-sm font-semibold relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Galeri Kami</a>
      <a href="{{ url('#berita') }}" :class="{'text-white': !scrolled, 'text-red-900': scrolled}" class="text-sm font-semibold relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Berita</a>
      <a href="#anggota" :class="{'text-white': !scrolled, 'text-red-900': scrolled}" class="text-sm font-semibold relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Anggota</a>

      <!-- Dropdown Menu -->
      <div class="relative" x-data="{ isOpen: false }" @click.away="isOpen = false">
        <button type="button" @click="isOpen = !isOpen" :class="{'text-white': !scrolled, 'text-primary': scrolled}" class="flex items-center gap-x-1 text-sm font-semibold" aria-expanded="false">
          Daftar
          <svg class="h-5 w-5 flex-none" :class="{'text-white': !scrolled, 'text-primary': scrolled}" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>

        <!-- Dropdown menu items -->
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-100 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="absolute -left-8 top-full mt-3 w-44 flex overflow-hidden bg-white shadow-lg ring-1 ring-gray-900/5 z-10">
          <div class="p-4">
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" :class="{'text-primary': scrolled, 'text-black': !scrolled}" class="block font-semibold">Donatur</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" :class="{'text-primary': scrolled, 'text-black': !scrolled}" class="block font-semibold">Anak Asuh</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" :class="{'text-primary': scrolled, 'text-black': !scrolled}" class="block font-semibold">Pengasuh</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" :class="{'text-primary': scrolled, 'text-black': !scrolled}" class="block font-semibold">Relawan</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" :class="{'text-primary': scrolled, 'text-black': !scrolled}" class="block font-semibold">Donasi (Individu atau Lembaga)</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login button -->
    <div class="hidden lg:flex lg:flex-1 lg:justify-end mr-14">
      <a href="#" :class="{'border-white text-white': !scrolled, 'border-primary text-primary': scrolled}" class="block rounded-lg px-5 py-1 text-base font-semibold border transition duration-200 transform hover:scale-105 hover:bg-primary hover:text-white">Masuk</a>
    </div>
  </div>
</nav>
