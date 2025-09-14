<x-app-layout>
	<div class="max-w-7xl mx-auto p-6">
		<div class="flex justify-between items-center mb-6">
			<h1 class="text-3xl font-bold text-gray-900">Produk</h1>
			<a href="{{ route('admin.products.create') }}" 
			   class="px-6 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-colors">
				<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
				</svg>
				Tambah Produk
			</a>
		</div>
		
		@if(session('status'))
			<div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
				<div class="flex items-center">
					<svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
						<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
					</svg>
					{{ session('status') }}
				</div>
			</div>
		@endif
		
		<div class="bg-white shadow-md rounded-lg overflow-hidden">
			<table class="w-full">
				<thead class="bg-gray-50">
					<tr>
						<th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
						<th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
						<th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
						<th class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
						<th class="px-6 py-4 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
					</tr>
				</thead>
				<tbody class="bg-white divide-y divide-gray-200">
					@forelse($products as $p)
						<tr class="hover:bg-gray-50">
							<td class="px-6 py-4 whitespace-nowrap">
								<div class="flex items-center">
									@if($p->images->first())
										<img src="{{ Storage::url($p->images->first()->image_path) }}" 
											 alt="{{ $p->name }}" 
											 class="w-12 h-12 rounded-lg object-cover mr-4">
									@else
										<div class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center mr-4">
											<svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
											</svg>
										</div>
									@endif
									<div>
										<div class="text-sm font-medium text-gray-900">{{ $p->name }}</div>
										<div class="text-sm text-gray-500">{{ Str::limit($p->description, 60) }}</div>
									</div>
								</div>
							</td>
							<td class="px-6 py-4 whitespace-nowrap">
								<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
									{{ $p->category?->name }}
								</span>
							</td>
							<td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
								<div class="font-medium">Rp {{ number_format($p->price, 0, ',', '.') }}</div>
								@if($p->discount_price)
									<div class="text-sm text-red-600">
										Diskon: Rp {{ number_format($p->discount_price, 0, ',', '.') }}
									</div>
								@endif
							</td>
							<td class="px-6 py-4 whitespace-nowrap">
								@if($p->is_active)
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
								<a href="{{ route('admin.products.edit', $p) }}" 
								   class="text-amber-600 hover:text-amber-900 mr-3">
									Edit
								</a>
								<form method="POST" action="{{ route('admin.products.destroy', $p) }}" class="inline">
									@csrf
									@method('DELETE')
									<button type="submit" 
											class="text-red-600 hover:text-red-900"
											onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
										Hapus
									</button>
								</form>
							</td>
						</tr>
					@empty
						<tr>
							<td colspan="5" class="px-6 py-12 text-center text-gray-500">
								<svg class="w-12 h-12 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
								</svg>
								<p class="text-lg font-medium">Belum ada produk</p>
								<p class="text-sm">Mulai dengan menambahkan produk pertama Anda.</p>
								<a href="{{ route('admin.products.create') }}" 
								   class="mt-4 inline-flex items-center px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700">
									Tambah Produk
								</a>
							</td>
						</tr>
					@endforelse
				</tbody>
			</table>
		</div>
		
		@if($products->hasPages())
			<div class="mt-6">{{ $products->links() }}</div>
		@endif
	</div>
</x-app-layout>


