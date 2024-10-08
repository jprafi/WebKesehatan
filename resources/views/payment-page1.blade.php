<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | Pemesanan Obat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body class="bg-blue-50 min-h-screen">

    @include('partial.nav')

    <!-- Main Content -->
    <main class="flex items-center justify-center mt-6 space-y-6">
        <div class="space-y-6">
            <!-- Pembelianmu Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="font-bold text-lg mb-4">Pembelianmu</h2>
                <div class="flex items-center justify-between mb-4">
                    <img src="{{ asset('img/Obat Sakit Kepala.png') }}" class="w-16 h-16" height="100" width="100"/>
                    <div class="flex-1 ml-4">
                        <p class="font-bold">Bodrex</p>
                        <p>1 tablet</p>
                    </div>
                    <p class="font-bold">Rp25.000</p>
                </div>
                <div class="flex items-center justify-between">
                    <img src="{{ asset('img/paracetamol.png') }}" class="w-16 h-16" height="100" width="100"/>
                    <div class="flex-1 ml-4">
                        <p class="font-bold">Bodrex</p>
                        <p>1 tablet</p>
                    </div>
                    <p class="font-bold">Rp25.000</p>
                </div>
            </div>

            <!-- Ringkasan Pembayaran Section -->
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="font-bold text-lg mb-4">Ringkasan Pembayaran</h2>
                <div class="flex justify-between mb-2">
                    <p>Harga</p>
                    <p class="font-bold">Rp25.000</p>
                </div>
                <div class="flex justify-between mb-2">
                    <p>Biaya Penanganan dan Pengiriman</p>
                    <p class="font-bold">Rp25.000</p>
                </div>
                <div class="flex justify-between">
                    <p class="font-bold">Harga Total</p>
                    <p class="font-bold">Rp50.000</p>
                </div>
            </div>

            <!-- Bayar Button -->
            <div class="flex justify-center">
                <button class="bg-blue-500 text-white font-bold py-2 px-6 rounded-lg shadow-lg">BAYAR</button>
            </div>
        </div>
    </main>

</body>
</html>
