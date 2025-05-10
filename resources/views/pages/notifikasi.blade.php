<x-app title="Notifikasi">
  <div>
    <h2 class="text-2xl font-bold mb-4">Notifikasi</h2>
    <div class="bg-gray-200 rounded-xl p-4 space-y-4">
      <?php foreach ($notifikasi as $notif): ?>
        <div class="bg-white rounded-xl p-4 shadow-md">
          <p class="font-bold"><?= $notif["tanggal"] ?></p>
          <p class="text-gray-700"><?= $notif["pesan"] ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</x-app>