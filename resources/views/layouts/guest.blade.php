<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Bisa Furniture</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <!-- Background with Modern Design -->
        <div class="min-h-screen bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 relative overflow-hidden">
            <!-- Animated Background Elements -->
            <div class="absolute inset-0">
                <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-amber-600 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse"></div>
                <div class="absolute top-1/3 right-1/4 w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse" style="animation-delay: 2s;"></div>
                <div class="absolute bottom-1/4 left-1/3 w-96 h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-xl opacity-10 animate-pulse" style="animation-delay: 4s;"></div>
            </div>
            
            <!-- Grid Pattern Overlay -->
            <div class="absolute inset-0 opacity-5">
                <div class="h-full w-full" style="background-image: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 20px 20px;"></div>
            </div>
            
            <div class="relative min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 px-4">
                <!-- Logo Section -->
                <div class="mb-8">
                    <a href="/" class="group flex items-center space-x-3">
                        <div class="w-16 h-16 bg-gradient-to-br from-amber-500 to-amber-600 rounded-2xl flex items-center justify-center shadow-2xl group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 21l4-4 4 4"></path>
                            </svg>
                        </div>
                        <div class="text-white">
                            <h1 class="text-2xl font-bold">Bisa Furniture</h1>
                            <p class="text-amber-300 text-sm">Premium Collection</p>
                        </div>
                    </a>
                </div>

                <!-- Login Card -->
                <div class="w-full sm:max-w-md">
                    <div class="bg-white/95 backdrop-blur-lg shadow-2xl overflow-hidden rounded-3xl border border-white/20">
                        <div class="px-8 py-8">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="mt-8 text-center text-white/60 text-sm">
                    <p>&copy; {{ date('Y') }} Bisa Furniture. All rights reserved.</p>
                </div>
            </div>
        </div>
    </body>
</html>
