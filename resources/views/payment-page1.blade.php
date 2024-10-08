<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | payment-page-1</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body class="bg-sky-50 min-h-screen">

    @include('partial.nav')

    <!-- Main Content -->
    <main class="flex items-center justify-center mt-6">
        <div class="space-y-6 w-full max-w-md">
            <!-- Pembelianmu Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="font-bold text-lg mb-4">Pembelianmu</h2>
                <div class="flex items-center justify-between mb-4">
                    <img src="{{ asset('img/Obat Sakit Kepala.png') }}" class="w-16 h-16" alt="Obat Sakit Kepala" />
                    <div class="flex-1 ml-4">
                        <p class="font-bold">Bodrex</p>
                        <p class="text-gray-600">1 tablet</p>
                    </div>
                    <p class="font-bold text-sky-500">Rp25.000</p>
                </div>
                <div class="flex items-center justify-between">
                    <img src="{{ asset('img/paracetamol.png') }}" class="w-16 h-16" alt="Paracetamol" />
                    <div class="flex-1 ml-4">
                        <p class="font-bold">Paracetamol</p>
                        <p class="text-gray-600">1 tablet</p>
                    </div>
                    <p class="font-bold text-sky-500">Rp25.000</p>
                </div>
            </div>

            <!-- Ringkasan Pembayaran Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="font-bold text-lg mb-4">Ringkasan Pembayaran</h2>
                <div class="flex justify-between mb-2">
                    <p class="text-gray-700">Harga</p>
                    <p class="font-bold text-sky-500">Rp25.000</p>
                </div>
                <div class="flex justify-between mb-2">
                    <p class="text-gray-700">Biaya Penanganan dan Pengiriman</p>
                    <p class="font-bold text-sky-500">Rp25.000</p>
                </div>
                <div class="flex justify-between border-t border-gray-300 pt-2">
                    <p class="font-bold">Harga Total</p>
                    <p class="font-bold text-sky-500">Rp50.000</p>
                </div>
            </div>

            <!-- Bayar Button -->
            <div class="flex justify-center">
                <a href="{{ route('payment-page-2') }}">
                <button
                class="bg-sky-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg hover:bg-sky-600 transition duration-300">BAYAR
            </button>
            </div>
        </div>
    </main>

</body>
</html>
