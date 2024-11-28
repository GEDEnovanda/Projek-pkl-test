<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BlogController extends Controller
{
     /**
     * index
     *
     * @return void
     */

     public function showImage($filename)
     {
         $path = storage_path('app/private/public/Blogs/' . $filename);
     
         if (!file_exists($path)) {
             abort(404); // Jika file tidak ditemukan, tampilkan halaman 404
         }
     
         $file = file_get_contents($path);
         $type = mime_content_type($path);
     
         return response($file, 200)->header("Content-Type", $type);
     }


    public function index() : View
    {
        // Ambil semua data Blog, dengan pagination
        $Blogs = Blog::latest()->paginate(10);

        // Iterasi melalui setiap Blog dan format tanggal
        foreach ($Blogs as $Blog) {
            // Format tanggal menggunakan Carbon
            $Blog->formatted_date = CarbonCarbon::parse($Blog->tanggal)->format('d-m-Y');
        }

        // Render view dengan data Blog
        return view('Blogs.index', compact('Blogs'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('Blogs.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */

    //  public function loadAllBlog()
    //  {
    //      // Logic untuk mengambil data Blog
    //      $allGalleries = Blog::paginate(5); // Contoh jika menggunakan model Blog
    //      return view('back-Blog', compact('allGalleries'));
    //  }

    //  public function loadAllBlogs()
    //  {
    //      // Logic untuk mengambil data Blog
    //      $allGalleries = Blog::paginate(5); // Contoh jika menggunakan model Blog
    //      return view('Blogs.index', compact('allGalleries'));
    //  }

    public function show($id)
    {
        // Misalnya mengambil data Blog berdasarkan ID
        $blog = Blog::findOrFail($id); // Pastikan Anda memiliki model Blog
        return view('blog.show', compact('blog'));
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
        $image->storeAs('public/Blogs', $image->hashName());

        // Create Blog
        Blog::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'tanggal'       => CarbonCarbon::parse($request->tanggal)->format('Y-m-d'),  // Format tanggal sebelum disimpan
        ]);

        // Redirect to index
        return redirect()->route('Blogs.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}
