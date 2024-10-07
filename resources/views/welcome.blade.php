<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SehatPlus | Welcome</title>
</head>
<body>
    @include('partial.nav')
    {{-- Dashboard Start --}}
    <section>
        <div id="home" class="h-screen bg-sky-100">
            <div class="flex">
                <div class="head px-16 mt-44 space-y-5">
                    <h1 class="flex flex-col text-8xl text-left justify-center font-bold">
                        Konsultasi <span class=" text-sky-500">Dokter.</span>
                    </h1>

                    <!-- Ubah font pada teks deskripsi dan tambahkan style justify -->
                    <h3 class="flex text-lg font-semibold text-gray-500 font-poppins" style="text-align: justify;"> <!-- Mengubah ukuran, jenis font, warna, dan align -->
                        Sehat plus merupakan website kesehatan yang dapat membantu anda dalam menangani keluhan kesehatan anda, 
                        cek keluhan anda dengan mendaftarkan diri untuk konsultasi dengan dokter terdekat, 
                        lakukan pemesanan obat yang anda butuhkan dan yang paling menarik anda dapat membuat pola diet anda.
                    </h3>

                    <a href="{{ route('login') }}">
                        <button type="button" class="text-white bg-sky-500 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mt-6">
                            Konsultasi Sekarang
                        </button>
                    </a>
                </div>
                <img class="h-screen bg-cover" src="{{ asset('img/dokterimg.png') }}" alt="Foto Dokter">
            </div>
        </div>
    </section>
    {{-- Dashboard End --}}
</body>
</html>
