<x-app-layout>
    <!-- Hero Header Section -->
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

        <!-- Animated Background Elements -->
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
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                        <span class="text-sm font-medium text-white/90">Manajemen Kategori</span>
                    </div>
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">Kategori Produk</h1>
                    <p class="text-xl text-white/80">
                        Kelola kategori untuk mengorganisir produk furniture
                    </p>
                </div>
                <a href="{{ route('admin.categories.create') }}"
                    class="flex items-center px-8 py-4 bg-white/10 backdrop-blur-sm text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 transition-all duration-300 transform hover:scale-105">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Kategori
                </a>
            </div>
        </div>
    </section>

    <div class="py-12 bg-gradient-to-br from-amber-50 via-yellow-50 to-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if (session('status'))
                <div
                    class="mb-8 backdrop-blur-sm bg-green-500/90 border border-green-400/50 text-white px-6 py-4 rounded-2xl shadow-lg">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <p class="font-medium">Berhasil!</p>
                            <p>{{ session('status') }}</p>
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
                                    class="px-6 py-4 text-left text-xs font-semibold text-amber-800 uppercase tracking-wider">
                                    Kategori</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-amber-800 uppercase tracking-wider">
                                    Slug</th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-semibold text-amber-800 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-4 text-center text-xs font-semibold text-amber-800 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white/50 divide-y divide-amber-100">
                            @forelse($categories as $c)
                                <tr
                                    class="group hover:bg-gradient-to-r hover:from-amber-50 hover:to-yellow-50 transition-all duration-300">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center">
                                            @if ($c->image)
                                                <div class="relative">
                                                    <img src="{{ Storage::url($c->image) }}" alt="{{ $c->name }}"
                                                        class="w-12 h-12 rounded-xl object-cover shadow-md mr-4 group-hover:scale-110 transition-transform duration-300">
                                                    <div
                                                        class="absolute inset-0 bg-amber-500 opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300">
                                                    </div>
                                                </div>
                                            @else
                                                <div
                                                    class="w-12 h-12 bg-gradient-to-br from-amber-200 to-yellow-300 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
                                                    <svg class="w-6 h-6 text-amber-600" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                                        </path>
                                                    </svg>
                                                </div>
                                            @endif
                                            <div>
                                                <div
                                                    class="text-sm font-semibold text-gray-900 group-hover:text-amber-700 transition-colors duration-300">
                                                    {{ $c->name }}</div>
                                                @if ($c->description)
                                                    <div class="text-sm text-gray-500 mt-1">
                                                        {{ Str::limit($c->description, 50) }}</div>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <code
                                            class="bg-amber-100 group-hover:bg-amber-200 px-3 py-1 rounded-lg text-xs font-mono text-amber-800 transition-colors duration-300">{{ $c->slug }}</code>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        @if ($c->is_active)
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-800 shadow-sm">
                                                <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                                Aktif
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-800 shadow-sm">
                                                <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                                                Tidak Aktif
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-end space-x-3">
                                            <a href="{{ route('admin.categories.edit', $c) }}"
                                                class="inline-flex items-center px-3 py-1.5 bg-amber-100 text-amber-700 rounded-lg hover:bg-amber-200 transition-colors duration-200 text-xs font-medium">
                                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                                Edit
                                            </a>
                                            <form method="POST" action="{{ route('admin.categories.destroy', $c) }}"
                                                class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="inline-flex items-center px-3 py-1.5 bg-red-100 text-red-700 rounded-lg hover:bg-red-200 transition-colors duration-200 text-xs font-medium"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
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
                                    <td colspan="4" class="px-6 py-16 text-center">
                                        <div class="flex flex-col items-center justify-center">
                                            <div
                                                class="w-24 h-24 bg-gradient-to-br from-amber-100 to-yellow-200 rounded-full flex items-center justify-center mb-6">
                                                <svg class="w-12 h-12 text-amber-600" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum ada kategori
                                            </h3>
                                            <p class="text-gray-500 mb-6 max-w-sm">Mulai dengan menambahkan kategori
                                                pertama untuk mengorganisir produk furniture Anda.</p>
                                            <a href="{{ route('admin.categories.create') }}"
                                                class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-600 to-yellow-600 text-white rounded-xl hover:from-amber-700 hover:to-yellow-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                                </svg>
                                                Tambah Kategori Pertama
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($categories->hasPages())
                    <div class="mt-8 flex justify-center">
                        <div class="backdrop-blur-sm bg-white/80 rounded-2xl p-4 shadow-lg">
                            {{ $categories->links() }}
                        </div>
                    </div>
                @endif
            </div>
</x-app-layout>
