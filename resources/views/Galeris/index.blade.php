@extends('Template.index-side')
@section('conten-tabel')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('Galeris.create') }}" class="btn btn-md btn-success mb-3">ADD Galeri</a>
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
                                @forelse ($Galeris as $Galeri)
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
                                                <a href="{{ route('Galeris.update', $Galeri->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                        {{ $Galeris->links() }}
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
@endsection