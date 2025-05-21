<x-appLanding title="Home">
    <!-- Hero Sections -->
    <section class="flex flex-col md:flex-row items-center justify-between px-8 md:px-16 py-12 bg-custom-green">
        <div class="md:w-1/2 mb-8 md:mb-0">
            <h1 class="text-3xl md:text-4xl font-bold text-white mb-4">Diet Lebih Mudah & Terarah dengan <span class="text-white">MetaMeal</span></h1>
            <p class="text-sm text-white mb-6 max-w-md">MetaMeal adalah solusi cerdas untuk membantu Anda mencapai gaya hidup sehat. Dapatkan rencana makan personal, rekomendasi makanan bergizi, dan panduan latihan sesuai kebutuhan Anda.</p>
            <div class="flex space-x-4">
                <a href="login" class="border border-white text-white px-4 py-2 rounded hover:bg-white hover:text-green-700 font-semibold">Login</a>
                <a href="daftar" class="border border-white text-white px-4 py-2 rounded hover:bg-white hover:text-green-700 font-semibold">Register</a>
            </div>
        </div>
        <div class="md:w-1/2">
            <div class="relative">
                <img src="images/landing.png" alt="Diet Image" class="rounded shadow-lg max-w-full h-auto">
                <div class="absolute top-0 left-0 w-full h-full border-dotted border-2 border-blue-200 opacity-25 pointer-events-none"></div>
            </div>
        </div>
    </section>
</x-appLanding>