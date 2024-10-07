<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SehatPlus</title>
    <!-- Mengimpor Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Menambahkan kelas CSS untuk font Poppins */
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <section class="nav">
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex items-center justify-between mx-auto py-2 px-4">
                <!-- Flex container untuk logo dan teks -->
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <!-- Logo SehatPlus -->
                    <img src="{{ asset('img/logo.png') }}" class="h-16" alt="Logo website" />
                    <!-- Nama SehatPlus -->
                    <span class="self-center text-4xl whitespace-nowrap font-extrabold font-poppins">
                        <span class="text-sky-500">Sehat</span><span class="text-black">Plus</span> <!-- Membagi teks -->
                    </span>
                </a>
                
                <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:flex md:items-center md:justify-center md:w-auto" id="navbar-default">
                    <ul class="font-medium flex flex-col p-2 md:p-0 mt-2 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white items-center">
                        <li>
                            <a href="{{ route('home') }}" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0" aria-current="page">Home</a>
                        </li>                    
                        <li>
                            <a href="{{ route('konsultasi1') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Konsultasi</a>
                        </li>
                        <li>
                            <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Pemesanan Obat</a>
                        </li>
                        <li>
                            <a href="{{ route('login') }}" class="text-white bg-sky-500 hover:bg-blue-800 focus:outline-none focus:ring-4 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-block">
                                Login/Sign in
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
</body>
</html>
