<div id="editProfileModal" class="fixed inset-0 bg-white/50 backdrop-blur-sm hidden items-center justify-center z-50">
    <div class="bg-white p-6 rounded-2xl shadow-2xl w-full max-w-md mx-4 relative">
      <h2 class="text-2xl font-bold mb-4 text-center">Edit Profil</h2>
      <form class="space-y-4">
        <div>
          <label class="block text-gray-700">Nama</label>
          <input type="text" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5F8C2D]" placeholder="Nama Lengkap">
        </div>
        <div>
          <label class="block text-gray-700">Email</label>
          <input type="email" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5F8C2D]" placeholder="Email">
        </div>
        <div>
          <label class="block text-gray-700">Umur</label>
          <input type="number" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5F8C2D]" placeholder="Umur">
        </div>
        <div>
          <label class="block text-gray-700">Berat (kg)</label>
          <input type="number" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5F8C2D]" placeholder="Berat Badan">
        </div>
        <div>
          <label class="block text-gray-700">Tinggi (cm)</label>
          <input type="number" class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#5F8C2D]" placeholder="Tinggi Badan">
        </div>

        <div class="flex justify-end mt-4">
          <button type="button" onclick="closeModal()" class="mr-2 px-4 py-2 rounded-lg bg-gray-300 hover:bg-gray-400">Batal</button>
          <button type="submit" class="px-4 py-2 rounded-lg bg-[#5F8C2D] hover:bg-[#4a7224] text-white">Simpan</button>
        </div>
      </form>
    </div>
  </div>