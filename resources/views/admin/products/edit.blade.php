<x-app-layout>
	<!-- Hero Header Section -->
    <section class="relative bg-gradient-to-br from-amber-600 via-amber-500 to-yellow-500 py-16 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-amber-700 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-yellow-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    <span class="text-sm font-medium text-white/90">Admin Panel</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Edit Produk</h1>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Perbarui informasi produk furniture Anda
                </p>
            </div>
        </div>
    </section>

	<div class="py-12 bg-gradient-to-br from-gray-50 to-white">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			@if ($errors->any())
				<div class="mb-8 p-6 bg-red-50 border-l-4 border-red-400 rounded-lg">
					<div class="flex items-center mb-3">
						<svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
						<h3 class="text-red-800 font-medium">Terdapat kesalahan dalam form:</h3>
					</div>
					<ul class="list-disc list-inside text-red-700 space-y-1">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
			<div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
				<form method="post" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<div class="space-y-8">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
									</svg>
									Kategori *
								</label>
								<select name="category_id" class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" required>
									<option value="">Pilih Kategori</option>
									@foreach($categories as $id => $name)
										<option value="{{ $id }}" {{ old('category_id', $product->category_id) == $id ? 'selected' : '' }}>{{ $name }}</option>
									@endforeach
								</select>
							</div>
							
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
									</svg>
									Nama Produk *
								</label>
								<input name="name" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   placeholder="Contoh: Kursi Sofa Minimalis Jati" 
									   value="{{ old('name', $product->name) }}" 
									   required>
							</div>
						</div>
						
						<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
									</svg>
									Harga *
								</label>
								<input name="price" 
									   type="number" 
									   step="1000" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   placeholder="Contoh: 2500000" 
									   value="{{ old('price', $product->price) }}" 
									   required>
								<p class="text-sm text-gray-500 mt-2">Masukkan harga dalam Rupiah (tanpa titik atau koma)</p>
							</div>
							
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
									</svg>
									Harga Coret (Opsional)
								</label>
								<input name="compare_at_price" 
									   type="number" 
									   step="1000" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   placeholder="Contoh: 3000000" 
									   value="{{ old('compare_at_price', $product->compare_at_price) }}">
								<p class="text-sm text-gray-500 mt-2">Harga sebelum diskon (opsional)</p>
							</div>
						</div>

						<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
									</svg>
									Stok (Opsional)
								</label>
								<input name="stock" 
									   type="number" 
									   min="0" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   placeholder="Contoh: 10" 
									   value="{{ old('stock', $product->stock) }}">
								<p class="text-sm text-gray-500 mt-2">Kosongkan atau isi 0 jika stok tidak terbatas</p>
							</div>
							
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path>
									</svg>
									SKU (Opsional)
								</label>
								<input name="sku" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   placeholder="Contoh: KRS-001" 
									   value="{{ old('sku', $product->sku) }}">
								<p class="text-sm text-gray-500 mt-2">Kode unik produk untuk manajemen inventori</p>
							</div>
						</div>

						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
								</svg>
								Gambar Utama *
							</label>
							@if($product->thumbnail_path)
								<div class="mb-3 flex items-center space-x-3">
									<img src="{{ asset('storage/'.$product->thumbnail_path) }}" 
										 alt="Current thumbnail" 
										 class="w-16 h-16 object-cover rounded-lg border border-gray-200">
									<span class="text-sm text-gray-600">Gambar saat ini</span>
								</div>
							@endif
							<div class="relative">
								<input type="file" 
									   name="thumbnail" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   accept="image/*">
								<div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
									<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
									</svg>
								</div>
							</div>
							<p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, WebP. Ukuran maksimal: 4MB</p>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
								</svg>
								Gambar Tambahan (Opsional)
							</label>
							@if($product->images && $product->images->count() > 0)
								<div class="grid grid-cols-4 gap-3 mb-4">
									@foreach($product->images as $image)
										<div class="relative">
											<img src="{{ asset('storage/'.$image->path) }}" 
												 alt="Product image" 
												 class="w-20 h-20 object-cover rounded-lg border border-gray-200">
										</div>
									@endforeach
								</div>
								<p class="text-sm text-gray-600 mb-3">Gambar tambahan saat ini</p>
							@endif
							<input type="file" 
								   name="images[]" 
								   multiple 
								   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
								   accept="image/*">
							<p class="text-sm text-gray-500 mt-2">Pilih beberapa gambar sekaligus untuk galeri produk</p>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
								</svg>
								Deskripsi Tambahan (Opsional)
							</label>
							<textarea name="short_description" 
									  class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									  placeholder="Informasi tambahan seperti dimensi, bahan, atau fitur khusus..." 
									  rows="3">{{ old('short_description', $product->short_description) }}</textarea>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
								</svg>
								Deskripsi Lengkap (Auto Generated)
							</label>
							<textarea name="description" 
									  class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									  placeholder="Deskripsi produk akan otomatis dibuat jika dikosongkan" 
									  rows="5">{{ old('description', $product->description) }}</textarea>
							<p class="text-sm text-gray-500 mt-2">Kosongkan untuk regenerate deskripsi AI berdasarkan nama produk</p>
						</div>
						
						<div class="bg-gray-50 rounded-xl p-6">
							<div class="flex flex-wrap gap-6">
								<label class="inline-flex items-center gap-3">
									<input type="hidden" name="is_active" value="0">
									<input type="checkbox" 
										   name="is_active" 
										   value="1"
										   class="w-5 h-5 rounded border-gray-300 text-amber-600 focus:ring-amber-500 transition-colors" 
										   {{ old('is_active', $product->is_active) ? 'checked' : '' }}>
									<span class="text-sm font-semibold text-gray-700 flex items-center">
										<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
											<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
										</svg>
										Produk Aktif
									</span>
								</label>
								
								<label class="inline-flex items-center gap-3">
									<input type="hidden" name="is_featured" value="0">
									<input type="checkbox" 
										   name="is_featured" 
										   value="1"
										   class="w-5 h-5 rounded border-gray-300 text-amber-600 focus:ring-amber-500 transition-colors" 
										   {{ old('is_featured', $product->is_featured) ? 'checked' : '' }}>
									<span class="text-sm font-semibold text-gray-700 flex items-center">
										<svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
											<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
										</svg>
										Produk Unggulan
									</span>
								</label>
							</div>
							<p class="text-sm text-gray-500 mt-3">
								• <strong>Produk Aktif:</strong> Tampil di katalog dan dapat dilihat pelanggan<br>
								• <strong>Produk Unggulan:</strong> Tampil di halaman beranda dan section khusus
							</p>
						</div>
						
						<div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
							<button type="submit" 
									class="flex-1 flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-xl hover:from-amber-700 hover:to-amber-800 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 shadow-lg">
								<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path>
								</svg>
								Update Produk
							</button>
							
							<a href="{{ route('admin.products.index') }}" 
							   class="flex-1 flex items-center justify-center px-8 py-4 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-gray-300 hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105">
								<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
								</svg>
								Batal
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>


