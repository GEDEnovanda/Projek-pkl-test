<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function showForm()
    {
        return view('donation-form');
    }

    public function submitForm(Request $request)
    {
        // Validasi data
        $request->validate([
            'category' => 'required',
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'nullable|max:255',
            'donation_amount' => 'required|numeric|min:1',
            'transfer_date' => 'required|date',
            'proof' => 'required|mimes:jpg,png,pdf|max:5120', // Maks 5MB
        ]);

        // Simpan atau kirim data (sesuaikan dengan kebutuhan)
        // Contoh:
        // Donor::create($request->all());

        return back()->with('success', 'Formulir donasi berhasil dikirim. Terima kasih atas dukungan Anda!');
    }
}

