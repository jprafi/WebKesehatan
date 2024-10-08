<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SehatPlus | Home Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('partial.nav')

    {{-- Home Start --}}
    <section>
        <div id="home" class="h-screen bg-sky-100">
            <div class="flex flex-col md:flex-row justify-between">
                @if(auth()->user()->role == 'user')
                <!-- Bagian teks -->
                <div class="head px-8 md:px-16 mt-24 md:mt-44 space-y-5">
                    <h1 class="flex flex-col text-4xl md:text-8xl text-left justify-center font-bold">
                        Konsultasi <span class="text-sky-500">Dokter.</span>
                    </h1>

                    <!-- Deskripsi -->
                    <h3 class="text-sm md:text-lg font-semibold text-gray-500 font-poppins" style="text-align: justify;">
                        SehatPlus merupakan website kesehatan yang dapat membantu anda dalam menangani keluhan kesehatan anda. Cek keluhan anda dengan mendaftarkan diri untuk konsultasi dengan dokter terdekat, lakukan pemesanan obat yang anda butuhkan, dan buat pola diet anda.
                    </h3>

                    <a href="{{ route('konsultasi1') }}">
                        <button type="button" class="text-white bg-sky-500 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-6">
                            Konsultasi Sekarang
                        </button>
                    </a>
                </div>
                @else
                Admin
                @endif

                <!-- Bagian tombol (Our Doctor dan Artikel) -->
                <div class="flex flex-col md:flex-row items-center justify-center px-8 md:px-24 py-12 mt-16 md:mt-44 space-y-8 md:space-y-0 md:space-x-12">
                    <!-- Tombol Our Doctor -->
                    <a href="{{ route('doctor') }}">
                    <button type="button" class="flex flex-col items-center justify-center bg-white hover:bg-blue-800 text-sky-500 font-medium w-40 md:w-60 h-32 md:h-40 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-xl">
                        <i class="fas fa-user-md text-5xl md:text-8xl mb-3"></i>
                        <span class="text-gray-500 text-lg font-bold">Our Doctor</span>
                    </button>

                    <!-- Tombol Artikel -->
                    <a href="{{ route('artikel') }}">
                        <button type="button" class="flex flex-col items-center justify-center bg-white hover:bg-blue-800 text-sky-500 font-medium w-40 md:w-60 h-32 md:h-40 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-300 shadow-xl">
                            <i class="fas fa-newspaper text-5xl md:text-8xl mb-3"></i>
                            <span class="text-gray-500 text-lg font-bold">Artikel</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Home End --}}
</body>
</html>
