<!-- Tombol Hamburger untuk Mobile -->
<div class="md:hidden flex justify-between items-center bg-[#5F8C2D] p-4 text-white">
    <div class="text-xl font-bold">MetaMeal</div>
    <button id="toggleSidebar" class="text-2xl transition-transform duration-200 hover:scale-110">
        <i class="fas fa-bars"></i>
    </button>
</div>

<!-- Overlay hitam untuk backdrop -->
<div id="sidebarOverlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-40 hidden md:hidden"></div>

<!-- Sidebar -->
<aside id="sidebar"
    class="fixed top-0 left-0 h-full w-64 bg-[#A0D468] text-white p-4 transform -translate-x-full transition-all duration-300 ease-in-out z-50 md:static md:translate-x-0 md:block shadow-lg">
    <div class="flex items-center mb-8">
        <img 
            src="https://storage.googleapis.com/a1aa/image/DIghuSu04qP-elliIsS0Jrs4ZTYTe9D7qQ-sjiN6dtM.jpg" 
            alt="MetaMeal Logo" 
            class="w-12 h-12 mr-2 rounded-full shadow"
        />
        <div>
            <h1 class="text-2xl font-bold">MetaMeal</h1>
            <p class="italic">Selamat Datang</p>
        </div>
    </div>

    <nav id="navbarku">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('beranda') }}" 
                    class="flex items-center rounded-lg p-2 font-semibold text-lg transition-all duration-200 ease-in-out
                        {{ request()->routeIs('beranda') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                    <i class="fas fa-home mr-3"></i> Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('resep') }}" 
                    class="flex items-center rounded-lg p-2 font-semibold text-lg transition-all duration-200 ease-in-out
                        {{ request()->routeIs('resep') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                    <i class="fas fa-utensils mr-3"></i> Program Makan
                </a>
            </li>
            <li>
                <a href="{{ route('latihan') }}" 
                    class="flex items-center rounded-lg p-2 font-semibold text-lg transition-all duration-200 ease-in-out
                        {{ request()->routeIs('latihan') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                    <i class="fas fa-running mr-3"></i> Program Latihan
                </a>
            </li>
            <li>
                <a href="{{ route('progres') }}" 
                    class="flex items-center rounded-lg p-2 font-semibold text-lg transition-all duration-200 ease-in-out
                        {{ request()->routeIs('progres') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                    <i class="fas fa-chart-line mr-3"></i> Laporan Latihan
                </a>
            </li>
        </ul>
    </nav>
</aside>

<!-- Script untuk toggle sidebar -->
<script>
    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("sidebarOverlay");

    toggleBtn.addEventListener("click", () => {
        sidebar.classList.toggle("-translate-x-full");
        overlay.classList.toggle("hidden");
    });

    overlay.addEventListener("click", () => {
        sidebar.classList.add("-translate-x-full");
        overlay.classList.add("hidden");
    });
</script>
