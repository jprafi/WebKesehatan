<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SehatPlus | Konsultasi2</title>
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
                <div class="rounded-full bg-gray-300 text-white w-8 h-8 flex items-center justify-center aspect-square">
                    <span>1</span>
                </div>
                <span class="ml-2 text-gray-600">Data Diri</span>
            </div>
            <div class="flex items-center">
                <div class="rounded-full bg-blue-500 text-white w-8 h-8 flex items-center justify-center aspect-square">
                    <span>2</span>
                </div>
                <span class="ml-2 text-gray-600 font-semibold">Keluhan</span>
            </div>
            <div class="flex items-center">
                <div class="rounded-full bg-gray-300 text-gray-600 w-8 h-8 flex items-center justify-center aspect-square">
                    <span>3</span>
                </div>
                <span class="ml-2 text-gray-600">Tanggal Konsultasi</span>
            </div>
        </div>


        <!-- Form Step 1 (Data Diri) -->
        <form action="{{ route('konsultasi3') }}">
            <div class="mb-4 text">
                <label for="gejala" class="block text-gray-700 font-bold">Gejala </label>
                <input type="text" id="gejala" name="gejala" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="Masukkan Gejala Anda Disini" required>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="block text-gray-700 font-bold">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="Masukkan Tanggal Mulai Gejala" required>
            </div>
            <div class="mb-4">
                <label for="keluhan" class="block text-gray-700 font-bold">Penjelasan</label>
                <textarea type="text" id="keluhan" name="keluhan" class="w-full p-2 border border-gray-400 rounded-md text-xs" placeholder="masukkan Penjelasan Detail Gejala" required></textarea>
            </div>
            <div class="flex justify-between">
                <a href="{{ route('konsultasi1') }}">
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
