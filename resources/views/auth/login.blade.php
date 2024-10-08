<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SehatPlus | Login</title>
</head>
<body>
    @include('partial.nav')

    {{-- Login --}}
    <div class="h-screen bg-sky-100 flex items-center justify-center">
        <div class="bg-white p-8 mx-5 rounded-lg shadow-lg w-full max-w-lg">
            <h2 class="text-center font-semibold text-3xl mb-8">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                    <input name="email" type="username" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="name@flowbite.com" required />
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input name="password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" required />
                </div>
                <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                      <input id="remember_me" type="checkbox" class="border border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" />
                      <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900"> Remember me </label>
                    </div>
                    <a href="{{ route('password.request') }}" class="text-sm hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300"> Forgot your password? </a>
                  </div>
                <div class="mb-6">
                    <button type="Login" class="text-white bg-sky-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full px-6 py-3 my-2 text-center">Login</button>
                </div>
                <div class="mt-6 text-center ">
                    <a href="{{ route('signup') }}" class=" hover:text-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">Not a member yet? <span class="text-blue-600"> Sign up</span></a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
