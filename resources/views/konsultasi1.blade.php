<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konsultasi Page Step 1</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="h-screen bg-sky-100 bg-gradient-to-r from-sky-100 to-blue-200 min-h-screen flex flex-col items-center">
    @include('partial.nav') <!-- Navigation Bar -->

    <header class="w-full bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center py-4 px-6">
            <!-- Add your header content here if needed -->
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <div class="text-6xl text-green-500 mb-4">
                <i class="fas fa-check-circle"></i>
            </div>
            <h1 class="text-2xl font-bold mb-4">Konsultasi Sudah Dikonfirmasi</h1>
            <button class="bg-blue-500 text-white px-6 py-2 rounded-full">SELESAI</button>
        </div>
    </main>
</body>
</html>
