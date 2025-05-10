<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMeal - {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-custom-green { background-color: #7CAF3F; }
        .bg-custom-darkgreen { background-color: #3F7D20; }
        .text-custom-green { color: #7CAF3F; }
        .text-custom-darkgreen { color: #3F7D20; }
        .bg-light-blue { background-color: #E3F0FF; }
        .border-light-blue { border-color: #BFD8FF; }
    </style>
</head>
<body class="bg-custom-green flex flex-col min-h-screen">
    <!-- Navbar -->
    <nav class="bg-custom-darkgreen text-white px-6 py-4 flex justify-between items-center">
        <div class="flex items-center space-x-3">
            <img src="/path-to-your-logo.png" alt="MetaMeal Logo" class="h-8 w-8">
            <span class="text-2xl font-bold">
                <span class="text-purple-400">Meta</span><span class="text-white">Meal</span>
            </span>
        </div>
        <ul class="flex space-x-6">
            <li>
                <a href="{{ route('landing') }}"
                    class="{{ request()->routeIs('landing') ? 'underline font-bold' : 'hover:underline' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'underline font-bold' : 'hover:underline' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('fitur') }}"
                    class="{{ request()->routeIs('fitur') ? 'underline font-bold' : 'hover:underline' }}">
                    Fitur
                </a>
            </li>
        </ul>
        <div class="space-x-2">
            <a href="{{ route('login') }}" class="bg-white text-custom-darkgreen px-4 py-1 rounded hover:bg-gray-100 font-semibold">
                Login
            </a>
            <a href="{{ route('register') }}" class="bg-custom-green text-white px-4 py-1 border border-white rounded hover:bg-white hover:text-custom-darkgreen font-semibold">
                Register
            </a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-light-blue">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white py-8 px-6 md:px-20 text-gray-700 border-t border-gray-200">
        <div class="flex flex-col md:flex-row justify-between gap-8">
            <div>
                <h4 class="text-xl font-bold text-custom-darkgreen mb-2">MetaMeal</h4>
                <p class="text-sm">Copyright © 2025 Metameal<br>All rights reserved.</p>
                <div class="flex space-x-3 mt-3">
                    <a href="#"><img src="/icons/facebook.svg" class="h-5"></a>
                    <a href="#"><img src="/icons/twitter.svg" class="h-5"></a>
                    <a href="#"><img src="/icons/instagram.svg" class="h-5"></a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div>
                    <h5 class="font-semibold mb-2">Company</h5>
                    <ul class="text-sm space-y-1">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Pricing</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-semibold mb-2">Legal Policy</h5>
                    <ul class="text-sm space-y-1">
                        <li><a href="#">Status Policy</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
