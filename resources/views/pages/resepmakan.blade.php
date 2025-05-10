<x-app title="Resep Makanan">
  <div class="space-y-4">
    <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
      <div>
        <h2 class="text-xl font-bold">Rivaldo</h2>
        <p class="text-sm font-semibold">Senin, 8 April 2025</p>
        <p class="text-sm">Resep Ayam</p>
      </div>
      <button onclick="showModal('ayam')" class="focus:outline-none">
        <i class="fas fa-arrow-right text-gray-600"></i>
      </button>
    </div>
    <!-- Add other content cards here... -->
  </div>

  <div id="resepModal" class="fixed inset-0 bg-white/50 backdrop-blur-sm flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-xl relative">
      <button onclick="toggleModal()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
        <i class="fas fa-times"></i>
      </button>
      <div id="modalContent">
        <!-- Konten resep dimasukkan lewat JS -->
      </div>
    </div>
  </div>
  <!-- Script -->
  <script>
    function toggleModal() {
      const modal = document.getElementById("resepModal");
      modal.classList.toggle("hidden");
    }

    function showModal(type) {
      const content = {
        ayam: `
          <h3 class="text-2xl font-bold mb-4">🍗 Ayam Goreng Renyah</h3>
          <p class="font-semibold">Bahan:</p>
          <ul class="list-disc list-inside mb-4">
            <li>500 gram ayam</li>
            <li>3 siung bawang putih</li>
            <li>1 sdt ketumbar</li>
            <li>1 sdt garam</li>
            <li>1 ruas kunyit</li>
            <li>Minyak goreng secukupnya</li>
          </ul>
          <p class="font-semibold">Cara Membuat:</p>
          <ol class="list-decimal list-inside">
            <li>Haluskan bumbu, balurkan ke ayam dan diamkan.</li>
            <li>Rebus ayam sampai air menyusut.</li>
            <li>Goreng dalam minyak panas hingga kecoklatan.</li>
          </ol>
        `
      };

      document.getElementById("modalContent").innerHTML = content[type];
      toggleModal();
    }

    function toggleProfile() {
      const popup = document.getElementById('profilePopup');
      popup.classList.toggle('hidden');
    }

    function openModal() {
      const modal = document.getElementById('editProfileModal');
      modal.classList.remove('hidden');
      modal.classList.add('flex'); // Supaya modal tampil di tengah
      document.getElementById('profilePopup').classList.add('hidden'); // Tutup pop-up profile
    }

    function closeModal() {
      const modal = document.getElementById('editProfileModal');
      modal.classList.remove('flex');
      modal.classList.add('hidden');
    }

    window.addEventListener('click', function(e) {
      const popup = document.getElementById('profilePopup');
      const modal = document.getElementById('editProfileModal');
      const isInsidePopup = popup.contains(e.target);
      const isButton = e.target.closest('button');
      const isInsideModal = modal.contains(e.target);

      if (!isInsidePopup && !isButton && popup && !modal.classList.contains('flex')) {
        popup.classList.add('hidden');
      }
    });
  </script>
</x-app>
