<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Backoffice</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white flex flex-col">
      <div class="p-4 text-2xl font-bold border-b border-gray-700">
        Backoffice
      </div>
      <nav class="flex-1 p-4">
        <a href="/Users" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Donatur</a>
        <a href="/Galeris/index" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Galeri</a>
        <a href="/Blogs/index" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Blog</a>
        <a href="{{ route('logout') }}" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    @yield('conten-tabel')

</body>
</html>
