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
        <a href="/Users" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Donatur</a>
        <a href="/Galeris/back-galeri" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Galeri</a>
        <a href="#" class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Settings</a>
        <a href='logout' class="block py-2 px-4 rounded hover:bg-gray-700 text-xl font-medium">Logout</a>
      </nav>
    </div>

    <!-- Main Content -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data BackOffice</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="" class="btn btn-md btn-success mb-3">ADD Galeri</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">IMAGE</th>
                                    <th scope="col">TITLE</th>
                                    <th scope="col">DESKRIPSI</th>
                                    <th scope="col">TANGGAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($allGalleries as $Galeri)
                                    <tr>
                                        <td class="text-center">
                                            <img src="{{ route('Galeris.image', $Galeri->image) }}" class="rounded" style="width: 150px">
                                        </td>
                                        <td>{{ $Galeri->title }}</td>
                                        <td>{{ strip_tags($Galeri->description) }}</td>
                                        <td>{{ $Galeri->formatted_date }}</td>
                                        <td class="text-center">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('Galeris.destroy', $Galeri->id) }}" method="POST">
                                                <a href="{{ route('Galeris.show', $Galeri->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('Galeris.edit', $Galeri->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Galeris belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $allGalleries->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif

    </script>
  
  </div>

</body>
</html>
