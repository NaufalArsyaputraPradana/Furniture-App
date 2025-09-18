<nav x-data="{ open: false }" class="backdrop-blur-md bg-white/95 shadow-xl border-b border-amber-200/50 sticky top-0 z-50 transition-all duration-300">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3 group">
                        <div class="relative">
                            <img src="{{ asset('logo/logo.png') }}" alt="Bisa Furniture Logo" class="w-12 h-12 object-contain group-hover:scale-110 transition-all duration-300 logo-hover">
                            <div class="absolute inset-0 bg-gradient-to-br from-amber-400/20 to-yellow-400/20 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="block">
                            <span class="text-xl font-bold bg-gradient-to-r from-amber-600 to-yellow-600 bg-clip-text text-transparent">Bisa Furniture</span>
                            <div class="text-xs text-gray-500 -mt-1 hidden sm:block">Premium Furniture</div>
                        </div>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <a href="{{ route('home') }}" 
                       class="group inline-flex items-center px-3 py-2 border-b-2 text-sm font-medium transition-all duration-300 relative {{ request()->routeIs('home') ? 'border-amber-500 text-amber-600' : 'border-transparent text-gray-600 hover:text-amber-600 hover:border-amber-300' }}">
                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span>Beranda</span>
                        @if(request()->routeIs('home'))
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-amber-500 rounded-full"></div>
                        @endif
                    </a>
                    <a href="{{ route('catalog.index') }}" 
                       class="group inline-flex items-center px-3 py-2 border-b-2 text-sm font-medium transition-all duration-300 relative {{ request()->routeIs('catalog.*') ? 'border-amber-500 text-amber-600' : 'border-transparent text-gray-600 hover:text-amber-600 hover:border-amber-300' }}">
                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                        <span>Katalog</span>
                        @if(request()->routeIs('catalog.*'))
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-amber-500 rounded-full"></div>
                        @endif
                    </a>
                    @auth
                    <a href="{{ route('dashboard') }}" 
                       class="group inline-flex items-center px-3 py-2 border-b-2 text-sm font-medium transition-all duration-300 relative {{ request()->routeIs('dashboard*') || request()->routeIs('admin.*') ? 'border-amber-500 text-amber-600' : 'border-transparent text-gray-600 hover:text-amber-600 hover:border-amber-300' }}">
                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                        </svg>
                        <span>Admin</span>
                        @if(request()->routeIs('dashboard*') || request()->routeIs('admin.*'))
                        <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-2 h-2 bg-amber-500 rounded-full"></div>
                        @endif
                    </a>
                    @endauth
                </div>
            </div>

            <!-- Search & Settings Section -->
            <div class="flex items-center space-x-4">
                <!-- Quick Search Button (Hidden on small screens) -->
                <div class="hidden md:block">
                    <a href="{{ route('catalog.index') }}" 
                       class="group p-2 text-gray-400 hover:text-amber-600 transition-colors duration-300"
                       title="Cari Produk">
                        <svg class="w-5 h-5 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </a>
                </div>

                <!-- Settings Dropdown / Auth Links -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                @auth
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="group inline-flex items-center px-4 py-2 border border-transparent text-sm leading-4 font-medium rounded-xl text-gray-600 bg-amber-50/50 hover:bg-amber-100/70 hover:text-amber-700 focus:outline-none transition-all duration-300 backdrop-blur-sm">
                            <div class="flex items-center">
                                <div class="w-8 h-8 bg-gradient-to-br from-amber-400 to-yellow-500 rounded-full flex items-center justify-center mr-3 shadow-lg group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-sm">{{ substr(Auth::user()->name, 0, 1) }}</span>
                                </div>
                                <div class="text-left">
                                    <div class="font-semibold">{{ Auth::user()->name }}</div>
                                    <div class="text-xs text-gray-500">{{ Auth::user()->is_admin ? 'Administrator' : 'User' }}</div>
                                </div>
                            </div>

                            <div class="ms-3">
                                <svg class="fill-current h-4 w-4 group-hover:rotate-180 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="bg-white/95 backdrop-blur-md border border-amber-200/50 shadow-2xl rounded-2xl overflow-hidden">
                            <x-dropdown-link :href="route('profile.edit')" class="group">
                                <div class="flex items-center p-3 hover:bg-amber-50 transition-colors duration-300 rounded-xl m-1">
                                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900">{{ __('Profile') }}</div>
                                        <div class="text-sm text-gray-500">Kelola akun Anda</div>
                                    </div>
                                </div>
                            </x-dropdown-link>

                            @if(Auth::user()->is_admin)
                            <x-dropdown-link :href="route('admin.settings.edit')" class="group">
                                <div class="flex items-center p-3 hover:bg-amber-50 transition-colors duration-300 rounded-xl m-1">
                                    <div class="w-10 h-10 bg-gradient-to-br from-purple-400 to-purple-500 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-medium text-gray-900">Settings Toko</div>
                                        <div class="text-sm text-gray-500">Pengaturan website</div>
                                    </div>
                                </div>
                            </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100 mx-2"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="group">
                                    <div class="flex items-center p-3 hover:bg-red-50 transition-colors duration-300 rounded-xl m-1">
                                        <div class="w-10 h-10 bg-gradient-to-br from-red-400 to-red-500 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <div class="font-medium text-gray-900">{{ __('Log Out') }}</div>
                                            <div class="text-sm text-gray-500">Keluar dari akun</div>
                                        </div>
                                    </div>
                                </x-dropdown-link>
                            </form>
                        </div>
                    </x-slot>
                </x-dropdown>
                @else
                <div class="flex items-center space-x-3">
                    <a href="{{ route('login') }}" 
                       class="group inline-flex items-center px-4 py-2 bg-white/80 backdrop-blur-sm text-gray-700 font-medium rounded-xl hover:bg-white hover:text-amber-600 transition-all duration-300 border border-gray-200 hover:border-amber-300 shadow-sm hover:shadow-md">
                        <svg class="w-4 h-4 mr-2 group-hover:scale-110 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                        <span>Masuk</span>
                    </a>
                   
                </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-xl text-gray-400 hover:text-amber-600 hover:bg-amber-50 focus:outline-none focus:bg-amber-100 focus:text-amber-600 transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-white/95 backdrop-blur-md border-t border-amber-200/50">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="{{ route('home') }}" 
               class="group flex items-center pl-3 pr-4 py-3 border-l-4 text-base font-medium transition-all duration-300 rounded-r-xl {{ request()->routeIs('home') ? 'border-amber-500 text-amber-700 bg-amber-50' : 'border-transparent text-gray-600 hover:text-amber-700 hover:bg-amber-50 hover:border-amber-300' }}">
                <div class="w-10 h-10 bg-gradient-to-br {{ request()->routeIs('home') ? 'from-amber-400 to-yellow-400' : 'from-gray-200 to-gray-300 group-hover:from-amber-400 group-hover:to-yellow-400' }} rounded-xl flex items-center justify-center mr-3 transition-all duration-300">
                    <svg class="w-5 h-5 {{ request()->routeIs('home') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold">Beranda</div>
                    <div class="text-xs text-gray-500">Halaman utama</div>
                </div>
            </a>
            
            <a href="{{ route('catalog.index') }}" 
               class="group flex items-center pl-3 pr-4 py-3 border-l-4 text-base font-medium transition-all duration-300 rounded-r-xl {{ request()->routeIs('catalog.*') ? 'border-amber-500 text-amber-700 bg-amber-50' : 'border-transparent text-gray-600 hover:text-amber-700 hover:bg-amber-50 hover:border-amber-300' }}">
                <div class="w-10 h-10 bg-gradient-to-br {{ request()->routeIs('catalog.*') ? 'from-amber-400 to-yellow-400' : 'from-gray-200 to-gray-300 group-hover:from-amber-400 group-hover:to-yellow-400' }} rounded-xl flex items-center justify-center mr-3 transition-all duration-300">
                    <svg class="w-5 h-5 {{ request()->routeIs('catalog.*') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold">Katalog</div>
                    <div class="text-xs text-gray-500">Jelajahi produk</div>
                </div>
            </a>
            
            @auth
            <a href="{{ route('dashboard') }}" 
               class="group flex items-center pl-3 pr-4 py-3 border-l-4 text-base font-medium transition-all duration-300 rounded-r-xl {{ request()->routeIs('dashboard*') || request()->routeIs('admin.*') ? 'border-amber-500 text-amber-700 bg-amber-50' : 'border-transparent text-gray-600 hover:text-amber-700 hover:bg-amber-50 hover:border-amber-300' }}">
                <div class="w-10 h-10 bg-gradient-to-br {{ request()->routeIs('dashboard*') || request()->routeIs('admin.*') ? 'from-amber-400 to-yellow-400' : 'from-gray-200 to-gray-300 group-hover:from-amber-400 group-hover:to-yellow-400' }} rounded-xl flex items-center justify-center mr-3 transition-all duration-300">
                    <svg class="w-5 h-5 {{ request()->routeIs('dashboard*') || request()->routeIs('admin.*') ? 'text-white' : 'text-gray-500 group-hover:text-white' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div>
                    <div class="font-semibold">Admin Dashboard</div>
                    <div class="text-xs text-gray-500">Panel administrator</div>
                </div>
            </a>
            @endauth
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-4 border-t border-amber-200/50">
            @auth
            <div class="px-4 mb-4">
                <div class="flex items-center p-4 bg-gradient-to-r from-amber-50 to-yellow-50 rounded-2xl border border-amber-200">
                    <div class="w-12 h-12 bg-gradient-to-br from-amber-400 to-yellow-500 rounded-full flex items-center justify-center mr-4">
                        <span class="text-white font-bold">{{ substr(Auth::user()->name, 0, 1) }}</span>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-900">{{ Auth::user()->name }}</div>
                        <div class="text-sm text-gray-600">{{ Auth::user()->email }}</div>
                        <div class="text-xs text-amber-600 font-medium">{{ Auth::user()->is_admin ? 'Administrator' : 'User' }}</div>
                    </div>
                </div>
            </div>

            <div class="space-y-2 px-4">
                <a href="{{ route('profile.edit') }}" 
                   class="group flex items-center p-3 text-base font-medium text-gray-600 hover:text-amber-700 hover:bg-amber-50 transition-all duration-300 rounded-xl">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-400 to-blue-500 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-medium">{{ __('Profile') }}</div>
                        <div class="text-xs text-gray-500">Kelola akun Anda</div>
                    </div>
                </a>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" 
                       onclick="event.preventDefault(); this.closest('form').submit();"
                       class="group flex items-center p-3 text-base font-medium text-gray-600 hover:text-red-700 hover:bg-red-50 transition-all duration-300 rounded-xl w-full">
                        <div class="w-10 h-10 bg-gradient-to-br from-red-400 to-red-500 rounded-xl flex items-center justify-center mr-3 group-hover:scale-110 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium">{{ __('Log Out') }}</div>
                            <div class="text-xs text-gray-500">Keluar dari akun</div>
                        </div>
                    </a>
                </form>
            </div>
            @else
            <div class="space-y-2 px-4">
                <a href="{{ route('login') }}" 
                   class="group flex items-center p-3 text-base font-medium text-gray-600 hover:text-amber-700 hover:bg-amber-50 transition-all duration-300 rounded-xl">
                    <div class="w-10 h-10 bg-gradient-to-br from-gray-400 to-gray-500 group-hover:from-amber-400 group-hover:to-yellow-400 rounded-xl flex items-center justify-center mr-3 transition-all duration-300">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                        </svg>
                    </div>
                    <div>
                        <div class="font-medium">Masuk</div>
                        <div class="text-xs text-gray-500">Login ke akun Anda</div>
                    </div>
                </a>
            </div>
            @endauth
        </div>
    </div>
</nav>
