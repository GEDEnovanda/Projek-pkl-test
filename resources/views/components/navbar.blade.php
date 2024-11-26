<nav class="fixed top-0 left-0 w-full z-50 shadow-xl"> <!-- Menambahkan shadow-xl untuk efek timbul -->
  <div x-data="{ isOpen: false }" class="flex items-center justify-between py-0 px-6 lg:px-12 max-h-16 bg-navcol trans" aria-label="Global">
    
    <!-- Logo -->
    <div class="flex-1 ml-14"> <!-- Menambahkan margin kiri pada logo -->
      <a href="#" class="-m-1.5 p-1.5">
        <img class="h-10 w-10" src="{{ asset('img/logoyag.png') }}" alt="Logo">
      </a>
    </div>

    <!-- Menu items -->
    <div class="hidden lg:flex lg:gap-x-10">
      <a href="beranda" class="text-sm font-semibold text-red-900 relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Beranda</a>
      <a href="{{ url('/beranda#Galeri') }}" class="text-sm font-semibold text-primary relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Galeri Kami</a>
      <a href="{{ url('/beranda#berita') }}" class="text-sm font-semibold text-red-900 relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Berita</a>
      <a href="#anggota" class="text-sm font-semibold text-red-900 relative hover:scale-105 hover:text-primary transition duration-200 after:block after:absolute after:left-0 after:right-0 after:bottom-[-4px] after:h-1 after:bg-primary after:scale-x-0 hover:after:scale-x-100 hover:after:transition-transform">Anggota</a>

      <div class="relative" x-data="{ isOpen: false }" @click.away="isOpen = false">
        <button type="button" @click="isOpen = !isOpen" class="flex items-center gap-x-1 text-sm font-semibold text-primary" aria-expanded="false">
          Daftar
          <svg class="h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
        </button>

        <!-- Dropdown menu -->
        <div x-show="isOpen"
             x-transition:enter="transition ease-out duration-100 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="absolute -left-8 top-full mt-3 w-44 flex overflow-hidden bg-white shadow-lg ring-1 ring-gray-900/5 z-10">
          <div class="p-4">
            <!-- Menu Items -->
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" class="block font-semibold text-primary">Donatur</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" class="block font-semibold text-primary">Peserta didik</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" class="block font-semibold text-primary">Pendidik</a>
            </div>
            <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
              <a href="#" class="block font-semibold text-primary">Lembaga</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Login button -->
    <div class="hidden lg:flex lg:flex-1 lg:justify-end mr-14">
      <a href="#" class="block rounded-lg px-5 py-1 text-base font-semibold text-primary border border-primary transition duration-200 transform hover:scale-105 hover:bg-primary hover:text-white">Masuk</a>
    </div>
  </div>
</nav>
{{-- buat kolom search kegiatan/berita dan anggota, ganti peserta didik menjadi anak asuh,pendidik di ganti dengan pengasuh,tambah relawan, daftar donatur bisa individu atau lembaga,berita di per singkat  --}}

{{-- flow donasi:pilih jenis donasi (dana,barang dan jasa) -> isi form (tiap form berbeda), form dana(),form barang(),form jasa(), --}}
{{-- daftar () --}}

{{-- guest=donasi () --}}