<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body>
    @include('partial.nav')

    <section class="bg-sky-100 py-16">
        <div class="container mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-800 mb-8">Hasil Pencarian</h2>
            
                        <!-- Kotak Pencarian -->
            <div class="flex justify-center mb-8">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" name="query" placeholder="Cari Obat..." class="w-2/3 p-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:outline-none">
                    <button class="ml-4 bg-sky-500 text-white px-4 py-2 rounded-lg hover:bg-sky-700">
                        Cari
                    </button>
                </form>
            </div>


            <!-- Display Results -->
            @if ($obats->isEmpty())
                <p class="text-center text-gray-600">Tidak ada hasil ditemukan untuk "{{ $query }}".</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($obats as $obat)
                        <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                            <img src="{{ asset('img/' . $obat->image) }}" alt="{{ $obat->name }}" class="w-1/2 h-40 object-cover mb-4 rounded-lg mx-auto">
                            <h3 class="text-xl font-semibold text-gray-800">{{ $obat->name }}</h3>
                            <p class="text-gray-600">{{ $obat->description }}</p>
                            <button class="mt-4 bg-sky-500 text-white px-4 py-2 rounded-full hover:bg-sky-700">
                                Pesan Sekarang
                            </button>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
</body>
</html>
