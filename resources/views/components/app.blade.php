<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{$title ?? "MyPages"}}</title>
  @vite('resources/css/app.css')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" defer></script>
</head>
<body class="bg-gray-100">
  <div class="flex flex-col md:flex-row h-screen transition-all duration-300 ease-in-out">
    
    <!-- Sidebar -->
    <x-sideBar></x-sideBar>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      <!-- Header -->
      <x-headerBar></x-headerBar>

      {{-- CONTENT UTAMA --}}
      {{$slot}}
    </main>
  </div>

  <!-- Modal Edits Profil -->
  <x-modal.editProfil></x-modal.editProfil>

  <!-- Script -->
   <script>
    window.addEventListener('DOMContentLoaded', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
  <script>
    function toggleProfile() {
      const popup = document.getElementById('profilePopup');
      popup.classList.toggle('hidden');
    }

    function openModal() {
  const modal = document.getElementById('editProfileModal');
  modal.classList.remove('hidden');
  modal.classList.add('flex'); // <-- Ini penting supaya modal tampil di tengah
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
  
</body>
</html>
