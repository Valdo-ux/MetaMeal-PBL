<x-app>
    <!-- Resep List -->
    <section class="space-y-4">
        <!-- Resep Ayam -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold">Rivaldo</h2>
                <p class="text-sm font-semibold">Senin, 8 April 2025</p>
                <p>Resep Ayam</p>
            </div>
            <div class="space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn" data-nama="Rivaldo"
                    data-tanggal="Senin, 8 April 2025" data-resep="Resep Ayam">
                    Ubah
                </button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
            </div>
        </div>

        <!-- More recipes can go here -->
    </section>
    <!-- Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold mb-4">Tambah Resep</h2>
            <form id="editForm">
                <input type="hidden" id="modalMode" value="edit" />
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Nama</label>
                    <input type="text" id="modalNama" class="w-full border rounded p-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Tanggal</label>
                    <input type="date" id="modalTanggal" class="w-full border rounded p-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Resep Jenis Makanan</label>
                    <input type="text" id="modalResep" class="w-full border rounded p-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Details</label>
                    <textarea class="w-full border rounded p-2 resize-none" id="details" name="details" rows="3"
                        required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Kalori</label>
                    <input type="text" id="modalKalori" class="w-full border rounded p-2" />
                </div>

                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Status</label>
                    <select class="w-full border rounded p-2" id="edit-status" name="status" required>
                        <option value="not yet">Not Yet</option>
                        <option value="finish">Finish</option>
                    </select>
                </div>

                <div class="flex justify-end space-x-2">
                    <button type="button" id="closeModal"
                        class="px-4 py-2 bg-gray-400 text-white rounded">Batal</button>
                    <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script -->
    <script>
        const modal = document.getElementById("editModal");
        const closeModal = document.getElementById("closeModal");
        const modalNama = document.getElementById("modalNama");
        const modalTanggal = document.getElementById("modalTanggal");
        const modalResep = document.getElementById("modalResep");
        const modalMode = document.getElementById("modalMode");
        const section = document.querySelector("section.space-y-4");

        document.querySelectorAll(".open-modal-btn").forEach(button => {
            button.addEventListener("click", () => {
                modalMode.value = "edit";
                modalNama.value = button.getAttribute("data-nama");
                modalTanggal.value = button.getAttribute("data-tanggal");
                modalResep.value = button.getAttribute("data-resep");
                modal.classList.remove("hidden");
            });
        });

        closeModal.addEventListener("click", () => {
            modal.classList.add("hidden");
        });

        document.getElementById("editForm").addEventListener("submit", function (e) {
            e.preventDefault();
            const mode = modalMode.value;

            if (mode === "add") {
                const newItem = document.createElement("div");
                newItem.className = "bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center";
                newItem.innerHTML = `
          <div>
            <h2 class="text-xl font-bold">${modalNama.value}</h2>
            <p class="text-sm font-semibold">${modalTanggal.value}</p>
            <p>${modalResep.value}</p>
          </div>
          <div class="space-x-2">
            <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
              data-nama="${modalNama.value}"
              data-tanggal="${modalTanggal.value}"
              data-resep="${modalResep.value}">
              Ubah
            </button>
            <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
          </div>
        `;
                section.appendChild(newItem);

                // Re-enable the edit button
                newItem.querySelector(".open-modal-btn").addEventListener("click", function () {
                    modalMode.value = "edit";
                    modalNama.value = modalNama.value;
                    modalTanggal.value = modalTanggal.value;
                    modalResep.value = modalResep.value;
                    modal.classList.remove("hidden");
                });
            }

            modal.classList.add("hidden");
        });
    </script>
</x-app>