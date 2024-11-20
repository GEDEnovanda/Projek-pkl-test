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
  <section  class="bg-gray-50 py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center text-gray-900 mb-8">Profil Anggota</h2>
      
      <!-- Grid untuk Menampilkan Anggota -->
      <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        
        <!-- Anggota 1 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 1">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 1</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 2 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 2">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 2</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 3 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 3">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 3</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 4 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 4">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 4</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 5 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 5">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 5</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 6 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 6">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 6</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 7 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 7">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 7</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 8 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 8">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 8</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Curabitur blandit tempus porttitor. Cras mattis consectetur purus sit amet fermentum.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 9 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 9">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 9</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
  
        <!-- Anggota 10 -->
        <div class="bg-white rounded-lg shadow-lg overflow-hidden">
          <img class="w-full h-56 object-cover" src="https://via.placeholder.com/400x400" alt="Anggota 10">
          <div class="p-6 text-center">
            <h3 class="text-lg font-semibold text-gray-900">Nama Anggota 10</h3>
            <p class="text-gray-600">Posisi Anggota</p>
            <p class="mt-2 text-gray-500">Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
            <a href="#" class="mt-4 text-primary font-semibold hover:text-primary-dark">Lihat Profil &rarr;</a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  
  
</body>
</html>