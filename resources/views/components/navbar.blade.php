<nav class="fixed top-0 left-0 w-full z-50">
    <div  x-data="{ isOpen: false }" class=" flex items-center justify-between py-4 lg:px-3 bg-navcol" aria-label="Global">
      
      <div class="flex lg:flex-1 ml-10">
        <a href="#" class="-m-1.5 p-1.5">
          <img class="h-10 w-auto" src="{{ asset('img/logoyag.png') }}" alt="">
        </a>
      </div>
  
      <div class="flex lg:hidden">
        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>
      <div class="hidden lg:flex lg:gap-x-10 mr-">
        <a href="#" class="text-sm/8 font-semibold text-red-900">Beranda</a>
        <a href="#About" class="text-sm/8 font-semibold text-primary ">Tentang kami</a>
        <div class="relative">
          <button type="button"  @click="isOpen = !isOpen" class="flex items-center gap-x-1 text-sm/8 font-semibold text-primary" aria-expanded="false">
            Daftar
            <svg class="h-5 w-5 flex-none text-primary" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </button>
  
          <!--
            'Product' flyout menu, show/hide based on flyout menu state.
  
            Entering: "transition ease-out duration-200"
              From: "opacity-0 translate-y-1"
              To: "opacity-100 translate-y-0"
            Leaving: "transition ease-in duration-150"
              From: "opacity-100 translate-y-0"
              To: "opacity-0 translate-y-1"
          -->
          <div  x-show="isOpen"
          x-transition:enter="transition ease-out duration-100 transform"
          x-transition:enter-start="opacity-0 scale-95"
          x-transition:enter-end="opacity-100 scale-100"
          x-transition:leave="transition ease-in duration-75 transform"
          x-transition:leave-start="opacity-100 scale-100"
          x-transition:leave-end="opacity-0 scale-95"
          class="absolute -left-8 top-full  mt-3  w-44 flex  overflow-hidden  bg-white shadow-lg ring-1 ring-gray-900/5 z-10">
            <div class="p-4">
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6  hover:bg-gray-50">
                <div class="flex-auto">
                  <a href="#" class="block font-semibold text-primary">
                    Donatur
                    <span class="absolute inset-0"></span>
                  </a>
                </div>
              </div>
  
              <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                  <div class="flex-auto">
                    <a href="#" class="block font-semibold text-primary">
                      Peserta didik
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
  
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                  <div class="flex-auto">
                    <a href="#" class="block font-semibold text-primary">
                      Pendidik
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
  
                <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm/6 hover:bg-gray-50">
                  <div class="flex-auto">
                    <a href="#" class="block font-semibold text-primary">
                      Lembaga
                      <span class="absolute inset-0"></span>
                    </a>
                  </div>
                </div>
  
             
            </div>
           
          </div>
        </div>
        <a href="#" class="text-sm/8 font-semibold text-red-900">Anggota</a>
        <a href="#" class="text-sm/8 font-semibold text-red-900">Lembaga</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end mr-14">
        <a href="#" class="block rounded-lg px-5 py-1 text-base/7 font-semibold text-white hover:bg-opacity-90 bg-red-900">Log in</a>
      </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-10"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
          </a>
          <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <div class="-mx-3">
                <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pl-3 pr-3.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50" aria-controls="disclosure-1" aria-expanded="false">
                  Product
                  <!--
                    Expand/collapse icon, toggle classes based on menu open state.
  
                    Open: "rotate-180", Closed: ""
                  -->
                  <svg class="h-5 w-5 flex-none" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                  </svg>
                </button>
                <!-- 'Product' sub-menu, show/hide based on menu state. -->
                <div class="mt-2 space-y-2" id="disclosure-1">
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Analytics</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Engagement</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Security</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Integrations</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Automations</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Watch demo</a>
                  <a href="#" class="block rounded-lg py-2 pl-6 pr-3 text-sm/7 font-semibold text-gray-900 hover:bg-gray-50">Contact sales</a>
                </div>
              </div>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Loloo</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>