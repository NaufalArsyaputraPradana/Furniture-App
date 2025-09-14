<x-app-layout>
	<!-- Hero Header Section -->
    <section class="relative bg-gradient-to-br from-emerald-600 via-emerald-500 to-teal-500 py-16 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-emerald-700 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-teal-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-center text-white">
                <div class="mb-6 md:mb-0">
                    <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
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
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    Tambah Kategori
                </a>
            </div>
        </div>
    </section>

	<div class="py-12 bg-gradient-to-br from-gray-50 to-white">
		<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
			@if(session('status'))
				<div class="mb-8 p-6 bg-emerald-50 border-l-4 border-emerald-400 rounded-lg">
					<div class="flex items-center">
						<svg class="w-6 h-6 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
						<div>
							<p class="text-emerald-800 font-medium">Berhasil!</p>
							<p class="text-emerald-700">{{ session('status') }}</p>
						</div>
					</div>
				</div>
			@endif
			
			<div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100">
				<div class="overflow-x-auto">
					<table class="w-full">
						<thead class="bg-gradient-to-r from-gray-50 to-gray-100">
							<tr>
								<th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Kategori</th>
								<th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Slug</th>
								<th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Status</th>
								<th class="px-6 py-4 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">Aksi</th>
							</tr>
						</thead>
						<tbody class="bg-white divide-y divide-gray-100">
							@forelse($categories as $c)
								<tr class="group hover:bg-gradient-to-r hover:from-emerald-50 hover:to-teal-50 transition-all duration-300">
									<td class="px-6 py-4">
										<div class="flex items-center">
											@if($c->image)
												<div class="relative">
													<img src="{{ Storage::url($c->image) }}" alt="{{ $c->name }}" class="w-12 h-12 rounded-xl object-cover shadow-md mr-4 group-hover:scale-110 transition-transform duration-300">
													<div class="absolute inset-0 bg-emerald-500 opacity-0 group-hover:opacity-10 rounded-xl transition-opacity duration-300"></div>
												</div>
											@else
												<div class="w-12 h-12 bg-gradient-to-br from-gray-200 to-gray-300 rounded-xl flex items-center justify-center mr-4 group-hover:scale-110 transition-transform duration-300">
													<svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
													</svg>
												</div>
											@endif
											<div>
												<div class="text-sm font-semibold text-gray-900 group-hover:text-emerald-700 transition-colors duration-300">{{ $c->name }}</div>
												@if($c->description)
													<div class="text-sm text-gray-500 mt-1">{{ Str::limit($c->description, 50) }}</div>
												@endif
											</div>
										</div>
									</td>
									<td class="px-6 py-4">
										<code class="bg-gray-100 group-hover:bg-emerald-100 px-3 py-1 rounded-lg text-xs font-mono text-gray-600 transition-colors duration-300">{{ $c->slug }}</code>
									</td>
									<td class="px-6 py-4 text-center">
								@if($c->is_active)
									<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
										Aktif
									</span>
								@else
									<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
										Tidak Aktif
									</span>
								@endif
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
								<a href="{{ route('admin.categories.edit', $c) }}" 
								   class="text-amber-600 hover:text-amber-900 mr-3">
									Edit
								</a>
								<form method="POST" action="{{ route('admin.categories.destroy', $c) }}" class="inline">
									@csrf
									@method('DELETE')
									<button type="submit" 
											class="text-red-600 hover:text-red-900"
											onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">
										Hapus
									</button>
								</form>
							</td>
						</tr>
					@empty
						<tr>
							<td colspan="4" class="px-6 py-12 text-center text-gray-500">
								<svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
								</svg>
								<p class="text-lg font-medium">Belum ada kategori</p>
								<p class="text-sm">Mulai dengan menambahkan kategori pertama Anda.</p>
								<a href="{{ route('admin.categories.create') }}" 
								   class="mt-4 inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700">
									Tambah Kategori
								</a>
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
		
		@if($categories->hasPages())
			<div class="mt-6">{{ $categories->links() }}</div>
		@endif
	</div>
</x-app-layout>


