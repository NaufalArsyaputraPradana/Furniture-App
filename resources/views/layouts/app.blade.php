<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? 'Bisa Furniture - Mebel & Furniture Berkualitas' }}</title>

        <!-- SEO Meta Tags -->
        <meta name="description" content="{{ $description ?? 'Bisa Furniture menyediakan berbagai macam mebel dan furniture berkualitas tinggi dengan desain modern dan harga terjangkau. Melayani custom furniture sesuai kebutuhan Anda.' }}">
        <meta name="keywords" content="Bisa Furniture, bisa furniture, furniture, mebel, lemari, kursi, meja, sofa, tempat tidur, furniture custom, furniture murah, furniture berkualitas, furniture modern">
        <meta name="author" content="Bisa Furniture">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="7 days">
        <meta name="language" content="id">
        <meta name="geo.region" content="ID-JT">
        <meta name="geo.placename" content="Jawa Tengah, Indonesia">
        
        <!-- Open Graph Meta Tags -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $title ?? 'Bisa Furniture - Mebel & Furniture Berkualitas' }}">
        <meta property="og:description" content="{{ $description ?? 'Bisa Furniture menyediakan berbagai macam mebel dan furniture berkualitas tinggi dengan desain modern dan harga terjangkau.' }}">
        <meta property="og:image" content="{{ asset('logo/logo.png') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="Bisa Furniture">
        <meta property="og:locale" content="id_ID">
        
        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $title ?? 'Bisa Furniture - Mebel & Furniture Berkualitas' }}">
        <meta name="twitter:description" content="{{ $description ?? 'Bisa Furniture menyediakan berbagai macam mebel dan furniture berkualitas tinggi dengan desain modern dan harga terjangkau.' }}">
        <meta name="twitter:image" content="{{ asset('logo/logo.png') }}">
        
        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Favicon dan Meta Tags -->
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo/logo.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo/logo.png') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('logo/logo.png') }}">
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('logo/logo.png') }}">
        
        <!-- Android Icons -->
        <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('logo/logo.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        
        <!-- Windows Tiles -->
        <meta name="msapplication-TileColor" content="#f59e0b">
        <meta name="msapplication-TileImage" content="{{ asset('logo/logo.png') }}">
        <meta name="msapplication-config" content="{{ asset('browserconfig.xml') }}">
        
        <!-- Theme Color -->
        <meta name="theme-color" content="#f59e0b">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <!-- Additional Styles -->
        <style>
            /* Primary colors for backward compatibility */
            .bg-primary { 
                background-color: rgb(245 158 11); /* amber-500 */
            }
            .bg-primary:hover {
                background-color: rgb(217 119 6); /* amber-600 */
            }
            .text-primary {
                color: rgb(245 158 11); /* amber-500 */
            }
            .border-primary {
                border-color: rgb(245 158 11); /* amber-500 */
            }
            
            /* Navbar scroll effect */
            .navbar-scroll {
                backdrop-filter: blur(20px);
                background: rgba(255, 255, 255, 0.95);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }
            
            /* Logo hover effect */
            .logo-hover {
                filter: drop-shadow(0 4px 8px rgba(245, 158, 11, 0.3));
            }

            /* Custom gradient backgrounds */
            .bg-golden-gradient {
                background: linear-gradient(135deg, #906126 0%, #A87C2D 30%, #F3CB51 70%, #F0D27F 100%);
            }
            
            .bg-golden-light {
                background: linear-gradient(135deg, #F3CB51 0%, #F0D27F 50%, #A87C2D 100%);
            }
            
            .bg-golden-dark {
                background: linear-gradient(135deg, #906126 0%, #A87C2D 100%);
            }
            
            /* Text gradients */
            .text-golden-gradient {
                background: linear-gradient(135deg, #A87C2D 0%, #F3CB51 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }
        </style>
    </head>
    <body class="font-sans antialiased bg-gray-50">
        <div class="flex flex-col min-h-screen">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>

            <!-- Footer -->
            <x-footer />
            
            <!-- WhatsApp Floating Button -->
            <x-whatsapp-float />
        </div>
        
        <!-- Navbar Scroll Effect Script -->
        <script>
            // Navbar scroll effect
            window.addEventListener('scroll', function() {
                const navbar = document.querySelector('nav');
                const logo = document.querySelector('.logo-hover');
                
                if (window.scrollY > 50) {
                    navbar?.classList.add('navbar-scroll');
                    logo?.classList.add('scale-95');
                } else {
                    navbar?.classList.remove('navbar-scroll');
                    logo?.classList.remove('scale-95');
                }
            });
            
            // Smooth scroll for anchor links
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
            
            // PWA install prompt
            let deferredPrompt;
            window.addEventListener('beforeinstallprompt', (e) => {
                e.preventDefault();
                deferredPrompt = e;
                // Show install button if needed
            });
        </script>
    </body>
</html>
