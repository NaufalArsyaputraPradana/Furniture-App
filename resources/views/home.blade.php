<x-app-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden bg-gradient-to-br from-amber-800 via-amber-700 to-yellow-600">
        
        <!-- Jepara Wood Carving Pattern Background -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 400 400" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="jepara-carving" x="0" y="0" width="100" height="100" patternUnits="userSpaceOnUse">
                        <!-- Traditional Jepara floral motif -->
                        <path d="M50 10 C30 30, 30 70, 50 90 C70 70, 70 30, 50 10 Z" fill="rgba(255,255,255,0.1)" />
                        <path d="M10 50 C30 30, 70 30, 90 50 C70 70, 30 70, 10 50 Z" fill="rgba(255,255,255,0.08)" />
                        <circle cx="50" cy="50" r="5" fill="rgba(255,255,255,0.15)" />
                        <!-- Leaf patterns -->
                        <path d="M25 25 Q35 15, 45 25 Q35 35, 25 25" fill="rgba(255,255,255,0.06)" />
                        <path d="M75 75 Q65 85, 55 75 Q65 65, 75 75" fill="rgba(255,255,255,0.06)" />
                        <path d="M75 25 Q65 15, 55 25 Q65 35, 75 25" fill="rgba(255,255,255,0.06)" />
                        <path d="M25 75 Q35 85, 45 75 Q35 65, 25 75" fill="rgba(255,255,255,0.06)" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#jepara-carving)" />
            </svg>
        </div>

        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-72 h-72 bg-amber-900 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse">
            </div>
            <div class="absolute top-1/3 right-1/4 w-72 h-72 bg-yellow-700 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 2s;"></div>
            <div class="absolute bottom-1/4 left-1/3 w-72 h-72 bg-orange-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"
                style="animation-delay: 4s;"></div>
        </div>

        <!-- Ornamental Corner Decorations -->
        <div class="absolute top-0 left-0 w-32 h-32 opacity-20">
            <svg viewBox="0 0 100 100" class="w-full h-full text-yellow-300">
                <path d="M10 10 Q50 5, 90 10 Q85 50, 90 90 Q50 85, 10 90 Q15 50, 10 10 Z" fill="currentColor"
                    opacity="0.3" />
                <path d="M20 20 Q40 18, 80 20 Q78 40, 80 80 Q40 78, 20 80 Q22 40, 20 20 Z" fill="none"
                    stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="absolute top-0 right-0 w-32 h-32 opacity-20 transform rotate-90">
            <svg viewBox="0 0 100 100" class="w-full h-full text-yellow-300">
                <path d="M10 10 Q50 5, 90 10 Q85 50, 90 90 Q50 85, 10 90 Q15 50, 10 10 Z" fill="currentColor"
                    opacity="0.3" />
                <path d="M20 20 Q40 18, 80 20 Q78 40, 80 80 Q40 78, 20 80 Q22 40, 20 20 Z" fill="none"
                    stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="absolute bottom-0 left-0 w-32 h-32 opacity-20 transform rotate-270">
            <svg viewBox="0 0 100 100" class="w-full h-full text-yellow-300">
                <path d="M10 10 Q50 5, 90 10 Q85 50, 90 90 Q50 85, 10 90 Q15 50, 10 10 Z" fill="currentColor"
                    opacity="0.3" />
                <path d="M20 20 Q40 18, 80 20 Q78 40, 80 80 Q40 78, 20 80 Q22 40, 20 20 Z" fill="none"
                    stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="absolute bottom-0 right-0 w-32 h-32 opacity-20 transform rotate-180">
            <svg viewBox="0 0 100 100" class="w-full h-full text-yellow-300">
                <path d="M10 10 Q50 5, 90 10 Q85 50, 90 90 Q50 85, 10 90 Q15 50, 10 10 Z" fill="currentColor"
                    opacity="0.3" />
                <path d="M20 20 Q40 18, 80 20 Q78 40, 80 80 Q40 78, 20 80 Q22 40, 20 20 Z" fill="none"
                    stroke="currentColor" stroke-width="0.5" />
            </svg>
        </div>

        <div class="relative flex items-center min-h-screen max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="w-full lg:grid lg:grid-cols-2 lg:gap-12 items-center">
                <!-- Content -->
                <div class="text-center lg:text-left mb-12 lg:mb-0">
                    <div
                        class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-6 py-3 mb-8 border border-white/20">
                        <svg class="w-5 h-5 mr-2 text-yellow-300" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L3.09 8.26L12 22L20.91 8.26L12 2Z" />
                        </svg>
                        <span class="text-sm font-medium text-white/90">✨ Furniture Ukiran Jepara Premium</span>
                    </div>

                    <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold text-white mb-6 leading-none">
                        @if($settings->hero_title)
                            {!! nl2br(e($settings->hero_title)) !!}
                        @else
                            <span class="block animate-fade-in-up text-responsive-hero">Seni Ukiran</span>
                            <span
                                class="block bg-gradient-to-r from-yellow-300 to-orange-300 bg-clip-text text-transparent animate-fade-in-up text-shimmer text-responsive-hero"
                                style="animation-delay: 0.2s;">
                                Jepara
                            </span>
                            <span class="block text-3xl md:text-4xl lg:text-5xl font-light text-white/80 animate-fade-in-up"
                                style="animation-delay: 0.4s;">untuk Rumah Mewah Anda</span>
                        @endif
                    </h1>

                    <p class="text-xl md:text-2xl text-white/80 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed animate-fade-in-up"
                        style="animation-delay: 0.6s;">
                        @if($settings->hero_subtitle)
                            {{ $settings->hero_subtitle }}
                        @else
                            Rasakan keanggunan furniture ukiran Jepara dengan sentuhan modern. Setiap detail dipahat dengan
                            keahlian turun-temurun para pengrajin terbaik.
                        @endif
                    </p>

                    <div class="flex flex-col sm:flex-row gap-6 justify-center lg:justify-start animate-fade-in-up"
                        style="animation-delay: 0.8s;">
                        <a href="{{ route('catalog.index') }}"
                            class="group relative inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-yellow-600 text-white font-semibold rounded-2xl transition-all duration-300 transform hover:scale-105 shadow-2xl hover:shadow-amber-500/25 overflow-hidden btn-modern focus-ring">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-amber-500 to-yellow-500 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <svg class="w-5 h-5 mr-2 relative z-10 group-hover:rotate-12 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                            <span class="relative z-10">Jelajahi Koleksi</span>
                        </a>

                        <a href="https://wa.me/{{ $settings->whatsapp_number ?? '085290505442' }}"
                            class="group inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-2xl border border-white/20 hover:bg-white/20 hover:border-white/40 transition-all duration-300 transform hover:scale-105 btn-modern focus-ring">
                            <svg class="w-5 h-5 mr-2 group-hover:animate-pulse" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z" />
                            </svg>
                            Konsultasi Gratis
                        </a>
                    </div>

                    <!-- Trust Indicators -->
                    <div class="mt-12 flex flex-wrap justify-center lg:justify-start gap-8 animate-fade-in-up"
                        style="animation-delay: 1s;">
                        <div class="flex items-center text-white/60">
                            <svg class="w-5 h-5 mr-2 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="text-sm font-medium">4.9/5 Rating</span>
                        </div>
                        <div class="flex items-center text-white/60">
                            <svg class="w-5 h-5 mr-2 text-yellow-300" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm font-medium">Garansi 2 Tahun</span>
                        </div>
                        <div class="flex items-center text-white/60">
                            <svg class="w-5 h-5 mr-2 text-yellow-300" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-sm font-medium">Gratis Konsultasi</span>
                        </div>
                    </div>
                </div>

                <!-- 3D Visual/Image -->
                <div class="relative animate-fade-in-up" style="animation-delay: 1.2s;">
                    <div class="relative w-full max-w-lg mx-auto">
                        <!-- Ornamental Frame -->
                        <div class="absolute inset-0 -m-8 animate-jepara-ornament">
                            <svg viewBox="0 0 400 400" class="w-full h-full text-yellow-300 opacity-30">
                                <!-- Ornate border with Jepara style -->
                                <path d="M50 50 Q200 20, 350 50 Q380 200, 350 350 Q200 380, 50 350 Q20 200, 50 50 Z"
                                    fill="none" stroke="currentColor" stroke-width="2" />
                                <!-- Inner decorative elements -->
                                <path
                                    d="M100 100 Q200 80, 300 100 Q320 200, 300 300 Q200 320, 100 300 Q80 200, 100 100 Z"
                                    fill="none" stroke="currentColor" stroke-width="1" opacity="0.6" />
                                <!-- Floral corners -->
                                <circle cx="100" cy="100" r="8" fill="currentColor" opacity="0.4" />
                                <circle cx="300" cy="100" r="8" fill="currentColor" opacity="0.4" />
                                <circle cx="300" cy="300" r="8" fill="currentColor" opacity="0.4" />
                                <circle cx="100" cy="300" r="8" fill="currentColor" opacity="0.4" />
                            </svg>
                        </div>

                        <!-- Main furniture showcase -->
                        <div
                            class="relative z-10 bg-white/10 backdrop-blur-lg rounded-3xl p-8 shadow-2xl border border-white/20 card-hover-lift">
                            <div
                                class="aspect-square bg-gradient-to-br from-white/20 to-white/5 rounded-2xl flex items-center justify-center overflow-hidden">
                                @if($settings->hero_image_path)
                                    <img src="{{ asset('storage/'.$settings->hero_image_path) }}" 
                                         alt="Hero Furniture" 
                                         class="w-full h-full object-cover rounded-2xl">
                                @else
                                    <div class="text-center text-white">
                                        <!-- Wood carving icon -->
                                        <svg class="w-24 h-24 mx-auto mb-4 opacity-80 animate-carving-glow"
                                            viewBox="0 0 100 100" fill="currentColor">
                                            <path d="M20 20 Q50 10, 80 20 Q90 50, 80 80 Q50 90, 20 80 Q10 50, 20 20 Z"
                                                opacity="0.6" />
                                            <path d="M30 30 Q50 25, 70 30 Q75 50, 70 70 Q50 75, 30 70 Q25 50, 30 30 Z"
                                                opacity="0.8" />
                                            <circle cx="50" cy="50" r="8" opacity="1" />
                                            <!-- Decorative elements -->
                                            <path d="M35 35 Q45 30, 55 35" fill="none" stroke="currentColor"
                                                stroke-width="1" />
                                            <path d="M35 65 Q45 70, 55 65" fill="none" stroke="currentColor"
                                                stroke-width="1" />
                                            <path d="M35 35 Q30 45, 35 55" fill="none" stroke="currentColor"
                                                stroke-width="1" />
                                            <path d="M65 35 Q70 45, 65 55" fill="none" stroke="currentColor"
                                                stroke-width="1" />
                                        </svg>
                                        <div class="space-y-2">
                                            <p class="text-sm opacity-80 font-medium">Ukiran Jepara Premium</p>
                                            <p class="text-xs opacity-60">Keahlian Turun Temurun</p>
                                            <div class="flex justify-center space-x-1 mt-3">
                                                <div class="w-2 h-2 bg-yellow-300 rounded-full opacity-60"></div>
                                                <div class="w-2 h-2 bg-yellow-300 rounded-full opacity-80"></div>
                                                <div class="w-2 h-2 bg-yellow-300 rounded-full opacity-60"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Floating elements -->
                        <div
                            class="absolute -top-4 -right-4 w-20 h-20 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-full opacity-80 animate-floating">
                        </div>
                        <div
                            class="absolute -bottom-4 -left-4 w-16 h-16 bg-gradient-to-br from-amber-600 to-amber-800 rounded-full opacity-60 animate-pulse animation-delay-2000">
                        </div>
                        <div
                            class="absolute top-1/2 -right-8 w-12 h-12 bg-gradient-to-br from-orange-400 to-amber-600 rounded-full opacity-40 animate-ping animation-delay-4000">
                        </div>
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

    <!-- Jepara Heritage Section -->
    <section class="py-20 bg-gradient-to-br from-amber-50 to-yellow-50 relative overflow-hidden">
        <!-- Ornamental Background -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
                <g transform="translate(100,100)">
                    <!-- Traditional Jepara motifs -->
                    <path d="M0 0 Q100 -50, 200 0 Q300 50, 400 0 Q500 -50, 600 0" fill="none"
                        stroke="rgba(245,158,11,0.3)" stroke-width="2" />
                    <path d="M0 100 Q100 50, 200 100 Q300 150, 400 100 Q500 50, 600 100" fill="none"
                        stroke="rgba(245,158,11,0.2)" stroke-width="2" />
                    <path d="M0 200 Q100 150, 200 200 Q300 250, 400 200 Q500 150, 600 200" fill="none"
                        stroke="rgba(245,158,11,0.3)" stroke-width="2" />
                    <path d="M0 300 Q100 250, 200 300 Q300 350, 400 300 Q500 250, 600 300" fill="none"
                        stroke="rgba(245,158,11,0.2)" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-amber-100 rounded-full px-6 py-3 mb-6">
                    <svg class="w-5 h-5 mr-2 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-sm font-medium text-amber-800">Warisan Budaya Jepara</span>
                </div>
                <h2
                    class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-amber-600 to-yellow-600 bg-clip-text text-transparent mb-6">
                    Seni Ukiran Kayu Legendaris
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Jepara telah dikenal dunia sebagai pusat seni ukiran kayu terbaik. Setiap produk kami adalah
                    mahakarya yang menggabungkan tradisi berusia ratusan tahun dengan desain kontemporer.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                <!-- Content -->
                <div>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Keunggulan Ukiran Jepara</h3>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Teknik Tradisional Turun Temurun
                                </h4>
                                <p class="text-gray-600">Setiap ukiran dibuat dengan teknik yang diwariskan dari
                                    generasi ke generasi pengrajin ahli Jepara selama ratusan tahun.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Kayu Jati Premium</h4>
                                <p class="text-gray-600">Menggunakan kayu jati berkualitas tinggi yang terkenal akan
                                    kekuatan, keindahan serat, dan ketahanan terhadap cuaca.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="flex-shrink-0 w-12 h-12 bg-amber-100 rounded-lg flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-gray-900 mb-2">Finishing Eksklusif</h4>
                                <p class="text-gray-600">Proses finishing menggunakan bahan ramah lingkungan dengan
                                    teknik khusus untuk menghasilkan kilau alami yang tahan lama.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual -->
                <div class="relative">
                    <div class="bg-white rounded-3xl p-8 shadow-xl border border-amber-100">
                        <!-- Ornamental border -->
                        <div class="relative z-10">
                            <div class="relative flex items-center justify-center mb-6">
                                <img src="{{ asset('logo/ukir.png') }}" alt="Ukiran Jepara"
                                    class="w-full h-auto object-contain rounded-xl" />
                            </div>
                            <div class="text-center">
                                <h5 class="text-lg font-semibold text-gray-900 mb-2">Motif Tradisional</h5>
                                <p class="text-sm text-gray-600">Setiap motif memiliki makna filosofis dan cerita turun
                                    temurun</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating decorative elements -->
                    <div
                        class="absolute -top-4 -right-4 w-16 h-16 bg-gradient-to-br from-yellow-400 to-amber-500 rounded-full opacity-80 animate-bounce">
                    </div>
                    <div
                        class="absolute -bottom-4 -left-4 w-12 h-12 bg-gradient-to-br from-amber-600 to-yellow-600 rounded-full opacity-60 animate-pulse">
                    </div>
                </div>
            </div>

            <!-- Process Timeline -->
            <div class="bg-white rounded-3xl p-8 md:p-12 shadow-xl border border-amber-100">
                <h3 class="text-3xl font-bold text-center text-gray-900 mb-12">Proses Pembuatan Furniture Ukiran</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-amber-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">1</span>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Pemilihan Kayu</h4>
                        <p class="text-sm text-gray-600">Seleksi kayu jati premium dengan usia dan kualitas terbaik</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-amber-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">2</span>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Desain & Sketsa</h4>
                        <p class="text-sm text-gray-600">Pembuatan desain detail dan sketsa motif ukiran tradisional
                        </p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-amber-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">3</span>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Proses Ukir</h4>
                        <p class="text-sm text-gray-600">Pengukiran manual oleh master craftsman berpengalaman puluhan
                            tahun</p>
                    </div>

                    <div class="text-center group">
                        <div
                            class="w-20 h-20 bg-gradient-to-br from-amber-500 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <span class="text-2xl font-bold text-white">4</span>
                        </div>
                        <h4 class="text-lg font-semibold text-gray-900 mb-2">Finishing</h4>
                        <p class="text-sm text-gray-600">Proses finishing eksklusif untuk hasil akhir yang sempurna</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="py-20 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-amber-100 rounded-full px-6 py-3 mb-6">
                    <svg class="w-5 h-5 mr-2 text-amber-600" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <span class="text-amber-800 font-semibold">Produk Unggulan</span>
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Koleksi Terpopuler</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover koleksi furniture terbaik kami yang menggabungkan kualitas premium dengan keindahan ukiran
                    Jepara yang timeless
                </p>
            </div>

            <!-- Featured Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                @forelse ($featured as $product)
                <div class="group bg-white rounded-3xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                    <div class="aspect-square bg-gradient-to-br from-amber-100 to-yellow-100 p-8 flex items-center justify-center overflow-hidden">
                        @if($product->thumbnail_path)
                            <img src="{{ asset('storage/' . $product->thumbnail_path) }}" 
                                 alt="{{ $product->name }}" 
                                 class="w-full h-full object-cover rounded-lg group-hover:scale-110 transition-transform duration-300">
                        @else
                            <svg class="w-24 h-24 text-amber-600 group-hover:scale-110 transition-transform duration-300"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 5v4M16 5v4" />
                            </svg>
                        @endif
                    </div>
                    <div class="p-6">
                        @if($product->category)
                            <div class="text-sm text-amber-600 font-semibold mb-2">{{ $product->category->name }}</div>
                        @endif
                        <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">{{ $product->name }}</h3>
                        @if($product->description)
                            <p class="text-sm text-gray-600 mb-4 line-clamp-2">{{ $product->description }}</p>
                        @endif
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-amber-600">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <a href="{{ route('catalog.show', $product->slug) }}" 
                               class="inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors duration-200">
                                <span class="text-sm font-medium">Lihat</span>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-1 md:col-span-3 text-center py-12">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada produk unggulan</h3>
                    <p class="text-gray-500">Produk unggulan akan ditampilkan di sini.</p>
                </div>
                @endforelse
            </div>

            <!-- View All Products Button -->
            <div class="text-center">
                <a href="{{ route('catalog.index') }}"
                    class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-bold rounded-2xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    Lihat Semua Produk
                </a>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-gradient-to-br from-amber-600 to-yellow-500 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-10">
            <div class="h-full w-full bg-white"
                style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;">
            </div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Mengapa Memilih Kami?</h2>
                <p class="text-xl text-white/90 max-w-3xl mx-auto">
                    Kami menghadirkan furniture berkualitas tinggi dengan kombinasi keahlian tradisional dan desain
                    modern
                </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Kualitas Premium</h3>
                    <p class="text-white/80">Menggunakan kayu jati grade A dengan standar kualitas internasional</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Custom Design</h3>
                    <p class="text-white/80">Furniture custom sesuai kebutuhan dan selera interior Anda</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Ukiran Eksklusif</h3>
                    <p class="text-white/80">Detail ukiran tradisional Jepara sebagai nilai tambah eksklusif</p>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-white/20 rounded-2xl flex items-center justify-center mx-auto mb-6 backdrop-blur-sm">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Pengiriman Aman</h3>
                    <p class="text-white/80">Sistem pengiriman aman dan cepat ke seluruh Indonesia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-20 bg-white relative overflow-hidden">
        <!-- Ornamental background -->
        <div class="absolute top-0 right-0 w-64 h-64 opacity-5">
            <svg viewBox="0 0 200 200" class="w-full h-full text-amber-600">
                <path d="M100 20 Q140 40, 160 80 Q140 120, 100 140 Q60 120, 40 80 Q60 40, 100 20 Z"
                    fill="currentColor" />
                <path d="M100 40 Q120 50, 140 80 Q120 110, 100 120 Q80 110, 60 80 Q80 50, 100 40 Z" fill="currentColor"
                    opacity="0.7" />
                <circle cx="100" cy="80" r="12" fill="currentColor" opacity="0.9" />
            </svg>
        </div>

        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-amber-50 rounded-full px-6 py-3 mb-6 border border-amber-200">
                    <svg class="w-5 h-5 mr-2 text-amber-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                    <span class="text-sm font-medium text-amber-800">Pertanyaan Umum</span>
                </div>
                <h2
                    class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-amber-600 to-yellow-600 bg-clip-text text-transparent mb-6">
                    Yang Sering Ditanyakan
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                    Temukan jawaban atas pertanyaan yang paling sering diajukan tentang furniture ukiran Jepara kami
                </p>
            </div>

            <div class="space-y-6">
                <div
                    class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl border border-amber-100 overflow-hidden">
                    <details class="group">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer hover:bg-amber-100/50 transition-colors duration-200">
                            <h3 class="text-lg font-semibold text-gray-900 group-open:text-amber-700">
                                Berapa lama waktu pengerjaan furniture custom?
                            </h3>
                            <svg class="w-5 h-5 text-amber-600 group-open:rotate-180 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 leading-relaxed">
                                Waktu pengerjaan furniture custom bervariasi tergantung kompleksitas ukiran dan ukuran
                                produk. Untuk furniture ukiran sederhana membutuhkan 2-4 minggu, sedangkan untuk ukiran
                                kompleks dan ukuran besar dapat memakan waktu 6-12 minggu. Kami akan memberikan estimasi
                                waktu yang akurat setelah konsultasi detail.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl border border-amber-100 overflow-hidden">
                    <details class="group">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer hover:bg-amber-100/50 transition-colors duration-200">
                            <h3 class="text-lg font-semibold text-gray-900 group-open:text-amber-700">
                                Apakah furniture dapat dikirim ke seluruh Indonesia?
                            </h3>
                            <svg class="w-5 h-5 text-amber-600 group-open:rotate-180 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 leading-relaxed">
                                Ya, kami melayani pengiriman ke seluruh Indonesia. Furniture akan dikemas dengan sangat
                                hati-hati menggunakan material khusus untuk memastikan keamanan selama perjalanan. Biaya
                                kirim akan disesuaikan dengan jarak dan ukuran produk. Untuk wilayah Jawa, kami juga
                                menyediakan layanan antar langsung.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl border border-amber-100 overflow-hidden">
                    <details class="group">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer hover:bg-amber-100/50 transition-colors duration-200">
                            <h3 class="text-lg font-semibold text-gray-900 group-open:text-amber-700">
                                Bagaimana cara perawatan furniture ukiran kayu jati?
                            </h3>
                            <svg class="w-5 h-5 text-amber-600 group-open:rotate-180 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 leading-relaxed">
                                Perawatan furniture ukiran jati cukup mudah. Bersihkan dengan kain lembut secara rutin,
                                hindari kontak langsung dengan sinar matahari berlebihan, dan aplikasikan wood polish
                                khusus 3-6 bulan sekali. Hindari penggunaan pembersih kimia keras. Dengan perawatan yang
                                tepat, furniture ukiran jati dapat bertahan hingga puluhan tahun bahkan lebih.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl border border-amber-100 overflow-hidden">
                    <details class="group">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer hover:bg-amber-100/50 transition-colors duration-200">
                            <h3 class="text-lg font-semibold text-gray-900 group-open:text-amber-700">
                                Apakah tersedia garansi untuk produk furniture?
                            </h3>
                            <svg class="w-5 h-5 text-amber-600 group-open:rotate-180 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 leading-relaxed">
                                Ya, kami memberikan garansi 2 tahun untuk kualitas kayu dan konstruksi furniture, serta
                                garansi 1 tahun untuk finishing. Garansi mencakup perbaikan gratis jika terjadi
                                kerusakan akibat cacat produksi atau material. Garansi tidak berlaku untuk kerusakan
                                akibat pemakaian yang tidak wajar atau bencana alam.
                            </p>
                        </div>
                    </details>
                </div>

                <div
                    class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl border border-amber-100 overflow-hidden">
                    <details class="group">
                        <summary
                            class="flex items-center justify-between p-6 cursor-pointer hover:bg-amber-100/50 transition-colors duration-200">
                            <h3 class="text-lg font-semibold text-gray-900 group-open:text-amber-700">
                                Bisakah memesan furniture dengan desain sendiri?
                            </h3>
                            <svg class="w-5 h-5 text-amber-600 group-open:rotate-180 transition-transform duration-200"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </summary>
                        <div class="px-6 pb-6">
                            <p class="text-gray-600 leading-relaxed">
                                Tentu saja! Kami menyediakan layanan custom design dimana Anda dapat memesan furniture
                                sesuai dengan desain, ukuran, dan motif ukiran yang diinginkan. Tim designer kami akan
                                membantu mewujudkan ide Anda menjadi furniture impian. Proses dimulai dengan konsultasi,
                                pembuatan sketsa, persetujuan design, hingga eksekusi pembuatan.
                            </p>
                        </div>
                    </details>
                </div>
            </div>

            <div class="text-center mt-12">
                <p class="text-gray-600 mb-6">Masih ada pertanyaan lain?</p>
                <a href="https://wa.me/085290505442"
                    class="inline-flex items-center px-6 py-3 bg-green-600 text-white font-semibold rounded-2xl hover:bg-green-700 transition-colors duration-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z" />
                    </svg>
                    Tanya Langsung via WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="py-20 bg-gradient-to-br from-slate-900 via-gray-800 to-amber-900 relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 800 600" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <pattern id="furniture-pattern" x="0" y="0" width="80" height="80"
                        patternUnits="userSpaceOnUse">
                        <rect x="20" y="30" width="40" height="25" fill="rgba(255,255,255,0.1)"
                            rx="2" />
                        <rect x="25" y="35" width="30" height="15" fill="none"
                            stroke="rgba(255,255,255,0.08)" stroke-width="0.5" />
                        <circle cx="40" cy="20" r="8" fill="rgba(255,255,255,0.06)" />
                        <path d="M15 60 Q25 55, 35 60 Q45 55, 55 60 Q65 55, 75 60" fill="none"
                            stroke="rgba(255,255,255,0.05)" stroke-width="1" />
                    </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#furniture-pattern)" />
            </svg>
        </div>

        <!-- Floating Elements -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/6 w-80 h-80 bg-amber-600 rounded-full mix-blend-multiply filter blur-2xl opacity-10 animate-pulse">
            </div>
            <div class="absolute bottom-1/4 right-1/6 w-80 h-80 bg-yellow-500 rounded-full mix-blend-multiply filter blur-2xl opacity-10 animate-pulse"
                style="animation-delay: 3s;"></div>
        </div>

        <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <!-- Premium Badge -->
                <div
                    class="inline-flex items-center bg-gradient-to-r from-amber-600/20 to-yellow-500/20 backdrop-blur-sm rounded-full px-8 py-4 mb-8 border border-amber-500/30">
                    <svg class="w-6 h-6 mr-3 text-amber-400" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                    </svg>
                    <span class="text-lg font-semibold text-amber-300">✨ Koleksi Furniture Premium Jepara</span>
                </div>

                <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-8 leading-tight">
                    Wujudkan Rumah
                    <span
                        class="bg-gradient-to-r from-amber-400 via-yellow-400 to-orange-400 bg-clip-text text-transparent block mt-2">
                        Impian Anda
                    </span>
                </h2>

                <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                    Temukan koleksi furniture berkualitas tinggi dari Jepara dengan keunggulan ukiran tradisional
                    sebagai nilai tambah.
                    Setiap piece furniture dirancang untuk memberikan kenyamanan maksimal dan keindahan estetik yang
                    timeless.
                </p>
            </div>

            <!-- Product Categories Highlight -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <div
                    class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:bg-white/10 hover:border-amber-500/30 transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5v4M16 5v4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-white mb-4 group-hover:text-amber-400 transition-colors duration-300">
                        Set Ruang Tamu</h3>
                    <p class="text-gray-300 leading-relaxed">Kursi tamu, meja, dan lemari hias dengan detail ukiran
                        halus yang menambah kemewahan ruang keluarga Anda.</p>
                </div>

                <div
                    class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:bg-white/10 hover:border-amber-500/30 transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9v-9m0-9v9"></path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-white mb-4 group-hover:text-amber-400 transition-colors duration-300">
                        Furniture Kamar</h3>
                    <p class="text-gray-300 leading-relaxed">Tempat tidur, lemari pakaian, dan meja rias dengan desain
                        elegan yang menciptakan suasana istimewa.</p>
                </div>

                <div
                    class="group bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10 hover:bg-white/10 hover:border-amber-500/30 transition-all duration-500 transform hover:-translate-y-2">
                    <div
                        class="w-20 h-20 bg-gradient-to-br from-amber-500 to-orange-600 rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                            </path>
                        </svg>
                    </div>
                    <h3
                        class="text-2xl font-bold text-white mb-4 group-hover:text-amber-400 transition-colors duration-300">
                        Furniture Kantor</h3>
                    <p class="text-gray-300 leading-relaxed">Meja kerja, kursi eksekutif, dan lemari dokumen yang
                        memberikan kesan profesional dan prestise.</p>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <div class="mb-8">
                    <h4 class="text-2xl md:text-3xl font-bold text-white mb-4">Mulai Perjalanan Menuju Rumah Impian
                    </h4>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto">Dapatkan konsultasi gratis dari ahli interior
                        kami dan wujudkan rumah impian dengan furniture berkualitas tinggi</p>
                </div>

                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a href="{{ route('catalog.index') }}"
                        class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-amber-600 to-yellow-500 text-white font-semibold rounded-full shadow-lg transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-2 focus:ring-amber-400 border-2 border-amber-400/40">
                        <svg class="w-5 h-5 mr-2 text-white group-hover:rotate-12 transition-transform duration-300"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <span class="font-semibold">Jelajahi Koleksi Furniture</span>
                    </a>
                    <a href="https://wa.me/085290505442"
                        class="group inline-flex items-center px-8 py-4 border-2 border-white text-white font-semibold rounded-full shadow-lg transition-all duration-300 hover:bg-white/10 hover:border-amber-400 focus:outline-none focus:ring-2 focus:ring-amber-400">
                        <svg class="w-5 h-5 mr-2 text-white group-hover:animate-pulse" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z" />
                        </svg>
                        <span class="font-semibold">Konsultasi Interior Gratis</span>
                    </a>
                </div>

                <!-- Special Offer Badge -->
                <div class="mt-10">
                    <div
                        class="inline-flex items-center bg-gradient-to-r from-red-600 to-orange-600 rounded-full px-8 py-3 text-white font-semibold shadow-lg animate-pulse">
                        <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                        🔥 PROMO SPESIAL: Konsultasi + Survey GRATIS untuk pembelian furniture set lengkap
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
