<footer class="bg-gradient-to-br from-slate-900 via-gray-800 to-amber-900 text-white relative overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60"
        xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23F59E0B"
        fill-opacity="0.08"%3E%3Cpath
        d="m36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z"
        /%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>

    <!-- Animated background elements -->
    <div
        class="absolute top-10 left-10 w-20 h-20 bg-gradient-to-r from-amber-500/20 to-yellow-500/20 rounded-full blur-xl animate-float">
    </div>
    <div
        class="absolute bottom-20 right-16 w-32 h-32 bg-gradient-to-r from-yellow-400/10 to-amber-400/10 rounded-full blur-2xl animate-blob">
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <!-- Brand Section -->
            <div>
                <div class="flex items-center space-x-4 mb-8">
                    <div class="w-12 h-12 rounded-2xl overflow-hidden shadow-lg">
                        <img src="{{ asset('logo/logo.png') }}" alt="Bisa Furniture Logo"
                            class="w-full h-full object-contain bg-white/90 p-1">
                    </div>
                    <div>
                        <span
                            class="text-2xl font-bold bg-gradient-to-r from-amber-400 to-yellow-400 bg-clip-text text-transparent">Bisa
                            Furniture</span>
                        <div class="text-sm text-gray-400">Premium Furniture</div>
                    </div>
                </div>
                <p class="text-gray-300 mb-8 max-w-lg leading-relaxed">
                    Kami menyediakan furniture berkualitas tinggi dengan desain modern dan elegan untuk melengkapi
                    hunian impian Anda. Dipercaya lebih dari 10.000+ pelanggan sejak tahun 2020.
                </p>

            </div>

            <!-- Quick Links -->
            <div>
                <h3
                    class="text-xl font-bold mb-8 bg-gradient-to-r from-amber-400 to-yellow-400 bg-clip-text text-transparent">
                    Menu Cepat</h3>
                <ul class="space-y-4">
                    <li>
                        <a href="{{ route('home') }}"
                            class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4 mr-3 text-amber-400 group-hover:text-amber-300 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('catalog.index') }}"
                            class="group flex items-center text-gray-300 hover:text-white transition-all duration-300">
                            <svg class="w-4 h-4 mr-3 text-amber-400 group-hover:text-amber-300 transition-colors"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            Katalog Produk
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Contact Info - Hanya WhatsApp dan lokasi -->
            <div>
                <h3
                    class="text-xl font-bold mb-8 bg-gradient-to-r from-amber-400 to-yellow-400 bg-clip-text text-transparent">
                    Hubungi Kami</h3>
                <div class="space-y-6">
                    @php
                        try {
                            $settings = \App\Models\Setting::first();
                            $whatsapp = $settings?->whatsapp_number;
                        } catch (\Exception $e) {
                            $whatsapp = '085290505442'; // Fallback number
                        }
                    @endphp
                    @if ($whatsapp)
                        <div class="flex items-center space-x-4">
                            <div
                                class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center flex-shrink-0 shadow-lg">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300 font-medium">WhatsApp</p>
                                <a href="https://wa.me/{{ $whatsapp }}"
                                    class="text-gray-400 hover:text-amber-400 transition-colors duration-300">
                                    {{ $whatsapp }}
                                </a>
                            </div>
                        </div>
                    @endif

                    <!-- Lokasi dengan Google Maps -->
                    <div>
                        <h4 class="text-lg font-semibold text-gray-300 mb-4 flex items-center">
                            <svg class="w-5 h-5 mr-2 text-amber-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                </path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Lokasi Toko
                        </h4>
                        <div class="rounded-xl overflow-hidden shadow-lg border-2 border-white/20">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.3878862773668!2d110.708962!3d-6.5986221!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f81d4b5df01%3A0xbe12ccf8423e4c24!2sBisa%20Furniture!5e0!3m2!1sid!2sid!4v1758213006982!5m2!1sid!2sid"
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="mt-16 pt-8 border-t border-gray-700">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm mb-4 md:mb-0">
                    © {{ date('Y') }} Bisa Furniture. Semua hak cipta dilindungi.
                </div>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors duration-300">
                        Kebijakan Privasi
                    </a>
                    <a href="#" class="text-gray-400 hover:text-amber-400 transition-colors duration-300">
                        FAQ
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
