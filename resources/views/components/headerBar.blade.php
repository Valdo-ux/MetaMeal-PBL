<div class="flex justify-between items-center mb-6 bg-[#5F8C2D] p-4 rounded-lg text-white shadow">
    <div class="flex items-center bg-white rounded-full shadow-md p-2 w-full md:w-1/2">
      <i class="fas fa-search text-gray-400 ml-2"></i>
      <input type="text" placeholder="Search..." class="ml-2 w-full border-none focus:outline-none bg-transparent text-black">
    </div>

    <!-- User Icons & Pop-up -->
    <div class="hidden md:flex items-center space-x-4 relative">
      <a href="{{route('notifikasi')}}" class="text-white text-xl hover:text-gray-200">
        <i class="fas fa-bell"></i>
      </a>

      <button onclick="toggleProfile()" class="text-white text-xl focus:outline-none">
        <i class="fas fa-user-circle"></i>
      </button>

      <!-- Pop-up Profile -->
      <div id="profilePopup" class="hidden absolute right-0 top-16 w-80 bg-white border border-gray-300 rounded-lg shadow-xl z-50 p-6">
        <div class="text-center">
          <img src="profil.jpeg" class="w-24 h-24 rounded-full mx-auto mb-3 border" alt="Foto Profil">
          <h2 class="text-lg font-bold text-gray-800">Adrian Rizqullah</h2>
          <p class="text-gray-600 mb-2">adrian@gmail.com</p>
          <div class="text-left text-sm text-gray-700 space-y-1 mb-4">
            <p><strong>Umur:</strong> 19 tahun</p>
            <p><strong>Berat:</strong> 57 kg</p>
            <p><strong>Tinggi:</strong> 160 cm</p>
          </div>

          <!-- Tombol Ubah Profil -->
          <button onclick="openModal()" class="bg-[#5F8C2D] hover:bg-[#4a7224] text-white px-4 py-2 rounded-full">
            Ubah Profil
          </button>
        </div>
      </div>
    </div>
  </div>