<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MetaMeal - Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center">

  <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg flex overflow-hidden">
    <!-- Left Panel -->
    <div class="w-full md:w-1/2 p-10 bg-white bg-opacity-80 backdrop-blur-md relative z-10">
      <div class="flex justify-center mb-4">
        <img src="{{ asset('images/logo.jpeg') }}" class="h-16 w-16 rounded-full">
      </div>

      <div class="text-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">MetaMeal</h1>
      </div>

      <!-- Tabs -->
      <div class="flex mb-6 border-b border-gray-300">
        <a href="{{ url('login') }}" class="text-sm font-medium px-4 pb-2 border-b-2 text-gray-600 hover:text-blue-600 hover:border-blue-600">Login</a>
        <a href="{{ url('daftar') }}" class="text-sm font-medium px-4 pb-2 border-b-2 border-blue-600 text-blue-600">Registrasi</a>
      </div>

      <!-- Register Form -->
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="block text-sm mb-1">Email</label>
          <input type="email" name="email" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Password</label>
          <input type="password" name="password" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your password" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Name</label>
          <input type="text" name="name" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Name" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Age</label>
          <input type="number" name="age" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Age" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Gender</label>
          <input type="text" name="gender" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Gender" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Weight</label>
          <input type="number" name="weight" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Weight" required>
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Height</label>
          <input type="number" name="height" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Height" required>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Sign up</button>
      </form>
    </div>

    <!-- Right Panel -->
    <div class="hidden md:block md:w-1/2 relative">
      <img src="images/gambar 2.jpeg " alt="Jogging Man" class="w-full h-full object-cover">
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
