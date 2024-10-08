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
            
            <!-- Menambahkan Foto Dokter -->
            <div class="flex justify-center mb-8">
                <img src="{{ asset('img/dokterimg.png') }}" alt="Foto Dokter" class="w-48 h-48 object-cover rounded-full shadow-lg">
            </div>

            <!-- Kotak Pencarian -->
            <div class="flex justify-center mb-8">
                <input type="text" placeholder="Cari Obat..." class="w-2/3 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                <button class="ml-4 bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700">
                    Cari
                </button>
            </div>
            
            <!-- Grid Layout Produk -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @if($medicine->count() > 0)
                    @foreach($medicine as $med)
                        <!-- Kotak Produk -->
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('img/'.$med->IMG_url) }}" alt="Obat" class="w-1/2 h-40 object-cover mb-4 rounded-lg mx-auto">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $med->name }}</h3>
                            <p class="text-gray-600">{{ $med->description }}</p>
                            <a href="{{ route('pemesanan-obat-2', $med->id) }}" class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-600">
                                Pesan Sekarang
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>Tidak ada data obat.</p>
                @endif
            </div>
        </div>
    </section>
</body>
</html>
