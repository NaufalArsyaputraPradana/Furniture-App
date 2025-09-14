<x-app-layout>
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-amber-700 via-amber-600 to-yellow-500 py-20 overflow-hidden">
        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 bg-amber-800 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-yellow-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-orange-500 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 4s;"></div>
        </div>
        
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 opacity-10">
            <div class="h-full w-full bg-white" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <span class="text-sm font-medium text-white/90">🛋️ Premium Furniture Collection</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Katalog <span class="bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent">Furniture</span>
                </h1>
                <p class="text-xl md:text-2xl text-white/70 max-w-3xl mx-auto leading-relaxed">
                    Temukan furniture impian Anda dari koleksi terlengkap dengan kualitas terbaik dan desain eksklusif
                </p>
            </div>
        </div>
    </section>

    <div class="py-12 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Search and Filter Section -->
            <div class="bg-white/80 backdrop-blur-lg rounded-2xl shadow-xl mb-8 p-8 border border-white/20">
                <h2 class="text-2xl font-bold bg-gradient-to-r from-amber-600 to-yellow-600 bg-clip-text text-transparent mb-8 flex items-center">
                    <div class="w-8 h-8 bg-gradient-to-br from-amber-500 to-yellow-500 rounded-xl flex items-center justify-center mr-3">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z"></path>
                        </svg>
                    </div>
                    Filter & Pencarian Produk
                </h2>
                
                <form method="get" class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6">
                        <!-- Search Input -->
                        <div class="lg:col-span-2">
                            <label class="block text-sm font-semibold text-gray-700 mb-3">🔍 Cari Produk</label>
                            <div class="relative group">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-amber-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input type="text" 
                                       name="q" 
                                       value="{{ request('q') }}" 
                                       placeholder="Ketik nama produk, brand, atau deskripsi..." 
                                       class="block w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-white/90 text-gray-900 placeholder-gray-500 transition-all duration-300 hover:border-amber-300">
                            </div>
                        </div>

                        <!-- Category Filter -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">📂 Kategori</label>
                            <div class="relative">
                                <select name="category_id" class="block w-full py-4 px-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-white/90 text-gray-900 transition-all duration-300 hover:border-amber-300 appearance-none">
                                    <option value="">Semua Kategori</option>
                                    @foreach($categories as $c)
                                        <option value="{{ $c->id }}" {{ request('category_id')==$c->id ? 'selected' : '' }}>
                                            {{ $c->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Price Range -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">💰 Harga Min</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">Rp</span>
                                <input type="number" 
                                       step="1000" 
                                       name="min_price" 
                                       value="{{ request('min_price') }}" 
                                       placeholder="0" 
                                       class="block w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-white/90 text-gray-900 placeholder-gray-500 transition-all duration-300 hover:border-amber-300">
                            </div>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">💎 Harga Max</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">Rp</span>
                                <input type="number" 
                                       step="1000" 
                                       name="max_price" 
                                       value="{{ request('max_price') }}" 
                                       placeholder="10.000.000" 
                                       class="block w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 bg-white/90 text-gray-900 placeholder-gray-500 transition-all duration-300 hover:border-amber-300">
                            </div>
                        </div>
                    </div>

                    <!-- Filter Actions -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
                        <button type="submit" 
                                class="flex-1 sm:flex-none group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-yellow-600 text-white font-bold rounded-xl hover:from-amber-700 hover:to-yellow-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <svg class="w-5 h-5 mr-3 group-hover:rotate-12 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.207A1 1 0 013 6.5V4z"></path>
                            </svg>
                            <span>Terapkan Filter</span>
                            <div class="absolute inset-0 rounded-xl bg-white/20 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </button>
                        
                        @if(request()->hasAny(['q', 'category_id', 'min_price', 'max_price']))
                        <a href="{{ route('catalog.index') }}" 
                           class="flex-1 sm:flex-none group relative inline-flex items-center justify-center px-8 py-4 bg-white/80 backdrop-blur-sm text-gray-700 font-bold rounded-xl hover:bg-white transition-all duration-300 transform hover:scale-105 hover:shadow-xl border-2 border-gray-200 hover:border-gray-300">
                            <svg class="w-5 h-5 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            <span>Reset Semua</span>
                        </a>
                        @endif
                        
                        <!-- Quick Filter Tags -->
                        <div class="flex-1 flex flex-wrap gap-2 items-center">
                            @if(request('q'))
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-amber-100 text-amber-800">
                                    "{{ request('q') }}"
                                    <a href="{{ route('catalog.index', request()->except('q')) }}" class="ml-2 hover:text-amber-600">×</a>
                                </span>
                            @endif
                            @if(request('category_id'))
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                    {{ $categories->find(request('category_id'))->name ?? 'Kategori' }}
                                    <a href="{{ route('catalog.index', request()->except('category_id')) }}" class="ml-2 hover:text-yellow-600">×</a>
                                </span>
                            @endif
                        </div>
                    </div>
                </form>
            </div>

            <!-- Results Info -->
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 gap-4">
                <div class="text-gray-600">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-yellow-500 rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-lg font-bold text-gray-900">{{ $products->total() }}</span> 
                            <span class="text-gray-600">produk ditemukan</span>
                            @if(request('q'))
                                <div class="text-sm text-amber-600 font-medium">
                                    untuk "<span class="font-bold">{{ request('q') }}</span>"
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                
                <!-- Sort Options could be added here -->
                <div class="flex items-center space-x-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m3 0H4a1 1 0 00-1 1v16a1 1 0 001 1h16a1 1 0 001-1V5a1 1 0 00-1-1z"></path>
                    </svg>
                    <span>Diurutkan berdasarkan: <span class="font-medium text-gray-700">Terbaru</span></span>
                </div>
            </div>

            <!-- Products Grid -->
            @if($products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 mb-12">
                @foreach($products as $p)
                <div class="group relative bg-white/80 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 hover:scale-105 overflow-hidden border border-white/50">
                    <div class="relative overflow-hidden">
                        <!-- Product Image -->
                        <div class="aspect-square bg-gradient-to-br from-gray-50 to-gray-100 group-hover:from-amber-50 group-hover:to-yellow-50 transition-all duration-500 relative overflow-hidden">
                            @if($p->thumbnail_path)
                                <img src="{{ asset('storage/' . $p->thumbnail_path) }}" 
                                     alt="{{ $p->name }}" 
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            @else
                                <div class="flex items-center justify-center h-full">
                                    <svg class="w-16 h-16 text-gray-300 group-hover:text-amber-400 transition-all duration-500 group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            
                            <!-- Gradient Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        </div>
                        
                        <!-- Category Badge -->
                        @if($p->category)
                        <div class="absolute top-4 left-4 z-10">
                            <span class="inline-flex items-center px-3 py-1 bg-white/95 backdrop-blur-sm text-gray-700 rounded-full text-xs font-bold shadow-lg border border-white/20">
                                <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-2"></div>
                                {{ $p->category->name }}
                            </span>
                        </div>
                        @endif
                        
                        <!-- Price Badge -->
                        <div class="absolute top-4 right-4 z-10">
                            <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white px-3 py-1 rounded-full text-sm font-bold shadow-lg">
                                {{ number_format($p->price/1000000, 0) }}M+
                            </div>
                        </div>
                        
                        <!-- Quick View Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-center justify-center">
                            <div class="transform translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="inline-flex items-center bg-white/95 backdrop-blur-sm text-gray-900 px-6 py-3 rounded-full font-bold shadow-xl border border-white/20">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                    Lihat Detail
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-3 group-hover:text-amber-600 transition-colors duration-300 line-clamp-2 leading-tight">
                            {{ $p->name }}
                        </h3>
                        
                        @if($p->short_description)
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                            {{ $p->short_description }}
                        </p>
                        @endif
                        
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <div class="text-2xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">
                                    Rp {{ number_format($p->price, 0, ',', '.') }}
                                </div>
                                @if($p->compare_at_price && $p->compare_at_price > $p->price)
                                <div class="text-sm text-gray-500 line-through">
                                    Rp {{ number_format($p->compare_at_price, 0, ',', '.') }}
                                </div>
                                @endif
                            </div>
                            <div class="flex items-center space-x-1 text-yellow-400">
                                @for($i = 0; $i < 5; $i++)
                                    <svg class="w-4 h-4 {{ $i < 4 ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                                <span class="text-xs text-gray-500 ml-1">(4.0)</span>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <a href="{{ route('catalog.show', $p->slug) }}" 
                           class="group/btn relative w-full inline-flex items-center justify-center px-6 py-4 bg-gradient-to-r from-gray-900 to-gray-800 text-white font-bold rounded-xl hover:from-purple-600 hover:to-pink-600 transition-all duration-500 transform hover:scale-105 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-pink-600 opacity-0 group-hover/btn:opacity-100 transition-opacity duration-500"></div>
                            <span class="relative flex items-center">
                                <span class="group-hover/btn:mr-2 transition-all duration-300">Lihat Produk</span>
                                <svg class="w-0 h-5 group-hover/btn:w-5 group-hover/btn:ml-2 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </span>
                            
                            <!-- Shine effect -->
                            <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-20 group-hover/btn:animate-shine"></div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="max-w-md mx-auto">
                    <!-- Animated Icon -->
                    <div class="relative mb-8">
                        <div class="w-32 h-32 mx-auto bg-gradient-to-br from-purple-100 to-pink-100 rounded-full flex items-center justify-center animate-pulse-slow">
                            <svg class="w-16 h-16 text-purple-400 animate-bounce-subtle" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <!-- Floating particles -->
                        <div class="absolute top-4 left-4 w-3 h-3 bg-purple-300 rounded-full animate-float"></div>
                        <div class="absolute top-8 right-8 w-2 h-2 bg-pink-300 rounded-full animate-float animation-delay-2000"></div>
                        <div class="absolute bottom-6 left-12 w-2 h-2 bg-purple-400 rounded-full animate-float animation-delay-4000"></div>
                    </div>
                    
                    <h3 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-4">
                        Oops! Produk tidak ditemukan
                    </h3>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Sepertinya produk yang Anda cari sedang tidak tersedia. Coba ubah filter pencarian atau kata kunci untuk menemukan produk yang Anda inginkan.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('catalog.index') }}" 
                           class="group inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white font-bold rounded-xl hover:from-purple-700 hover:to-pink-700 transition-all duration-300 transform hover:scale-105 hover:shadow-xl">
                            <svg class="w-5 h-5 mr-3 group-hover:rotate-180 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                            </svg>
                            <span>Reset & Lihat Semua</span>
                        </a>
                        
                        <a href="{{ route('home') }}" 
                           class="group inline-flex items-center justify-center px-8 py-4 bg-white/80 backdrop-blur-sm text-gray-700 font-bold rounded-xl hover:bg-white transition-all duration-300 transform hover:scale-105 hover:shadow-xl border-2 border-gray-200 hover:border-purple-300">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span>Kembali ke Beranda</span>
                        </a>
                    </div>
                    
                    <!-- Popular suggestions -->
                    <div class="mt-12 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl border border-purple-100">
                        <h4 class="font-bold text-gray-900 mb-4 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2 text-purple-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            Kata Kunci Populer
                        </h4>
                        <div class="flex flex-wrap gap-2 justify-center">
                            @php
                                $popularKeywords = ['Sofa', 'Kursi', 'Meja', 'Lemari', 'Tempat Tidur', 'Rak Buku'];
                            @endphp
                            @foreach($popularKeywords as $keyword)
                                <a href="{{ route('catalog.index', ['q' => $keyword]) }}" 
                                   class="px-4 py-2 bg-white/70 text-purple-600 rounded-full text-sm font-medium hover:bg-purple-100 hover:text-purple-700 transition-colors duration-300 border border-purple-200 hover:border-purple-300">
                                    {{ $keyword }}
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <!-- Pagination -->
            @if($products->hasPages())
            <div class="flex justify-center">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-6 border border-white/50">
                    <div class="pagination-wrapper">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</x-app-layout>
