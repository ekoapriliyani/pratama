<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo dan Nama Perusahaan -->
            <div class="flex items-center">
                <!-- Logo -->
                <a href="/" class="flex items-center">
                    <img src="{{ asset('images/logo.jpg') }}" alt="PT. PRATAMA BANGUN LESTARI" class="h-12 mr-3">
                    <div>
                        <div class="text-xl font-bold text-primary">PT. PRATAMA BANGUN LESTARI</div>
                        <div class="text-xs text-gray-600">General Contractor - Construction - Fabrication and Supplier
                        </div>
                    </div>
                </a>
            </div>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/"
                    class="font-medium text-gray-900 hover:text-secondary border-b-2 border-transparent hover:border-secondary py-2 transition duration-300">HOME</a>
                <a href="/products"
                    class="font-medium text-gray-900 hover:text-secondary border-b-2 border-transparent hover:border-secondary py-2 transition duration-300">PRODUCT</a>
                <a href="/projects"
                    class="font-medium text-gray-900 hover:text-secondary border-b-2 border-transparent hover:border-secondary py-2 transition duration-300">OUR
                    PROJECT</a>
                <a href="/services"
                    class="font-medium text-gray-900 hover:text-secondary border-b-2 border-transparent hover:border-secondary py-2 transition duration-300">SERVICE</a>
                <a href="/blog"
                    class="font-medium text-gray-900 hover:text-secondary border-b-2 border-transparent hover:border-secondary py-2 transition duration-300">BLOG</a>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-gray-700 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu (Hidden by default) -->
        <div id="mobile-menu" class="hidden md:hidden pb-4">
            <a href="/" class="block py-2 text-gray-700 hover:text-secondary">HOME</a>
            <a href="/products" class="block py-2 text-gray-700 hover:text-secondary">PRODUCT</a>
            <a href="/projects" class="block py-2 text-gray-700 hover:text-secondary">OUR PROJECT</a>
            <a href="/services" class="block py-2 text-gray-700 hover:text-secondary">SERVICE</a>
            <a href="/blog" class="block py-2 text-gray-700 hover:text-secondary">BLOG</a>
        </div>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle')?.addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenu.classList.toggle('hidden');
    });
</script>
