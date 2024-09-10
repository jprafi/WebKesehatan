<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>SehatPlus | HOME</title>
</head>
<body>
    @include('partial.nav')
    {{-- Home Start --}}
    <section>
        <div id="home" class="h-screen bg-sky-100" >
            <div class="flex">
                <div class="head px-16 mt-44 space-y-5">
                    <h1 class="flex flex-col text-8xl text-left justify-center  font-bold">
                        Konsultasi <span class=" text-sky-500">Dokter.</span>
                    </h1>

                    <h3 class="">Sehat plus merupakan website kesehatan yang dapat membantu anda dalam menangani keluhan kesehatan anda, 
                                 cek keluhan anda dengan mendaftarkan diri untuk konsultasi dengan dokter terdekat, 
                                lakukan pemesanan obat yang anda butuhkan dan yang paling menarik anda dapat membuat pola diet anda.
                    </h3>

                    <button type="button" class="text-white bg-sky-500 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center ">
                        Konsultasi Sekarang
                    </button>
                </div>
                <img class="h-screen bg-cover" src="{{ asset('img/dokterimg.png') }}" alt="Foto Dokter">

            </div>
        </div>
    </section>
    {{-- Home End --}}
</body>
</html>