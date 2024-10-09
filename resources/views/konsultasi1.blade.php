<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SehatPlus | Konsultasi1</title>
</head>
<body>
<body class="bg-sky-100">
    @include('partial.nav')
    {{-- Dashboard Start --}}

    <!-- Main Section -->
    <section class="flex justify-center items-center h-screen p-5">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Konsultasi</h2>

        <!-- Progress Steps -->
        <div class="flex justify-between items-center mb-8">
            <div class="flex items-center">
                <div class="rounded-full bg-blue-500 text-white w-8 h-8 flex items-center justify-center aspect-square">
                    <span>1</span>
                </div>
                <span class="ml-2 font-semibold">Data Diri</span>
            </div>
            <div class="flex items-center">
                <div class="rounded-full bg-gray-300 text-white w-8 h-8 flex items-center justify-center aspect-square">
                    <span>2</span>
                </div>
                <span class="ml-2 text-gray-600">Keluhan</span>
            </div>
            <div class="flex items-center">
                <div class="rounded-full bg-gray-300 text-gray-600 w-8 h-8 flex items-center justify-center aspect-square">
                    <span>3</span>
                </div>
                <span class="ml-2 text-gray-600">Tanggal Konsultasi</span>
            </div>
        </div>


        <!-- Form Step 1 (Data Diri) -->
        <form action="{{ route('konsultasi2') }}" method="POST">
            @csrf
            <div class="mb-4 text">
                <label for="Nama" class="block text-gray-700 font-bold">Nama </label>
                <input type="text" id="nama" name="nama" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="Masukkan Nama Anda Disini" required>
            </div>
            <div class="mb-4">
                <label for="nomor_hp" class="block text-gray-700 font-bold">Nomor Handphone</label>
                <input type="tel" id="nomor_hp" name="nomor_hp" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="Masukkan Nomor Handphone" required>
            </div>
            <div class="mb-4">
                <label for="alamat" class="block text-gray-700 font-bold">Alamat</label>
                <textarea type="text" id="alamat" name="alamat" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="Alamat domisili" required></textarea>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('home-login') }}">
                    <button type="button" class="text-gray-500 border border-gray-600 hover:bg-gray-100 hover:text-gray-700 rounded-lg px-5 py-2.5">
                        Kembali
                    </button>
                </a>
                <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 rounded-lg px-5 py-2.5">
                    Selanjutnya
                </button>
            </div>
            </div>
        </form>
        </div>
    </section>
</body>
</html>
