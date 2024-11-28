<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Backoffice</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

  <div class="flex h-screen">
    <!-- Sidebar -->
    <div class="w-64 bg-gray-800 text-white flex flex-col">
      <div class="p-4 text-2xl font-bold border-b border-gray-700">
        Backoffice
      </div>
      <nav class="flex-1 p-4">
        <a href="/Backoffice" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Donatur</a>
        <a href="/" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Galeri</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Settings</a>
        <a href='logout' class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto p-4">
      <div class="card">
          <div class="card-header flex justify-between items-center">
            <span class="text-2xl font-bold mt-3">DONATUR</span>

              <a href="/add/user" class="btn btn-success btn-sm bg-green-500 text-white hover:bg-green-700 px-4 py-2 rounded">ADD New</a>
          </div>
          @if(Session::has('success'))
              <div class="alert alert-success bg-green-100 text-green-800 p-3 rounded mb-4">
                  {{ Session::get('success') }}
              </div>
          @endif
          <div class="overflow-x-auto">
              <table class="min-w-full table-auto border-collapse border border-gray-300 mx-auto mt-5">
                  <thead>
                      <tr class="bg-gray-100">
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">s/n</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">Nama</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">Email</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">No Tlp</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">Registration Date</th>
                          <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700 border-b border-gray-300">Last Update</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if (count($all_Users) > 0)
                        @foreach ($all_Users as $item)
                            <tr class="bg-white hover:bg-gray-50">
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $loop->iteration }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $item->name }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $item->email }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $item->phone_number }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $item->created_at }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">{{ $item->updated_at }}</td>
                                <td class="px-6 py-3 text-sm text-gray-700 border-b border-gray-300">
                                    <div class="flex space-x-2">
                                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded">
                                            Setuju
                                        </button>
                                        <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                            Edit
                                        </button>
                                        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" class="px-6 py-3 text-sm text-gray-700 text-center border-b border-gray-300">No data available</td>
                        </tr>
                    @endif
                </tbody>
                
              </table>
          </div>
      </div>
  </div>
  
  </div>

</body>
</html>
