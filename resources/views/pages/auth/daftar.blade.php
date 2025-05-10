<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MetaMeal - Login & Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function showTab(tab) {
      document.getElementById('loginForm').classList.add('hidden');
      document.getElementById('registerForm').classList.add('hidden');
      document.getElementById('loginTab').classList.remove('border-blue-600', 'text-blue-600');
      document.getElementById('registerTab').classList.remove('border-blue-600', 'text-blue-600');

      if (tab === 'login') {
        document.getElementById('loginForm').classList.remove('hidden');
        document.getElementById('loginTab').classList.add('border-blue-600', 'text-blue-600');
      } else {
        document.getElementById('registerForm').classList.remove('hidden');
        document.getElementById('registerTab').classList.add('border-blue-600', 'text-blue-600');
      }
    }
  </script>
</head>
<body class="min-h-screen bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center">

  <div class="w-full max-w-6xl bg-white rounded-xl shadow-lg flex overflow-hidden">
    <!-- Left Panel -->
    <div class="w-full md:w-1/2 p-10 bg-white bg-opacity-80 backdrop-blur-md relative z-10">
      <div class="flex justify-center mb-4">
        <img src="https://via.placeholder.com/50" alt="Logo" class="h-12 w-12">
      </div>

      <div class="text-center mb-6">
        <h1 class="text-2xl font-semibold text-gray-800">MetaMeal</h1>
      </div>

      <!-- Tabs -->
      <div class="flex mb-6 border-b border-gray-300">
        <button id="login.blade.php" onclick="showTab('login')" class="text-sm font-medium px-4 pb-2 border-b-2 text-gray-600">Login</button>
        <button id="daftar.blade.php" onclick="showTab('register')" class="text-sm font-medium px-4 pb-2 border-b-2 text-blue-600 border-blue-600">Registrasi</button>
      </div>

      <!-- Login Form -->
      <form id="loginForm" class="hidden">
        <div class="mb-4">
          <label class="block text-sm mb-1">Email</label>
          <input type="email" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your email">
        </div>
        <div class="mb-4">
          <label class="block text-sm mb-1">Password</label>
          <input type="password" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your password">
        </div>
        <div class="flex items-center justify-between mb-4">
          <label class="text-sm"><input type="checkbox" class="mr-2">Remember me</label>
          <a href="#" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Sign In</button>
      </form>

      <!-- Register Form -->
      <form id="registerForm">
        <div class="mb-3">
          <label class="block text-sm mb-1">Email</label>
          <input type="email" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Password</label>
          <input type="password" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your password">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Name</label>
          <input type="text" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Name">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Age</label>
          <input type="number" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Age">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Gender</label>
          <input type="text" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Gender">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Weight</label>
          <input type="number" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Weight">
        </div>
        <div class="mb-3">
          <label class="block text-sm mb-1">Height</label>
          <input type="number" class="w-full border border-gray-300 p-2 rounded-md" placeholder="Enter your Height">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">Sign up</button>
      </form>
    </div>

    <!-- Right Panel -->
    <div class="hidden md:block md:w-1/2 relative">
      <img src="https://images.unsplash.com/photo-1571019613914-85f342c1d4a7" alt="Jogging Woman" class="w-full h-full object-cover">
      <div class="absolute bottom-0 left-0 p-8 bg-gradient-to-t from-black/70 to-transparent text-white w-full">
        <h2 class="text-2xl font-bold mb-2">Diet Lebih Mudah & Terarah dengan MetaMeal</h2>
        <p class="text-sm leading-relaxed">
          MetaMeal adalah solusi cerdas untuk membantu Anda mencapai gaya hidup sehat. Dapatkan rencana makan personal, rekomendasi makanan bergizi, dan panduan latihan sesuai kebutuhan Anda.
        </p>
      </div>
    </div>
  </div>

  <script>
    // Set tab default ke "register"
    window.onload = () => {
      showTab('register');
    };
  </script>
</body>
</html>