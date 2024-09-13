<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konsultasi Page Step 1</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-sky-100">
    @include('partial.nav') <!-- Navigation Bar -->

    <!-- Main Section -->
    <section class="flex justify-center items-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-lg">
            <h2 class="text-2xl font-bold text-center mb-6">Konsultasi</h2>
            
            <!-- Progress Steps -->
            <div class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <div class="rounded-full bg-blue-500 text-white w-8 h-8 flex items-center justify-center"></div>
                    <span class="ml-2 font-semibold">Data Diri</span>
                </div>
                <div class="border-t-2 border-gray-200 w-1/3"></div>
                <div class="flex items-center">
                    <div class="rounded-full bg-gray-300 text-gray-600 w-8 h-8 flex items-center justify-center"></div>
                    <span class="ml-2 text-gray-600">Keluhan</span>
                </div>
                <div class="border-t-2 border-gray-200 w-1/3"></div>
                <div class="flex items-center">
                    <div class="rounded-full bg-gray-300 text-gray-600 w-8 h-8 flex items-center justify-center"></div>
                    <span class="ml-2 text-gray-600">Tanggal Konsultasi</span>
                </div>
            </div>
            
            <!-- Form Step 1 (Data Diri) -->
            <form action="/konsultasi/step2" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full p-2 border rounded-md" placeholder="Nama Anda" required>
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Nomor Handphone/Whatsapp</label>
                    <input type="text" id="phone" name="phone" class="w-full p-2 border rounded-md" placeholder="Nomor Handphone/Whatsapp" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="w-full p-2 border rounded-md" placeholder="Alamat Domisili" required>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="text-white bg-blue-500 hover:bg-blue-700 rounded-full px-5 py-2.5">
                        Selanjutnya
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
