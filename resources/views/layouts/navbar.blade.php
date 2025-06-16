<nav class="bg-gray-100 border-b border-gray-200">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <!-- Logo -->
            <div>
                <a href="/" class="text-2xl font-extrabold text-primary">PT. PRATAMA BANGUN LESTARI</a>
                <p class="text-sm text-gray-600">General Contractor - Construction - Fabrication and Supplier</p>
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

            <!-- Menu Items (Desktop) -->
            <div class="hidden md:flex space-x-8">
                <a href="/" class="font-medium text-gray-900 hover:text-secondary">HOME</a>
                <a href="/products" class="font-medium text-gray-900 hover:text-secondary">PRODUCT</a>
                <a href="/projects" class="font-medium text-gray-900 hover:text-secondary">OUR PROJECT</a>
                <a href="/services" class="font-medium text-gray-900 hover:text-secondary">SERVICE</a>
                <a href="/blog" class="font-medium text-gray-900 hover:text-secondary">BLOG</a>
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
