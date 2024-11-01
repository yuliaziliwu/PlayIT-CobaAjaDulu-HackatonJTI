<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EcoSaver</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Keania+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="flex items-center justify-center min-h-screen">
    <div class="flex justify-between bg-white rounded-lg overflow-hidden">
        <div class="hidden md:block w-1/2">
          <img src="images/8669670.jpg" alt="Login Image" class="login-image">
        </div>
        {{-- form login --}}
        <div class="p-8 w-full md:w-1/2">
            <h2 class="text-2xl font-bold text-orange-600 text-center mb-2">Sign In</h2>
            <form action="" method="POST">
              {{-- @csrf --}}
                <div class="mb-3">
                    <label for="username" class="block text-gray-700 text-sm">Username</label>
                    <input type="text" id="username" name="username" class="w-full px-3 py-1.5 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-orange-500" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="block text-gray-700 text-sm">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-3 py-1.5 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-orange-500" required>
                </div>
                <div class="flex items-center justify-between mb-3">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="text-orange-500 focus:ring-orange-500">
                        <span class="ml-1 text-gray-700 text-sm">Remember me</span>
                    </label>
                </div>
                <button type="submit" class="w-full bg-orange-500 text-white font-semibold py-1.5 rounded-md hover:bg-orange-600 transition-colors">Sign In</button>
            </form>
            <div class="text-center mt-3">
              <p class="text-gray-700 text-sm">Don’t have an account? <a href="#" class="text-orange-500 hover:underline">Sign Up With Google</a></p>
              <div class="flex justify-center space-x-2 mt-2">
                  <button class="p-1 bg-gray-200 rounded-full text-red-500 hover:bg-red-300 transition">
                      Sign with <i class="fab fa-google fa-lg"></i>oogle
                  </button>
              </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
