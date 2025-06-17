<section class="py-16 bg-red-600">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12 text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">PROJECT</h2>
            <p class="text-xl mb-4">CHECKOUT OUR LATEST PROJECT</p>
            <p class= "max-w-3xl mx-auto">
                Our construction project aims to deliver high-quality, innovative, and durable structures that meet the
                unique needs of our clients.
                From the initial design phase to the final build, we focus on precision, efficiency, and safety.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12" x-data="{ openModal: false, selectedProject: null }">

            <!-- Project 1 -->
            <div class="bg-gray-50 rounded-lg p-6 text-center cursor-pointer hover:shadow-md transition duration-300"
                @click="openModal = true; selectedProject = {
                    title: 'BEVANANDA',
                    logo: '{{ asset('images/bevananda.png') }}',
                    description: 'Detail proyek konstruksi untuk BEVANANDA termasuk desain bangunan dan implementasi struktur yang inovatif.',
                    services: 'Construction Management, Design & Build',
                    year: '2023'
                 }">
                <div class="h-32 flex items-center justify-center mb-4">
                    <img src="{{ asset('images/bevananda.png') }}" alt="BEVANANDA" class="h-20 object-contain">
                </div>
                <h3 class="text-lg font-medium text-gray-800">BEVANANDA</h3>
            </div>

            <!-- Project 2 -->
            <div class="bg-gray-50 rounded-lg p-6 text-center cursor-pointer hover:shadow-md transition duration-300"
                @click="openModal = true; selectedProject = {
                    title: 'AHM',
                    logo: '{{ asset('images/ahm.png') }}',
                    description: 'Proyek infrastruktur besar untuk Apical dengan fokus pada solusi berkelanjutan.',
                    services: 'Engineering, Procurement, Construction',
                    year: '2022'
                 }">
                <div class="h-32 flex items-center justify-center mb-4">
                    <img src="{{ asset('images/ahm.png') }}" alt="Apical" class="h-20 object-contain">
                </div>
                <h3 class="text-lg font-medium text-gray-800">AHM</h3>
            </div>
            <!-- Project 2 -->
            <div class="bg-gray-50 rounded-lg p-6 text-center cursor-pointer hover:shadow-md transition duration-300"
                @click="openModal = true; selectedProject = {
                    title: 'ABIPRAYA',
                    logo: '{{ asset('images/abipraya.jpeg') }}',
                    description: 'Proyek infrastruktur besar untuk Apical dengan fokus pada solusi berkelanjutan.',
                    services: 'Engineering, Procurement, Construction',
                    year: '2022'
                 }">
                <div class="h-32 flex items-center justify-center mb-4">
                    <img src="{{ asset('images/abipraya.jpeg') }}" alt="Apical" class="h-20 object-contain">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Abipraya</h3>
            </div>
            <!-- Project 2 -->
            <div class="bg-gray-50 rounded-lg p-6 text-center cursor-pointer hover:shadow-md transition duration-300"
                @click="openModal = true; selectedProject = {
                    title: 'AHM',
                    logo: '{{ asset('images/recon.png') }}',
                    description: 'Proyek infrastruktur besar untuk Apical dengan fokus pada solusi berkelanjutan.',
                    services: 'Engineering, Procurement, Construction',
                    year: '2022'
                 }">
                <div class="h-32 flex items-center justify-center mb-4">
                    <img src="{{ asset('images/recon.png') }}" alt="Apical" class="h-20 object-contain">
                </div>
                <h3 class="text-lg font-medium text-gray-800">Recon Sarana Utama</h3>
            </div>

            <!-- Tambahkan project lainnya dengan struktur yang sama -->

            <!-- Modal -->
            <div x-show="openModal"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                @click.away="openModal = false">
                <div class="bg-white rounded-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto" x-show="openModal"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95" @click.stop>
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="text-2xl font-bold text-primary" x-text="selectedProject?.title"></h3>
                            <button @click="openModal = false" class="text-gray-500 hover:text-gray-700">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="mb-6 flex justify-center">
                            <img :src="selectedProject?.logo" :alt="selectedProject?.title" class="h-32 object-contain">
                        </div>

                        <div class="space-y-4">
                            <div>
                                <h4 class="font-semibold text-gray-800">Project Description:</h4>
                                <p class="text-gray-600" x-text="selectedProject?.description"></p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800">Services Provided:</h4>
                                <p class="text-gray-600" x-text="selectedProject?.services"></p>
                            </div>

                            <div>
                                <h4 class="font-semibold text-gray-800">Year Completed:</h4>
                                <p class="text-gray-600" x-text="selectedProject?.year"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- View More Button -->
        <div class="text-center">
            <a href="/projects"
                class="inline-block bg-primary hover:bg-primary-dark text-white font-bold py-3 px-8 rounded-lg transition duration-300">
                VIEW MORE PROJECTS
            </a>
        </div>
    </div>

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</section>
