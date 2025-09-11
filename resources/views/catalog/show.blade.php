<x-app-layout>
    <!-- Breadcrumb dengan desain modern -->
    <div class="bg-gradient-to-r from-purple-50 via-pink-50 to-purple-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-2 md:space-x-4">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="group inline-flex items-center text-sm font-medium text-gray-600 hover:text-purple-600 transition-colors duration-300">
                            <div class="w-8 h-8 bg-white/80 backdrop-blur-sm rounded-xl flex items-center justify-center mr-3 group-hover:bg-purple-100 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                            </div>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-300 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="{{ route('catalog.index') }}" class="text-sm font-medium text-gray-600 hover:text-purple-600 transition-colors duration-300">Katalog</a>
                        </div>
                    </li>
                    @if($product->category)
                    <li>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-300 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <a href="{{ route('catalog.index', ['category_id' => $product->category->id]) }}" class="text-sm font-medium text-gray-600 hover:text-purple-600 transition-colors duration-300">{{ $product->category->name }}</a>
                        </div>
                    </li>
                    @endif
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-gray-300 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                            <span class="text-sm font-medium text-purple-600 truncate max-w-xs">{{ $product->name }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Background dengan animasi -->
    <div class="min-h-screen bg-gradient-to-br from-purple-50 via-white to-pink-50 relative overflow-hidden">
        <!-- Animated background elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-20 left-20 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>

        <div class="relative py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-x-12 lg:items-start">
                    <!-- Product Images Section -->
                    <div class="flex flex-col-reverse">
                        <!-- Main Image -->
                        <div class="aspect-square bg-white/80 backdrop-blur-sm rounded-3xl overflow-hidden shadow-2xl border border-white/50 mb-8">
                            @if($product->thumbnail_path)
                                <img src="{{ asset('storage/' . $product->thumbnail_path) }}" 
                                     alt="{{ $product->name }}" 
                                     class="w-full h-full object-cover object-center hover:scale-105 transition-transform duration-700">
                            @else
                                <div class="flex items-center justify-center h-full bg-gradient-to-br from-gray-50 to-gray-100">
                                    <svg class="w-32 h-32 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        <!-- Product Thumbnails -->
                        @if($product->images && $product->images->count() > 0)
                        <div class="hidden sm:block">
                            <div class="grid grid-cols-4 gap-4 mb-8">
                                @foreach($product->images->take(4) as $image)
                                <div class="aspect-square bg-white/80 backdrop-blur-sm rounded-2xl overflow-hidden cursor-pointer hover:shadow-xl transition-all duration-300 transform hover:scale-105 border border-white/50">
                                    <img src="{{ asset('storage/' . $image->path) }}" 
                                         alt="{{ $product->name }}" 
                                         class="w-full h-full object-cover object-center">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </div>

                    <!-- Product Info Section -->
                    <div class="mt-10 lg:mt-0">
                        <div class="bg-white/80 backdrop-blur-lg rounded-3xl shadow-2xl p-8 border border-white/50">
                            <!-- Category Badge -->
                            @if($product->category)
                            <div class="mb-6">
                                <span class="inline-flex items-center px-4 py-2 rounded-full text-sm font-bold bg-gradient-to-r from-purple-100 to-pink-100 text-purple-800 border border-purple-200">
                                    <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-2"></div>
                                    {{ $product->category->name }}
                                </span>
                            </div>
                            @endif

                            <!-- Product Name -->
                            <h1 class="text-4xl font-bold bg-gradient-to-r from-gray-900 via-purple-900 to-gray-900 bg-clip-text text-transparent mb-4 leading-tight">
                                {{ $product->name }}
                            </h1>

                            <!-- SKU -->
                            @if($product->sku)
                            <p class="text-sm text-gray-500 mb-6 flex items-center">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14"></path>
                                </svg>
                                SKU: <span class="font-mono ml-1">{{ $product->sku }}</span>
                            </p>
                            @endif

                            <!-- Price Section -->
                            <div class="mb-8 p-6 bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl border border-purple-100">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <div class="text-4xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-2">
                                            Rp {{ number_format($product->price, 0, ',', '.') }}
                                        </div>
                                        @if($product->compare_at_price && $product->compare_at_price > $product->price)
                                        <div class="flex items-center space-x-3">
                                            <div class="text-lg text-gray-500 line-through">
                                                Rp {{ number_format($product->compare_at_price, 0, ',', '.') }}
                                            </div>
                                            <div class="bg-gradient-to-r from-red-500 to-pink-500 text-white text-sm font-bold px-3 py-1 rounded-full">
                                                {{ round((($product->compare_at_price - $product->price) / $product->compare_at_price) * 100) }}% OFF
                                            </div>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        <div class="flex items-center space-x-1 text-yellow-400 mb-2">
                                            @for($i = 0; $i < 5; $i++)
                                                <svg class="w-5 h-5 {{ $i < 4 ? 'fill-current' : 'text-gray-300' }}" viewBox="0 0 20 20">
                                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                                </svg>
                                            @endfor
                                        </div>
                                        <div class="text-sm text-gray-600">(4.8/5) 127 review</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Short Description -->
                            @if($product->short_description)
                            <div class="mb-8">
                                <p class="text-lg text-gray-700 leading-relaxed bg-gray-50 p-6 rounded-2xl border-l-4 border-purple-400">
                                    {{ $product->short_description }}
                                </p>
                            </div>
                            @endif

                            <!-- Stock Status -->
                            <div class="mb-8">
                                @if($product->stock > 0)
                                <div class="flex items-center text-green-600 bg-green-50 p-4 rounded-2xl border border-green-200">
                                    <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-green-800">✅ Stok Tersedia</div>
                                        <div class="text-sm text-green-600">{{ $product->stock }} unit ready stock</div>
                                    </div>
                                </div>
                                @else
                                <div class="flex items-center text-red-600 bg-red-50 p-4 rounded-2xl border border-red-200">
                                    <div class="w-10 h-10 bg-red-100 rounded-xl flex items-center justify-center mr-4">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-bold text-red-800">❌ Stok Habis</div>
                                        <div class="text-sm text-red-600">Segera tersedia kembali</div>
                                    </div>
                                </div>
                                @endif
                            </div>

                            <!-- Product Attributes/Specifications -->
                            @if($product->attributes && is_array($product->attributes) && count($product->attributes) > 0)
                            <div class="mb-8">
                                <h3 class="text-xl font-bold text-gray-900 mb-4 flex items-center">
                                    <div class="w-8 h-8 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                        </svg>
                                    </div>
                                    Spesifikasi Produk
                                </h3>
                                <div class="bg-gradient-to-r from-gray-50 to-purple-50 rounded-2xl p-6 border border-gray-200">
                                    @foreach($product->attributes as $key => $value)
                                    <div class="flex justify-between items-center py-3 border-b border-gray-200/50 last:border-b-0">
                                        <span class="font-semibold text-gray-700 flex items-center">
                                            <div class="w-2 h-2 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full mr-3"></div>
                                            {{ ucfirst($key) }}
                                        </span>
                                        <span class="text-gray-900 font-medium bg-white px-3 py-1 rounded-lg">{{ $value }}</span>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif

                            <!-- WhatsApp Order Button -->
                            @php 
                                $wa = $settings?->whatsapp_number;
                                $message = "🛋️ *FURNITURE STORE* 🛋️\n\n" .
                                          "Halo! Saya tertarik dengan produk berikut:\n\n" .
                                          "📦 *Produk:* {$product->name}\n" .
                                          "🏷️ *Kategori:* " . ($product->category?->name ?? 'Umum') . "\n" .
                                          "💰 *Harga:* Rp " . number_format($product->price, 0, ',', '.') . "\n" .
                                          "📋 *SKU:* " . ($product->sku ?? 'N/A') . "\n" .
                                          "🔗 *Link:* " . route('catalog.show', $product->slug) . "\n\n" .
                                          "Mohon informasi lebih lanjut mengenai:\n" .
                                          "✅ Ketersediaan stok\n" .
                                          "✅ Proses pemesanan\n" .
                                          "✅ Pengiriman\n" .
                                          "✅ Garansi\n\n" .
                                          "Terima kasih! 🙏";
                            @endphp
                            
                            <div class="space-y-6">
                                @if($wa)
                                <a href="https://wa.me/{{ $wa }}?text={{ urlencode($message) }}" 
                                   class="group relative w-full flex items-center justify-center px-8 py-6 bg-gradient-to-r from-green-500 to-emerald-500 text-white text-lg font-bold rounded-2xl hover:from-green-600 hover:to-emerald-600 transition-all duration-300 transform hover:scale-105 shadow-2xl overflow-hidden">
                                    <!-- Animated background -->
                                    <div class="absolute inset-0 bg-gradient-to-r from-green-400 to-emerald-400 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    
                                    <!-- WhatsApp Icon with animation -->
                                    <div class="relative mr-4 w-8 h-8 bg-white/20 rounded-xl flex items-center justify-center group-hover:animate-bounce-subtle">
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z"/>
                                        </svg>
                                    </div>
                                    
                                    <div class="relative text-center">
                                        <div class="text-xl font-bold">🚀 Pesan Sekarang via WhatsApp</div>
                                        <div class="text-sm opacity-90 mt-1">Respons cepat dalam 5 menit! ⚡</div>
                                    </div>
                                    
                                    <!-- Shine effect -->
                                    <div class="absolute top-0 -inset-full h-full w-1/2 z-5 block transform -skew-x-12 bg-gradient-to-r from-transparent to-white opacity-20 group-hover:animate-shine"></div>
                                </a>
                                @else
                                <div class="text-center p-6 bg-gray-100 rounded-2xl border-2 border-dashed border-gray-300">
                                    <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.664-.833-2.464 0L4.268 16.5c-.77.833.192 2.5 1.732 2.5z"></path>
                                    </svg>
                                    <p class="text-gray-600 font-medium">Hubungi admin untuk informasi pemesanan</p>
                                </div>
                                @endif

                                <!-- Additional Action Buttons -->
                                <div class="grid grid-cols-2 gap-4">
                                    <button class="group flex items-center justify-center px-6 py-4 bg-white/80 backdrop-blur-sm text-gray-700 font-bold rounded-2xl hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-lg border border-gray-200 hover:border-purple-300">
                                        <svg class="w-6 h-6 mr-3 group-hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                        </svg>
                                        <span>Favorit</span>
                                    </button>
                                    <button class="group flex items-center justify-center px-6 py-4 bg-white/80 backdrop-blur-sm text-gray-700 font-bold rounded-2xl hover:bg-white transition-all duration-300 transform hover:scale-105 shadow-lg border border-gray-200 hover:border-blue-300">
                                        <svg class="w-6 h-6 mr-3 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"></path>
                                        </svg>
                                        <span>Bagikan</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Trust Badges -->
                            <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl border border-blue-200">
                                <h4 class="font-bold text-gray-900 mb-4 text-center">🛡️ Jaminan Kepercayaan</h4>
                                <div class="grid grid-cols-1 gap-4">
                                    <div class="flex items-center text-sm text-gray-700">
                                        <div class="w-10 h-10 bg-green-100 rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-bold text-green-800">100% Transaksi Aman</div>
                                            <div class="text-green-600">Data pribadi terlindungi</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <div class="w-10 h-10 bg-blue-100 rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-bold text-blue-800">Garansi Kualitas</div>
                                            <div class="text-blue-600">Sesuai standar industri</div>
                                        </div>
                                    </div>
                                    <div class="flex items-center text-sm text-gray-700">
                                        <div class="w-10 h-10 bg-purple-100 rounded-xl flex items-center justify-center mr-4">
                                            <svg class="w-6 h-6 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.293l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-bold text-purple-800">Pengiriman Nationwide</div>
                                            <div class="text-purple-600">Ke seluruh Indonesia</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Description -->
                @if($product->description)
                <div class="mt-20">
                    <div class="bg-white/80 backdrop-blur-lg rounded-3xl shadow-2xl p-8 border border-white/50">
                        <h2 class="text-3xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-8 flex items-center">
                            <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mr-4">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                </svg>
                            </div>
                            Deskripsi Detail Produk
                        </h2>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            <div class="bg-gradient-to-r from-gray-50 to-purple-50 p-6 rounded-2xl border-l-4 border-purple-400">
                                {!! nl2br(e($product->description)) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
