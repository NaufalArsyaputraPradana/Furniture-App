<x-app-layout>
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-amber-800 via-amber-700 to-yellow-600 py-20 overflow-hidden">
        <!-- Jepara Pattern Background -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="catalog-pattern" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <path d="M50 10 C30 30, 30 70, 50 90 C70 70, 70 30, 50 10 Z" fill="rgba(255,255,255,0.1)" />
                        <path d="M10 50 C30 30, 70 30, 90 50 C70 70, 30 70, 10 50 Z" fill="rgba(255,255,255,0.08)" />
                        <circle cx="50" cy="50" r="5" fill="rgba(255,255,255,0.15)" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#catalog-pattern)" />
            </svg>
        </div>

        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-72 h-72 bg-amber-900 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse">
            </div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-yellow-700 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-orange-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <!-- Badge -->
                <div
                    class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3 mb-6 border border-white/20">
                    <svg class="w-5 h-5 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V4z" />
                    </svg>
                    <span class="text-sm font-semibold text-white">Premium Furniture Collection</span>
                </div>

                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Katalog
                    <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">
                        Furniture
                    </span>
                </h1>
                <p class="text-xl md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                    Temukan furniture impian Anda dari koleksi terlengkap dengan kualitas terbaik dan desain eksklusif
                    dari Jepara
                </p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="py-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter Section -->
            <div class="bg-white rounded-3xl shadow-xl mb-12 p-8 border border-gray-100">
                <div class="flex items-center mb-8">
                    <div
                        class="w-10 h-10 bg-gradient-to-br from-amber-500 to-yellow-500 rounded-2xl flex items-center justify-center mr-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Filter & Pencarian Produk</h2>
                </div>

                <form method="get" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Search Input -->
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Cari Produk</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                    </svg>
                                </div>
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari furniture impian Anda..."
                                    class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-2xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50 focus:bg-white transition-all duration-300">
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Kategori</label>
                            <select name="category"
                                class="w-full border border-gray-300 rounded-2xl p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50 focus:bg-white transition-all duration-300">
                                <option value="">Semua Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ request('category') == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Sort Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">Urutkan</label>
                            <select name="sort"
                                class="w-full border border-gray-300 rounded-2xl p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-gray-50 focus:bg-white transition-all duration-300">
                                <option value="newest" {{ request('sort') == 'newest' ? 'selected' : '' }}>Terbaru
                                </option>
                                <option value="name" {{ request('sort') == 'name' ? 'selected' : '' }}>Nama A-Z
                                </option>
                                <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>Harga
                                    Terendah</option>
                                <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>Harga
                                    Tertinggi</option>
                            </select>
                        </div>
                    </div>

                    <!-- Filter Buttons -->
                    <div class="flex flex-wrap gap-4 pt-4 border-t border-gray-100">
                        <button type="submit"
                            class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-2xl hover:from-amber-700 hover:to-amber-800 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 shadow-lg">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                            Cari Produk
                        </button>

                        @if (request()->hasAny(['search', 'category', 'sort']))
                            <a href="{{ route('catalog.index') }}"
                                class="inline-flex items-center px-6 py-3 border-2 border-gray-300 text-gray-700 font-semibold rounded-2xl hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-300">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Reset Filter
                            </a>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Products Grid -->
            @if ($products->count() > 0)
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
                    @foreach ($products as $product)
                        <div
                            class="group backdrop-blur-sm bg-white/90 rounded-3xl shadow-xl hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2 border border-amber-200/50">
                            <!-- Product Image -->
                            <div
                                class="aspect-square bg-gradient-to-br from-amber-50 to-yellow-50 p-6 flex items-center justify-center relative overflow-hidden">
                                @if ($product->thumbnail_path)
                                    <img src="{{ asset('storage/' . $product->thumbnail_path) }}"
                                        alt="{{ $product->name }}"
                                        class="w-full h-full object-cover rounded-2xl group-hover:scale-110 transition-transform duration-500">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-amber-100 to-yellow-100 rounded-2xl flex items-center justify-center">
                                        <svg class="w-24 h-24 text-amber-600 group-hover:scale-110 transition-transform duration-300"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 5v4M16 5v4" />
                                        </svg>
                                    </div>
                                @endif

                                <!-- Category Badge -->
                                @if ($product->category)
                                    <div class="absolute top-4 left-4">
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold bg-amber-100 text-amber-800">
                                            {{ $product->category->name }}
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <!-- Product Info -->
                            <div class="p-6">
                                <h3
                                    class="text-lg font-bold text-gray-900 mb-2 group-hover:text-amber-700 transition-colors duration-300 line-clamp-2">
                                    {{ $product->name }}
                                </h3>

                                @if ($product->description)
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                                        {{ Str::limit($product->description, 80) }}
                                    </p>
                                @endif

                                <!-- Price and Action -->
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-xl font-bold text-amber-700">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </div>
                                        @if ($product->compare_at_price && $product->compare_at_price > $product->price)
                                            <div class="text-sm text-gray-500 line-through">
                                                Rp {{ number_format($product->compare_at_price, 0, ',', '.') }}
                                            </div>
                                        @endif
                                    </div>

                                    <a href="{{ route('catalog.show', $product->slug) }}"
                                        class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-amber-600 to-amber-700 text-white text-sm font-semibold rounded-xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                        <span>Detail</span>
                                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if ($products->hasPages())
                    <div class="flex justify-center">
                        <div class="backdrop-blur-sm bg-white/90 rounded-2xl shadow-lg p-4 border border-amber-200/50">
                            {{ $products->links() }}
                        </div>
                    </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div
                        class="w-32 h-32 bg-gradient-to-br from-amber-100 to-yellow-200 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-16 h-16 text-amber-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Produk Tidak Ditemukan</h3>
                    <p class="text-gray-600 mb-8 max-w-md mx-auto">
                        Maaf, tidak ada produk yang sesuai dengan pencarian Anda. Silakan coba dengan kata kunci atau
                        filter yang berbeda.
                    </p>
                    <a href="{{ route('catalog.index') }}"
                        class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-2xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4h5l2 5-2.5 1.5a11 11 0 0011 11L17 17l5 2v5a2 2 0 01-2 2h-1C9 26 1 18 1 8V7a2 2 0 012-2z" />
                        </svg>
                        Lihat Semua Produk
                    </a>
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
