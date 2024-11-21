<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Product; 

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Http Request
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return void
     */


    public function showImage($filename)
{
    $path = storage_path('app/private/public/products/' . $filename);

    if (!file_exists($path)) {
        abort(404); // Jika file tidak ditemukan, tampilkan halaman 404
    }

    $file = file_get_contents($path);
    $type = mime_content_type($path);

    return response($file, 200)->header("Content-Type", $type);
}


    public function index() : View
    {
        //get all products
        $products = Product::latest()->paginate(10);

        //render view with products
        return view('products.index', compact('products'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('products.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:1000',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);
        $data = $request->input('description');
        $cleanedData = strip_tags($data);
        //upload image
        $image = $request->file('image');
        $image->storeAs('public/products', $image->hashName());

        //create product
        Product::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        //redirect to index
        return redirect()->route('products.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
}