@php
    try {
        $settings = \App\Models\Setting::first();
        $whatsapp = $settings?->whatsapp_number ?? '085290505442';
    } catch (\Exception $e) {
        $whatsapp = '085290505442'; // Fallback number when database unavailable
    }
@endphp

@if($whatsapp)
<div class="fixed bottom-6 right-6 z-50 group">
    <!-- Main WhatsApp Button -->
    <a href="https://wa.me/{{ $whatsapp }}" 
       target="_blank"
       class="relative flex items-center justify-center w-16 h-16 bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white rounded-full shadow-2xl hover:shadow-green-500/50 transform transition-all duration-300 hover:scale-110 active:scale-95">
        <!-- WhatsApp Icon -->
        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.097z"/>
        </svg>
        
        <!-- Notification Badge -->
        <div class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 text-white text-xs font-bold rounded-full flex items-center justify-center animate-pulse">
            !
        </div>
        
        <!-- Pulse Animation -->
        <div class="absolute inset-0 rounded-full bg-green-400 animate-ping opacity-75"></div>
    </a>
    
    <!-- Enhanced Tooltip -->
    <div class="absolute bottom-full right-0 mb-3 opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none transform translate-y-2 group-hover:translate-y-0">
        <div class="bg-gray-900 text-white text-sm px-4 py-3 rounded-2xl whitespace-nowrap shadow-2xl border border-gray-700 backdrop-blur-sm">
            <div class="flex items-center space-x-2">
                <div class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
                <span class="font-medium">💬 Chat WhatsApp</span>
            </div>
            <div class="text-xs text-gray-300 mt-1">
                Online 24/7 - Respons < 5 menit
            </div>
            <!-- Arrow -->
            <div class="absolute top-full right-4 w-0 h-0 border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-900"></div>
        </div>
    </div>
    
    <!-- Message Preview (shows on hover) -->
    <div class="absolute bottom-full right-20 mb-3 opacity-0 group-hover:opacity-100 transition-all duration-500 delay-300 pointer-events-none transform translate-x-4 group-hover:translate-x-0">
        <div class="bg-white text-gray-800 text-sm px-4 py-3 rounded-2xl shadow-xl border border-gray-200 backdrop-blur-sm max-w-xs">
            <div class="flex items-start space-x-2">
                <div class="w-8 h-8 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                    CS
                </div>
                <div class="flex-1">
                    <div class="text-xs text-gray-500 mb-1">Customer Service</div>
                    <div class="text-sm">
                        Halo! 👋 Ada yang bisa kami bantu? 
                        <br><span class="text-purple-600 font-medium">Konsultasi GRATIS!</span>
                    </div>
                </div>
            </div>
            <!-- Typing indicator -->
            <div class="flex items-center space-x-1 mt-2 text-gray-400">
                <div class="flex space-x-1">
                    <div class="w-1 h-1 bg-gray-400 rounded-full animate-bounce"></div>
                    <div class="w-1 h-1 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                    <div class="w-1 h-1 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
                </div>
                <span class="text-xs">sedang mengetik...</span>
            </div>
        </div>
    </div>
</div>

<!-- Quick Contact Options (Desktop Only) -->
<div class="hidden lg:block fixed bottom-32 right-6 z-40">
    <div class="space-y-3 opacity-80 hover:opacity-100 transition-opacity duration-300">
        <!-- Phone -->
        <a href="tel:085290505442" 
           class="group flex items-center justify-center w-12 h-12 bg-blue-500 hover:bg-blue-600 text-white rounded-full shadow-lg hover:shadow-blue-500/25 transition-all duration-300 transform hover:scale-110">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
            </svg>
            <!-- Tooltip -->
            <div class="absolute right-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                <div class="bg-gray-900 text-white text-xs px-2 py-1 rounded whitespace-nowrap">
                    Telepon
                </div>
            </div>
        </a>
        
        <!-- Email -->
        <a href="mailto:info@bisafurniture.com" 
           class="group flex items-center justify-center w-12 h-12 bg-purple-500 hover:bg-purple-600 text-white rounded-full shadow-lg hover:shadow-purple-500/25 transition-all duration-300 transform hover:scale-110">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
            </svg>
            <!-- Tooltip -->
            <div class="absolute right-full mr-2 opacity-0 group-hover:opacity-100 transition-opacity duration-200 pointer-events-none">
                <div class="bg-gray-900 text-white text-xs px-2 py-1 rounded whitespace-nowrap">
                    Email
                </div>
            </div>
        </a>
    </div>
</div>
@endif
