<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MetaMeal Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center">

    <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg flex overflow-hidden">
        <!-- Login Card -->
        <div class="w-full md:w-1/2 p-10 bg-white bg-opacity-80 backdrop-blur-md relative z-10">
            <div class="flex justify-center mb-6">
                <img src="https://via.placeholder.com/50" alt="Logo" class="h-12 w-12">
            </div>

            <div class="flex justify-center mb-6">
                <h1 class="text-2xl font-semibold text-center text-gray-800">MetaMeal</h1>
            </div>

         <!-- Tabs -->
      <div class="flex mb-6 border-b border-gray-300">
        <button id="login.blade.php" onclick="showTab('login')" class="text-sm font-medium px-4 pb-2 border-b-2 text-gray-600">Login</button>
        <button id="daftar.blade.php" onclick="showTab('register')" class="text-sm font-medium px-4 pb-2 border-b-2 text-blue-600 border-blue-600">Registrasi</button>
      </div>

            <form>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1 text-gray-700">Email</label>
                    <input type="email" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your email">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1 text-gray-700">Password</label>
                    <input type="password" class="w-full border border-gray-300 p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Enter your password">
                </div>
                <div class="flex items-center justify-between mb-4">
                    <label class="flex items-center text-sm text-gray-600">
                        <input type="checkbox" class="mr-2"> Remember me
                    </label>
                    <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
                </div>
                <a href="{{route('beranda')}}"><button type="button" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transition">Sign In</button></a>
                
            </form>

            <p class="mt-6 text-center text-sm text-gray-600">
                Don’t have an account? <a href="" class="text-blue-500 hover:underline">Sign up for free</a>
            </p>
        </div>

        <!-- Side Image + Text -->
        <div class="hidden md:block md:w-1/2 relative">
            <img src="https://drsusan90210.com/wp-content/uploads/2020/09/401-1536x938.jpg" alt="Jogging Woman" class="w-full h-full object-cover">
            <div class="absolute bottom-0 left-0 p-8 bg-gradient-to-t from-black/70 to-transparent text-white w-full">
                <h2 class="text-2xl font-bold mb-2">Diet Lebih Mudah & Terarah dengan MetaMeal</h2>
                <p class="text-sm leading-relaxed">
                    MetaMeal adalah solusi cerdas untuk membantu Anda mencapai gaya hidup sehat. Dapatkan rencana makan personal, rekomendasi makanan bergizi, dan panduan latihan sesuai kebutuhan Anda.
                </p>
            </div>
        </div>
    </div>

</body>
</html>