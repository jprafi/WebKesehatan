<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SehatPlus | Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    @include('partial.nav')

    {{-- Sign Up --}}
    <div class="h-screen bg-sky-100 flex items-center justify-center">
        <div class="bg-white p-8 mx-5 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-center font-semibold text-3xl mb-8">Sign Up</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input name="email" type="text" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="name@flowbite.com" required />
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required />
                </div>
                <div class="mb-6">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                    <input name="password_confirmation" type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required />
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                      <input id="remember_me" type="checkbox" class="border border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                      <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me </label>
                    </div>
                </div>
                <div class="mb-6">
                    <button type="Sign Up" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-6 py-3 my-2 text-center">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
