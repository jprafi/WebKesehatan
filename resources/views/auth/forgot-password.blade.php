<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>SehatPlus | Forgot Password</title>
    <style>
        body {
            margin: 0;
        }
    </style>
</head>
<body>
    @include('partial.nav')

    <div class="h-screen bg-sky-100 flex items-center justify-center">
        <main id="content" role="main" class="w-full max-w-md p-6">
            <div class="mt-7 bg-white rounded-xl shadow-lg dark:bg-gray-800 dark:border-gray-700 border-2 border-transparent"> <!-- Ganti border-indigo-300 dengan border-transparent -->
              <div class="p-4 sm:p-7">
                <div class="text-center">
                  <h1 class="block text-2xl font-medium text-gray-800 dark:text-white">Forgot password?</h1>
                  <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                    Remember your password?
                    <a class="text-sky-500 decoration-2 hover:underline font-medium" href="{{ route('login') }}">
                      Login here
                    </a>
                  </p>
                </div>

                <div class="mt-5">
                  <form>
                    <div class="grid gap-y-4">
                      <div>
                        <label for="email" class="block text-sm font-bold ml-1 mb-2 dark:text-white">Email address</label>
                        <div class="relative">
                          <input type="email" id="email" name="email" class="py-3 px-4 block w-full border-2 border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 shadow-sm" required aria-describedby="email-error">
                        </div>
                        <p class="hidden text-xs text-red-600 mt-2" id="email-error">Please include a valid email address so we can get back to you</p>
                      </div>
                      <button type="submit" class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-sky-500 text-white hover:bg-sky-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800">Reset password</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </main>
    </div>
</body>
</html>
