<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Donasi</title>
    @vite('resources/css/app.css')
    <style>
        body {
            background-image: url('{{ asset('img/bg3.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .form-container {
            backdrop-filter: blur(10px);
            background-color: rgba(255, 255, 255, 0.8);
        }
    </style>
</head>
<body class="py-10 flex justify-center items-center min-h-screen">
    <div class="form-container max-w-xl w-full bg-white p-6 rounded-lg shadow">
        <h1 class="text-xl font-bold mb-4 text-center">Formulir Donasi</h1>

        @if(session('success'))
            <div class="p-4 mb-4 text-green-800 bg-green-100 rounded">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('donation.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <!-- Kategori Donatur -->
            <div>
                <label for="category" class="block font-semibold">Kategori Donatur</label>
                <select id="category" name="category" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300">
                    <option value="individual">Individu</option>
                    <option value="organization">Lembaga/Perusahaan</option>
                </select>
                @error('category') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Nama Lengkap atau Nama Lembaga -->
            <div>
                <label for="name" class="block font-semibold">Nama Lengkap / Nama Lembaga</label>
                <input type="text" id="name" name="name" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300" placeholder="Isi nama lengkap atau nama lembaga">
                @error('name') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block font-semibold">Alamat Email</label>
                <input type="email" id="email" name="email" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300" placeholder="contoh@domain.com">
                @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Nomor Telepon -->
            <div>
                <label for="phone" class="block font-semibold">Nomor Telepon (WhatsApp)</label>
                <input type="text" id="phone" name="phone" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300" placeholder="081234567890">
                @error('phone') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Alamat Lengkap -->
            <div>
                <label for="address" class="block font-semibold">Alamat Lengkap (Opsional)</label>
                <input type="text" id="address" name="address" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300" placeholder="Isi alamat lengkap jika diperlukan">
                @error('address') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Jumlah Donasi -->
            <div>
                <label for="donation_amount" class="block font-semibold">Jumlah Donasi (Rp)</label>
                <input type="number" id="donation_amount" name="donation_amount" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300" placeholder="Contoh: 100000">
                @error('donation_amount') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Tanggal Transfer -->
            <div>
                <label for="transfer_date" class="block font-semibold">Tanggal Transfer</label>
                <input type="date" id="transfer_date" name="transfer_date" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300">
                @error('transfer_date') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Bukti Transfer -->
            <div>
                <label for="proof" class="block font-semibold">Unggah Bukti Transfer</label>
                <input type="file" id="proof" name="proof" class="w-full border p-2 rounded-lg focus:ring focus:ring-blue-300">
                @error('proof') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <!-- Pernyataan -->
            <div>
                <p class="text-sm text-gray-600">
                    Dengan ini saya menyatakan bahwa informasi yang saya isi adalah benar dan saya memberikan donasi ini secara sukarela untuk mendukung kegiatan Yayasan Guna Widya Paramesthi.
                </p>
            </div>

            <!-- Tombol Kirim -->
            <div>
                <button type="submit" class="w-full bg-primary text-white p-3 rounded-lg hover:bg-blue-600">
                    Kirim Donasi
                </button>
            </div>
        </form>
    </div>
</body>
</html>
