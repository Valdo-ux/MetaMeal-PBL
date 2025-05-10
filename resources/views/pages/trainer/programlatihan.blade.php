<x-app>
    <!-- Tambah Program Latihan Button -->
    <div class="flex justify-end mb-4">
        <button id="openAddModal" class="bg-blue-500 text-white px-4 py-2 rounded shadow hover:bg-blue-600 transition">
            + Tambah Program Latihan
        </button>
    </div>

    <!-- Program Latihan List -->
    <section class="space-y-4">
        <!-- Latihan Bahu -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold">Rivaldo</h2>
                <p class="text-sm font-semibold">Senin, 8 April 2025</p>
                <p>Latihan Bahu</p>
            </div>
            <div class="space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn" data-nama="Rivaldo"
                    data-tanggal="2025-04-08" data-latihan="Latihan Bahu"
                    data-detail="Angkat dumbbell dan tekan ke atas" data-status="not yet">Ubah</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
            </div>
        </div>

        <!-- Kardio -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold">Rivaldo</h2>
                <p class="text-sm font-semibold">Selasa, 9 April 2025</p>
                <p>Kardio</p>
            </div>
            <div class="space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn" data-nama="Rivaldo"
                    data-tanggal="2025-04-09" data-latihan="Kardio" data-detail="Lari di treadmill selama 30 menit"
                    data-status="not yet">Ubah</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
            </div>
        </div>

        <!-- Latihan Perut -->
        <div class="bg-gray-200 p-4 rounded-lg shadow-md flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold">Rivaldo</h2>
                <p class="text-sm font-semibold">Rabu, 10 April 2025</p>
                <p>Latihan Perut</p>
            </div>
            <div class="space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn" data-nama="Rivaldo"
                    data-tanggal="2025-04-10" data-latihan="Latihan Perut" data-detail="Sit-up 3 set x 15 reps"
                    data-status="finish">Ubah</button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div id="editModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="bg-white rounded-lg shadow-lg p-6 w-96">
            <h2 class="text-xl font-bold mb-4">Tambah Program Latihan</h2>
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
                    <label class="block text-sm font-semibold mb-1">Jenis Latihan</label>
                    <input type="text" id="modalLatihan" class="w-full border rounded p-2" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-semibold mb-1">Details</label>
                    <textarea class="w-full border rounded p-2 resize-none" id="details" name="details" rows="3"
                        required></textarea>
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
    <script>
        const modal = document.getElementById("editModal");
        const closeModal = document.getElementById("closeModal");
        const modalMode = document.getElementById("modalMode");
        const section = document.querySelector("section.space-y-4");
        const modalNama = document.getElementById("modalNama");
        const modalTanggal = document.getElementById("modalTanggal");
        const modalLatihan = document.getElementById("modalLatihan");
        const modalDetails = document.getElementById("details");
        const modalStatus = document.getElementById("edit-status");

        document.querySelectorAll(".open-modal-btn").forEach(button => {
            button.addEventListener("click", () => {
                modalMode.value = "edit";
                modalNama.value = button.getAttribute("data-nama");
                modalTanggal.value = button.getAttribute("data-tanggal");
                modalLatihan.value = button.getAttribute("data-latihan");
                modalDetails.value = button.getAttribute("data-detail");
                modalStatus.value = button.getAttribute("data-status");
                modal.classList.remove("hidden");
            });
        });

        document.getElementById("openAddModal").addEventListener("click", () => {
            modalMode.value = "add";
            modalNama.value = "";
            modalTanggal.value = "";
            modalLatihan.value = "";
            modalDetails.value = "";
            modalStatus.value = "not yet";
            modal.classList.remove("hidden");
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
                <p>${modalLatihan.value}</p>
              </div>
              <div class="space-x-2">
                <button class="bg-green-500 text-white px-4 py-2 rounded open-modal-btn"
                  data-nama="${modalNama.value}"
                  data-tanggal="${modalTanggal.value}"
                  data-latihan="${modalLatihan.value}"
                  data-detail="${modalDetails.value}"
                  data-status="${modalStatus.value}">
                  Ubah
                </button>
                <button class="bg-red-500 text-white px-4 py-2 rounded">Hapus</button>
              </div>
            `;
                section.appendChild(newItem);

                newItem.querySelector(".open-modal-btn").addEventListener("click", function () {
                    modalMode.value = "edit";
                    modalNama.value = this.getAttribute("data-nama");
                    modalTanggal.value = this.getAttribute("data-tanggal");
                    modalLatihan.value = this.getAttribute("data-latihan");
                    modalDetails.value = this.getAttribute("data-detail");
                    modalStatus.value = this.getAttribute("data-status");
                    modal.classList.remove("hidden");
                });

                alert("Program latihan berhasil ditambahkan!");
            } else {
                alert("Program latihan berhasil diubah: " + modalLatihan.value);
            }

            modal.classList.add("hidden");
        });
    </script>
</x-app>