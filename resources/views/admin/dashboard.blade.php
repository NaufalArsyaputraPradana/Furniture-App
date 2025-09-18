<x-app-layout>
    <!-- Hero Header Section -->
    <section class="relative bg-gradient-to-br from-amber-700 via-amber-600 to-yellow-500 py-16 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-amber-800 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse">
            </div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-yellow-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-64 h-64 bg-orange-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-white/90">Admin Control Panel</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Dashboard Admin</h1>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Kelola toko furniture Anda dengan mudah dan efisien
                </p>
            </div>
        </div>
    </section>

    <div class="py-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm font-medium mb-2">Total Produk</div>
                            <div class="text-4xl font-bold text-gray-900 mb-1">{{ $stats['products'] }}</div>
                            <div class="text-emerald-600 text-sm font-medium">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                Aktif
                            </div>
                        </div>
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4-8-4m16 0v10l-8 4-8-4V7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm font-medium mb-2">Total Kategori</div>
                            <div class="text-4xl font-bold text-gray-900 mb-1">{{ $stats['categories'] }}</div>
                            <div class="text-amber-600 text-sm font-medium">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                    </path>
                                </svg>
                                Tersedia
                            </div>
                        </div>
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="text-gray-600 text-sm font-medium mb-2">Produk Aktif</div>
                            <div class="text-4xl font-bold text-gray-900 mb-1">{{ $stats['active_products'] }}</div>
                            <div class="text-purple-600 text-sm font-medium">
                                <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                Dipublikasi
                            </div>
                        </div>
                        <div
                            class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-8">
                <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center">
                    <div
                        class="w-8 h-8 bg-gradient-to-br from-amber-500 to-amber-600 rounded-xl flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    Aksi Cepat
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4-8-4m16 0v10l-8 4-8-4V7"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Kelola Produk</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">Tambah, edit, dan kelola produk furniture dengan
                        fitur lengkap dan mudah digunakan</p>
                    <div class="space-y-3">
                        <a href="{{ route('admin.products.index') }}"
                            class="flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            Daftar Produk
                        </a>
                        <a href="{{ route('admin.products.create') }}"
                            class="flex items-center justify-center w-full px-6 py-3 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-amber-300 hover:text-amber-700 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Produk Baru
                        </a>
                    </div>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Kelola Kategori</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">Atur kategori produk untuk organisasi yang lebih baik
                        dan navigasi yang mudah</p>
                    <div class="space-y-3">
                        <a href="{{ route('admin.categories.index') }}"
                            class="flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                            </svg>
                            Daftar Kategori
                        </a>
                        <a href="{{ route('admin.categories.create') }}"
                            class="flex items-center justify-center w-full px-6 py-3 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-emerald-300 hover:text-emerald-700 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            Tambah Kategori Baru
                        </a>
                    </div>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100">
                    <div class="flex items-center mb-6">
                        <div
                            class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <h2 class="text-xl font-bold text-gray-900">Pengaturan</h2>
                    </div>
                    <p class="text-gray-600 mb-6 leading-relaxed">Konfigurasi nama toko, logo, dan pengaturan umum
                        sistem</p>
                    <div class="space-y-3">
                        <a href="{{ route('admin.settings.edit') }}"
                            class="flex items-center justify-center w-full px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-semibold rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Buka Pengaturan
                        </a>
                        <a href="{{ route('home') }}" target="_blank"
                            class="flex items-center justify-center w-full px-6 py-3 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-purple-300 hover:text-purple-700 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                            Lihat Website
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
