<x-app-layout>
    <!-- Header Section -->
    <section class="relative bg-gradient-to-br from-amber-800 via-yellow-700 to-yellow-600 py-16 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-20">
            <svg class="w-full h-full" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <pattern id="furniture-pattern" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="10" cy="10" r="2" fill="currentColor" opacity="0.3" />
                    <rect x="6" y="6" width="8" height="8" fill="none" stroke="currentColor"
                        stroke-width="0.5" opacity="0.2" />
                </pattern>
                <rect width="100%" height="100%" fill="url(#furniture-pattern)" />
            </svg>
        </div>

        <!-- Animated Background -->
        <div class="absolute inset-0">
            <div
                class="absolute top-1/4 left-1/4 w-64 h-64 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse">
            </div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-amber-300 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"
                style="animation-delay: 2s;"></div>
        </div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-white">
                <div class="mb-6 md:mb-0">
                    <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                        </svg>
                        <span class="text-sm font-medium text-white/90">Manajemen Produk</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">Produk</h1>
                    <p class="text-xl text-white/80">
                        Kelola seluruh produk furniture dengan mudah dan efisien
                    </p>
                </div>
                <a href="{{ route('admin.products.create') }}"
                    class="flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Produk
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="py-12 bg-gradient-to-br from-amber-50 via-yellow-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-8 p-6 bg-green-50 border-l-4 border-green-400 rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="text-green-800 font-medium">Berhasil!</p>
                            <p class="text-green-700">{{ session('status') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            <div class="backdrop-blur-sm bg-white/90 rounded-3xl shadow-2xl overflow-hidden border border-amber-200/50">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-amber-100 to-yellow-100">
                            <tr>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Produk</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Kategori</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Harga</th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            @forelse($products as $p)
                                <tr
                                    class="group hover:bg-gradient-to-r hover:from-amber-50 hover:to-yellow-50 transition-all duration-300">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            @if ($p->images->first())
                                                <img src="{{ Storage::url($p->images->first()->image_path) }}"
                                                    alt="{{ $p->name }}"
                                                    class="w-16 h-16 rounded-2xl object-cover mr-4 shadow-md">
                                            @else
                                                <div
                                                    class="w-16 h-16 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center mr-4">
                                                    <svg class="w-8 h-8 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            @endif
                                            <div>
                                                <div
                                                    class="text-lg font-semibold text-gray-900 group-hover:text-amber-700 transition-colors">
                                                    {{ $p->name }}</div>
                                                <div class="text-sm text-gray-500 mt-1">
                                                    {{ Str::limit($p->description, 60) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800 border border-blue-200">
                                            {{ $p->category?->name ?? 'Tidak ada kategori' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="font-semibold text-gray-900">Rp
                                            {{ number_format($p->price, 0, ',', '.') }}</div>
                                        @if ($p->discount_price)
                                            <div class="text-sm text-red-600 font-medium">
                                                Diskon: Rp {{ number_format($p->discount_price, 0, ',', '.') }}
                                            </div>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if ($p->is_active)
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-green-100 text-green-800 border border-green-200">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-red-100 text-red-800 border border-red-200">
                                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                        clip-rule="evenodd"></path>
                                                </svg>
                                                Tidak Aktif
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center space-x-3">
                                            <a href="{{ route('admin.products.edit', $p) }}"
                                                class="inline-flex items-center px-3 py-2 bg-amber-100 text-amber-700 rounded-lg hover:bg-amber-200 transition-colors duration-200">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                Edit
                                            </a>
                                            <form method="POST" action="{{ route('admin.products.destroy', $p) }}"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-2 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors duration-200"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="px-6 py-20 text-center">
                                        <div class="flex flex-col items-center">
                                            <div
                                                class="w-24 h-24 bg-gray-100 rounded-full flex items-center justify-center mb-6">
                                                <svg class="w-12 h-12 text-gray-400" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada produk</h3>
                                            <p class="text-gray-500 mb-6">Mulai dengan menambahkan produk furniture
                                                pertama Anda.</p>
                                            <a href="{{ route('admin.products.create') }}"
                                                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-2xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                Tambah Produk Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($products->hasPages())
                    <div class="bg-gray-50 px-6 py-4 border-t border-gray-100">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
