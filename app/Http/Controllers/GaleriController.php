<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;

class GaleriController extends Controller
{
    /**
     * index
     *
     * @return void
     */

     public function showImage($filename)
     {
         $path = storage_path('app/private/public/Galeris/' . $filename);
     
         if (!file_exists($path)) {
             abort(404); // Jika file tidak ditemukan, tampilkan halaman 404
         }
     
         $file = file_get_contents($path);
         $type = mime_content_type($path);
     
         return response($file, 200)->header("Content-Type", $type);
     }


    public function index() : View
    {
        // Ambil semua data galeri, dengan pagination
        $Galeris = Galeri::latest()->paginate(10);

        // Iterasi melalui setiap galeri dan format tanggal
        foreach ($Galeris as $Galeri) {
            // Format tanggal menggunakan Carbon
            $Galeri->formatted_date = CarbonCarbon::parse($Galeri->tanggal)->format('d-m-Y');
        }

        // Render view dengan data galeri
        return view('Galeris.index', compact('Galeris'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('Galeris.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function show($id)
    {
        // Misalnya mengambil data galeri berdasarkan ID
        $Galeri = Galeri::findOrFail($id); // Pastikan Anda memiliki model Galeri
        return view('Galeris.edit', compact('Galeri'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Validasi form input
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'tanggal'       => 'required|date',  // Ubah validasi tanggal ke 'date'
        ]);

        // Upload image
        $image = $request->file('image');
        $image->storeAs('public/Galeris', $image->hashName());

        // Create Galeri
        Galeri::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'tanggal'       => CarbonCarbon::parse($request->tanggal)->format('Y-m-d'),  // Format tanggal sebelum disimpan
        ]);

        // Redirect to index
        return redirect()->route('Galeris.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
{
    // Validasi form tanpa atribut yang tidak ada
    $request->validate([
        'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
        'title'         => 'required|min:5',
        'description'   => 'required|min:10',
        'tanggal'       => 'required|date', // Menambahkan validasi tanggal
    ]);

    // Ambil galeri berdasarkan ID
    $Galeri = Galeri::findOrFail($id);

    // Periksa apakah ada gambar yang diunggah
    if ($request->hasFile('image')) {
        // Unggah gambar baru
        $image = $request->file('image');
        $image->storeAs('public/galeris', $image->hashName());

        // Hapus gambar lama
        Storage::delete('public/galeris/'.$Galeri->image);

        // Update Galeri dengan gambar baru
        $Galeri->update([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'tanggal'       => CarbonCarbon::parse($request->tanggal)->format('Y-m-d'), // Format tanggal
        ]);
    } else {
        // Update Galeri tanpa gambar
        $Galeri->update([
            'title'         => $request->title,
            'description'   => $request->description,
            'tanggal'       => CarbonCarbon::parse($request->tanggal)->format('Y-m-d'), // Format tanggal
        ]);
    }

    // Redirect ke halaman index
    return redirect()->route('Galeris.index')->with(['success' => 'Data Berhasil Diubah!']);
}

}
