<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | Pemesanan Obat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body>
    @include('partial.nav')

    <!-- Section Pemesanan Obat -->
    <section class="bg-sky-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Pemesanan Obat</h2>
            
            <!-- Kotak Pencarian -->
            <div class="flex justify-center mb-8">
                <input type="text" placeholder="Cari Obat..." class="w-2/3 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <button class="ml-4 bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700">
                    Cari
                </button>
            </div>
            
            <!-- Grid Layout Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Kotak Produk -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat1.jpg') }}" alt="Obat 1" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Paracetamol</h3>
                    <p class="text-gray-600">Obat penurun demam dan pereda nyeri.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat2.jpg') }}" alt="Obat 2" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Ibuprofen</h3>
                    <p class="text-gray-600">Pereda nyeri dan anti inflamasi.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>
                
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat3.jpg') }}" alt="Obat 3" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Antibiotik</h3>
                    <p class="text-gray-600">Obat untuk infeksi bakteri.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>

                <!-- Produk lainnya -->
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat4.jpg') }}" alt="Obat 4" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Vitamin C</h3>
                    <p class="text-gray-600">Suplemen untuk menjaga daya tahan tubuh.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat5.jpg') }}" alt="Obat 5" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Obat Sakit Kepala</h3>
                    <p class="text-gray-600">Obat untuk meredakan sakit kepala.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <img src="{{ asset('img/obat6.jpg') }}" alt="Obat 6" class="w-full h-40 object-cover mb-4 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800">Aspirin</h3>
                    <p class="text-gray-600">Obat pengencer darah dan pereda nyeri.</p>
                    <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
