<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konsultasi Page Step 2</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="h-screen bg-sky-100 flex flex-col">
    @include('partial.nav') <!-- Navigation Bar -->

    <header class="w-full bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Isi header sesuai kebutuhan -->
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <div class="text-6xl text-green-500 mb-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="text-2xl font-bold mb-8">Konsultasi Sudah Dikonfirmasi</h1>
            <a href="{{ route('home-login') }}">
            <button type="submit" class="text-white bg-sky-500 hover:bg-blue-700 rounded-lg px-7 py-2.5">
                Selesai
            </button>
        </div>
    </main>
</body>
</html>
