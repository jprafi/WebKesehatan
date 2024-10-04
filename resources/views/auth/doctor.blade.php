<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SehatPlus | Artikel</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>
<body class="bg-sky-100">
    @include('partial.nav')

    <div class="h-screen flex justify-center bg-sky-100"> <!-- Memastikan bagian ini juga menggunakan bg-sky-100 -->
        <section class="bg-sky-100 py-12 rounded-lg"> <!-- Menghapus bg-blue-50 dan shadow-lg -->
            <div class="container mx-auto text-center">
                <h2 class="text-3xl font-bold text-sky-500 mb-8">Our Doctor</h2>
                <div class="flex justify-center space-x-6 flex-wrap">
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Andy Hull" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/xVGflyiE5AQsOSF23Yk2FTlpQaNMqeL3lmDuCBtHVV0ZVdjTA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Andy Hull</h3>
                        <p class="text-blue-500">Medicine</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Ahmad Khan" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/7m9QEeEKiRUiJSqiUtJ5iiH5VfjwbXuphxLkxVtRaMObVdjTA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Ahmad Khan</h3>
                        <p class="text-blue-500">Neurologist</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Heena Sachdeva" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/rzbXLuAu716OC9uo31Omu9dCzPCTGHsMLVhfSoM4azJuquxJA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Heena Sachdeva</h3>
                        <p class="text-blue-500">Orthopaedics</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Ankur Sharma" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/fO7e4CTKczmiS0eowmJJD3emrSf8Uftr9MzC74x4vfWCvquxJA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Ankur Sharma</h3>
                        <p class="text-blue-500">Medicine</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Emily Clark" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/ZSfoYfyYF2nnx0oDVrfTq6g4iEMefESM89LSgiLPJqpW5qbcC.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Emily Clark</h3>
                        <p class="text-blue-500">Pediatrics</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. John Doe" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/cmkh9lRoAjqOHRHYBJRY5HoEJ1L8u2BCbyqfOd7MLNvmruxJA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. John Doe</h3>
                        <p class="text-blue-500">Cardiology</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Jane Smith" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/uBUPspJK555GP5BNVmahGQtn6zL65o85KyYVNLeGqzHmruxJA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Jane Smith</h3>
                        <p class="text-blue-500">Dermatology</p>
                    </div>
                    <div class="bg-white rounded-lg p-6 mb-6"> <!-- Menghapus shadow-lg -->
                        <img alt="Dr. Michael Brown" class="rounded-full mx-auto mb-4" height="150" src="https://storage.googleapis.com/a1aa/image/HawpBBVDz14yOx9ziIeCLu69U5RRMvC2UPYgeu9xYOqPXdjTA.jpg" width="150"/>
                        <h3 class="text-xl font-bold">Dr. Michael Brown</h3>
                        <p class="text-blue-500">Surgery</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>
