<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | payment-page-2</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body class="bg-sky-100 min-h-screen">

    @include('partial.nav')

    <!-- Main Content -->
    <main class="flex items-center justify-center min-h-screen mb-6">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <div class="flex justify-center mb-4">
                <div class="bg-green-200 rounded-full p-4">
                    <i class="fas fa-check text-green-600 text-4xl"></i>
                </div>
            </div>
            <a href="{{ route('home-login') }}">
            <h1 class="text-xl font-semibold mb-6">Pembayaran Sudah Dikonfirmasi</h1>
            <button class="bg-sky-500 text-white px-6 py-2 rounded-lg hover:bg-sky-600 transition duration-300">SELESAI</button>
        </div>
    </main>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</body>
</html>
