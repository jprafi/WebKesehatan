<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SehatPlus | Pemesanan Obat</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Menggunakan Tailwind dari CDN -->
</head>
<body class="bg-blue-50 min-h-screen">

        @include('partial.nav')

    <!-- Main Content -->
    <main class="flex items-center justify-center min-h-screen mt-6">
        <div class="bg-white p-10 rounded-lg shadow-lg text-center">
            <div class="flex justify-center mb-4">
                <div class="bg-green-200 rounded-full p-4">
                    <i class="fas fa-check text-green-600 text-4xl"></i>
                </div>
            </div>
            <h1 class="text-xl font-semibold mb-4">Pembayaran Sudah Dikonfirmasi</h1>
            <button class="bg-blue-500 text-white px-6 py-2 rounded-lg">SELESAI</button>
        </div>
    </main>

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</body>
</html>
