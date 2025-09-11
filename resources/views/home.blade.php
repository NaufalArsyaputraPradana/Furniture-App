<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden" style="background: linear-gradient(135deg, #906126 0%, #A87C2D 30%, #F3CB51 70%, #F0D27F 100%);">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob" style="background-color: #906126;"></div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000" style="background-color: #A87C2D;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000" style="background-color: #F3CB51;"></div>
        </div>
        
        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23906126" fill-opacity="0.08"%3E%3Cpath d="m36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <div class="relative flex items-center min-h-screen max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <!-- Content -->
                <div class="text-center lg:text-left mb-12 lg:mb-0">
                    <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-8">
                        <span class="text-sm font-medium text-white/90">✨ Bisa Furniture Premium Collection</span>
                    </div>
                    
                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-none">
                        <span class="block">Furniture</span>
                        <span class="block bg-clip-text text-transparent" style="background: linear-gradient(135deg, #F3CB51 0%, #F0D27F 50%, #A87C2D 100%); -webkit-background-clip: text;">
                            Modern
                        </span>
                        <span class="block text-4xl md:text-5xl lg:text-6xl font-light text-white/80">untuk Rumah Impian</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-white/70 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Temukan koleksi furniture berkualitas tinggi dengan desain eksklusif dan teknologi terdepan untuk hunian modern Anda
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-6 justify-center lg:justify-start">
                        <a href="{{ route('catalog.index') }}" 
                           class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-yellow-600 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-amber-500/25 overflow-hidden btn-modern">
                            <div class="absolute inset-0 bg-gradient-to-r from-amber-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <svg class="w-5 h-5 mr-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="relative z-10">Jelajahi Koleksi</span>
                        </a>
                        
                        <a href="https://wa.me/085290505442" 
                           class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105 btn-modern">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z"/>
                            </svg>
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
                
                <!-- 3D Visual/Image -->
                <div class="relative">
                    <div class="relative w-full max-w-lg mx-auto">
                        <!-- Main furniture showcase -->
                        <div class="relative z-10 bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20">
                            <div class="aspect-square bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center">
                                <div class="text-center text-white">
                                    <svg class="w-24 h-24 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 5v4M16 5v4"></path>
                                    </svg>
                                    <p class="text-sm opacity-60">Premium Collection</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 rounded-full opacity-80 animate-bounce" style="background: linear-gradient(135deg, #F3CB51 0%, #F0D27F 100%);"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 rounded-full opacity-60 animate-pulse" style="background: linear-gradient(135deg, #A87C2D 0%, #906126 100%);"></div>
                        <div class="absolute top-1/2 -right-8 w-12 h-12 rounded-full opacity-40 animate-ping" style="background: linear-gradient(135deg, #F0D27F 0%, #A87C2D 100%);"></div>
                    </div>
                </div>
            </div>
            
            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 text-center">
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
                </div>
                <p class="text-xs mt-2">Scroll untuk melihat lebih</p>
            </div>
        </div>
    </section>
                        <span class="block bg-clip-text text-transparent" style="background: linear-gradient(135deg, #F3CB51 0%, #F0D27F 50%, #A87C2D 100%); -webkit-background-clip: text;">
                            Modern
                        </span>
                        <span class="block text-4xl md:text-5xl lg:text-6xl font-light text-white/80">untuk Rumah Impian</span>
                    </h1>
                    
                    <p class="text-xl md:text-2xl text-white/70 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Temukan koleksi furniture berkualitas tinggi dengan desain eksklusif dan teknologi terdepan untuk hunian modern Anda
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-6 justify-center lg:justify-start">
                        <a href="{{ route('catalog.index') }}" 
                           class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-yellow-600 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-amber-500/25 overflow-hidden">
                            <div class="absolute inset-0 bg-gradient-to-r from-amber-700 to-yellow-700 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <svg class="w-5 h-5 mr-2 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="relative z-10">Jelajahi Koleksi</span>
                        </a>
                        
                        <a href="https://wa.me/085290505442" 
                           class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-2xl border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z"/>
                            </svg>
                            Konsultasi Gratis
                        </a>
                    </div>
                </div>
                
                <!-- 3D Visual/Image -->
                <div class="relative">
                    <div class="relative w-full max-w-lg mx-auto">
                        <!-- Main furniture showcase -->
                        <div class="relative z-10 bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20">
                            <div class="aspect-square bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center">
                                <div class="text-center text-white">
                                    <svg class="w-24 h-24 mx-auto mb-4 opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M8 5v4M16 5v4"></path>
                                    </svg>
                                    <p class="text-sm opacity-60">Premium Collection</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 rounded-full opacity-80 animate-bounce" style="background: linear-gradient(135deg, #F3CB51 0%, #F0D27F 100%);"></div>
                        <div class="absolute -bottom-4 -left-4 w-16 h-16 rounded-full opacity-60 animate-pulse" style="background: linear-gradient(135deg, #A87C2D 0%, #906126 100%);"></div>
                        <div class="absolute top-1/2 -right-8 w-12 h-12 rounded-full opacity-40 animate-ping" style="background: linear-gradient(135deg, #F0D27F 0%, #A87C2D 100%);"></div>
                    </div>
                </div>
            </div>
            
            <!-- Scroll indicator -->
            <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white/60 text-center">
                <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
                    <div class="w-1 h-3 bg-white/60 rounded-full mt-2 animate-bounce"></div>
                </div>
                <p class="text-xs mt-2">Scroll untuk melihat lebih</p>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Produk Unggulan</h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Koleksi furniture pilihan terbaik dengan kualitas premium dan desain yang menawan
                </p>
            </div>
            
            @if($featured->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featured as $p)
                <div class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden hover-lift">
                    <div class="relative">
                        <!-- Product Image -->
                        <div class="aspect-square bg-gradient-to-br from-gray-100 to-gray-200 rounded-t-2xl group-hover:from-amber-50 group-hover:to-orange-100 transition-colors duration-300">
                            @if($p->thumbnail_path)
                                <img src="{{ asset('storage/' . $p->thumbnail_path) }}" 
                                     alt="{{ $p->name }}" 
                                     class="w-full h-full object-cover rounded-t-2xl group-hover:scale-105 transition-transform duration-300">
                            @else
                                <div class="flex items-center justify-center h-full">
                                    <svg class="w-16 h-16 text-gray-400 group-hover:text-amber-500 transition-colors duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Quick View Badge -->
                        <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <span class="bg-amber-600 text-white px-3 py-1 rounded-full text-sm font-medium animate-fadeInUp">
                                Lihat Detail
                            </span>
                        </div>
                        
                        <!-- Overlay gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-t-2xl"></div>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-6">
                        <h3 class="font-bold text-lg text-gray-900 mb-2 group-hover:text-amber-600 transition-colors duration-300">
                            {{ $p->name }}
                        </h3>
                        @if($p->short_description)
                        <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $p->short_description }}</p>
                        @endif
                        <div class="flex items-center justify-between">
                            <div class="text-2xl font-bold" style="color: #A87C2D;">
                                Rp {{ number_format($p->price, 0, ',', '.') }}
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <a href="{{ route('catalog.show', $p->slug) }}" 
                           class="mt-4 w-full inline-flex items-center justify-center px-4 py-3 bg-gray-900 text-white font-semibold rounded-lg hover:bg-amber-600 transition-all duration-300 group btn-modern">
                            <span class="group-hover:mr-2 transition-all duration-300">Lihat Produk</span>
                            <svg class="w-0 h-5 group-hover:w-5 group-hover:ml-2 transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <div class="text-center py-12">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2 2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 009.586 13H7"></path>
                </svg>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Belum ada produk unggulan</h3>
                <p class="text-gray-600">Produk unggulan akan ditampilkan di sini</p>
            </div>
            @endif
            
            <!-- View All Products Button -->
            <div class="text-center mt-12">
                <a href="{{ route('catalog.index') }}" 
                   class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-amber-600 text-amber-600 font-semibold rounded-lg hover:bg-amber-600 hover:text-white transition-all duration-300 transform hover:scale-105 btn-modern">
                    Lihat Semua Produk
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
        <!-- Features Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute inset-0 bg-gradient-to-br from-amber-50 via-white to-yellow-50"></div>
        <div class="absolute top-0 left-0 w-40 h-40 rounded-full opacity-20 -translate-x-20 -translate-y-20" style="background-color: #F3CB51;"></div>
        <div class="absolute bottom-0 right-0 w-60 h-60 rounded-full opacity-20 translate-x-20 translate-y-20" style="background-color: #A87C2D;"></div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-gradient-to-r from-amber-100 to-yellow-100 px-4 py-2 rounded-full text-sm font-medium mb-4" style="color: #906126;">
                    🏆 Keunggulan Kami
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Mengapa Memilih <span class="bg-clip-text text-transparent" style="background: linear-gradient(135deg, #A87C2D 0%, #F3CB51 100%); -webkit-background-clip: text;">Bisa Furniture</span>?
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Komitmen kami untuk memberikan pengalaman terbaik dalam berbelanja furniture dengan standar kualitas internasional
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Feature 1 -->
                <!-- Feature 1 -->
                <div class="group text-center">
                    <div class="relative mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 text-white rounded-2xl mb-6 transition-all duration-300 transform group-hover:scale-110 shadow-lg group-hover:shadow-amber-500/25" style="background: linear-gradient(135deg, #A87C2D 0%, #906126 100%);">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <!-- Floating decoration -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full opacity-80 animate-bounce" style="background-color: #F3CB51;"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-amber-600 transition-colors duration-300">Kualitas Premium</h3>
                    <p class="text-gray-600 leading-relaxed">Material berkualitas tinggi dari supplier terpercaya dengan standar internasional dan sertifikasi ISO</p>
                    
                    <!-- Stats -->
                    <div class="mt-6 inline-flex items-center bg-amber-50 px-4 py-2 rounded-full">
                        <span class="text-amber-600 font-semibold text-sm">99.8% Rating Kepuasan</span>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="group text-center">
                    <div class="relative mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 text-white rounded-2xl mb-6 transition-all duration-300 transform group-hover:scale-110 shadow-lg group-hover:shadow-amber-500/25" style="background: linear-gradient(135deg, #F3CB51 0%, #A87C2D 100%);">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <!-- Floating decoration -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full opacity-80 animate-pulse" style="background-color: #F0D27F;"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-amber-600 transition-colors duration-300">Pengiriman Express</h3>
                    <p class="text-gray-600 leading-relaxed">Layanan pengiriman kilat dengan tracking realtime dan asuransi penuh untuk keamanan produk Anda</p>
                    
                    <!-- Stats -->
                    <div class="mt-6 inline-flex items-center bg-amber-50 px-4 py-2 rounded-full">
                        <span class="text-amber-600 font-semibold text-sm">24-48 Jam Sampai</span>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="group text-center">
                    <div class="relative mb-8">
                        <div class="inline-flex items-center justify-center w-20 h-20 text-white rounded-2xl mb-6 transition-all duration-300 transform group-hover:scale-110 shadow-lg group-hover:shadow-amber-500/25" style="background: linear-gradient(135deg, #F0D27F 0%, #F3CB51 100%);">
                            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <!-- Floating decoration -->
                        <div class="absolute -top-2 -right-2 w-6 h-6 rounded-full opacity-80 animate-ping" style="background-color: #A87C2D;"></div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-amber-600 transition-colors duration-300">Support 24/7</h3>
                    <p class="text-gray-600 leading-relaxed">Tim customer service profesional siap membantu Anda kapan saja melalui WhatsApp, call center, dan live chat</p>
                    
                    <!-- Stats -->
                    <div class="mt-6 inline-flex items-center bg-amber-50 px-4 py-2 rounded-full">
                        <span class="text-amber-600 font-semibold text-sm">Response < 5 Menit</span>
                    </div>
                </div>
            </div>
            
            <!-- Additional features grid -->
            <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-amber-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-amber-200 group-hover:to-amber-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5-6H5a2 2 0 00-2 2v6a2 2 0 002 2h1"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Garansi Resmi</h4>
                    <p class="text-sm text-gray-600">Garansi 2-5 tahun</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-yellow-200 group-hover:to-yellow-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Harga Terbaik</h4>
                    <p class="text-sm text-gray-600">Jaminan harga termurah</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-orange-200 group-hover:to-orange-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Konsultasi Gratis</h4>
                    <p class="text-sm text-gray-600">Design interior gratis</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-yellow-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-amber-200 group-hover:to-yellow-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Custom Design</h4>
                    <p class="text-sm text-gray-600">Sesuai keinginan Anda</p>
                </div>
            </div>
        </div>
    </section>
                    <h4 class="font-semibold text-gray-900 mb-2">Harga Terbaik</h4>
                    <p class="text-sm text-gray-600">Jaminan harga termurah</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-orange-200 group-hover:to-orange-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Konsultasi Gratis</h4>
                    <p class="text-sm text-gray-600">Design interior gratis</p>
                </div>
                
                <div class="text-center group">
                    <div class="w-16 h-16 bg-gradient-to-br from-amber-100 to-yellow-200 rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:from-amber-200 group-hover:to-yellow-300 transition-all duration-300">
                        <svg class="w-8 h-8 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064"></path>
                        </svg>
                    </div>
                    <h4 class="font-semibold text-gray-900 mb-2">Custom Design</h4>
                    <p class="text-sm text-gray-600">Sesuai keinginan Anda</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="py-16" style="background: linear-gradient(135deg, #1f2937 0%, #A87C2D 50%, #1f2937 100%);">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">
                    Dipercaya Lebih dari <span style="color: #F3CB51;">10.000+</span> Pelanggan
                </h2>
                <p class="text-xl text-gray-300">Bergabunglah dengan ribuan keluarga yang telah mempercayai Bisa Furniture</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="group">
                    <div class="text-4xl md:text-5xl font-bold mb-2 group-hover:text-yellow-300 transition-colors duration-300" style="color: #F3CB51;">10K+</div>
                    <p class="text-gray-300">Pelanggan Puas</p>
                </div>
                <div class="group">
                    <div class="text-4xl md:text-5xl font-bold mb-2 group-hover:text-yellow-300 transition-colors duration-300" style="color: #F0D27F;">500+</div>
                    <p class="text-gray-300">Produk Tersedia</p>
                </div>
                <div class="group">
                    <div class="text-4xl md:text-5xl font-bold mb-2 group-hover:text-yellow-300 transition-colors duration-300" style="color: #A87C2D;">50+</div>
                    <p class="text-gray-300">Kota Terjangkau</p>
                </div>
                <div class="group">
                    <div class="text-4xl md:text-5xl font-bold mb-2 group-hover:text-yellow-300 transition-colors duration-300" style="color: #906126;">24/7</div>
                    <p class="text-gray-300">Customer Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-br from-white via-amber-50 to-yellow-50 relative overflow-hidden">
        <!-- Background decorations -->
        <div class="absolute top-0 left-0 w-40 h-40 rounded-full opacity-10 -translate-x-20 -translate-y-20" style="background-color: #A87C2D;"></div>
        <div class="absolute bottom-0 right-0 w-60 h-60 rounded-full opacity-10 translate-x-20 translate-y-20" style="background-color: #F3CB51;"></div>
        
        <div class="relative max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <div class="inline-flex items-center bg-gradient-to-r from-amber-100 to-yellow-100 px-4 py-2 rounded-full text-sm font-medium mb-6" style="color: #906126;">
                    🎯 Siap Berbelanja?
                </div>
                <h2 class="text-4xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                    Mulai Transform <span class="bg-clip-text text-transparent" style="background: linear-gradient(135deg, #A87C2D 0%, #F3CB51 100%); -webkit-background-clip: text;">Rumah Impian</span> Anda!
                </h2>
                <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Hubungi tim ahli kami untuk konsultasi gratis dan dapatkan penawaran terbaik untuk furniture impian Anda
                </p>
            </div>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/085290505442" 
                   class="group inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-green-500/25 btn-modern">
                    <svg class="w-6 h-6 mr-3" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z"/>
                    </svg>
                    WhatsApp: 085290505442
                </a>
                
                <div class="text-center">
                    <p class="text-sm text-gray-500 mb-1">Atau</p>
                    <a href="{{ route('catalog.index') }}" 
                       class="inline-flex items-center px-8 py-4 bg-transparent border-2 text-gray-700 font-semibold rounded-2xl hover:bg-amber-600 hover:text-white hover:border-amber-600 transition-all duration-300 transform hover:scale-105 btn-modern" style="border-color: #A87C2D;">
                        Lihat Katalog Lengkap
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript for Enhanced Interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scrolling for all internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Animate elements on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate-fadeInUp');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            document.querySelectorAll('.group, .hover-lift, .text-center').forEach(el => {
                observer.observe(el);
            });

            // Enhanced hover effects for product cards
            document.querySelectorAll('.group').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-12px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add floating animation to hero elements
            const floatingElements = document.querySelectorAll('.animate-bounce, .animate-pulse, .animate-ping');
            floatingElements.forEach((el, index) => {
                el.style.animationDelay = `${index * 0.5}s`;
            });

            // Parallax effect for background elements
            window.addEventListener('scroll', () => {
                const scrolled = window.pageYOffset;
                const parallaxElements = document.querySelectorAll('.animate-blob');
                
                parallaxElements.forEach((el, index) => {
                    const speed = 0.5 + (index * 0.1);
                    el.style.transform = `translateY(${scrolled * speed}px)`;
                });
            });

            // Dynamic gradient animation
            const gradientElements = document.querySelectorAll('[style*="linear-gradient"]');
            gradientElements.forEach(el => {
                el.classList.add('animate-gradient');
            });
        });
    </script>
</x-app-layout>
