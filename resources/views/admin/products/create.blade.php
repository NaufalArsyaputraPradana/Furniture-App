<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
		
		@if ($errors->any())
			<div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
				<ul class="list-disc list-inside">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="space-y-4">
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Kategori</label>
					<select name="category_id" class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" required>
						<option value="">Pilih Kategori</option>
						@foreach($categories as $id => $name)
							<option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $name }}</option>
						@endforeach
					</select>
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Nama Produk</label>
					<input name="name" 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   placeholder="Nama Produk" 
						   value="{{ old('name') }}" 
						   required>
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Slug (Opsional)</label>
					<input name="slug" 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   placeholder="Slug (opsional)" 
						   value="{{ old('slug') }}">
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">SKU (Opsional)</label>
					<input name="sku" 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   placeholder="SKU (opsional)" 
						   value="{{ old('sku') }}">
				</div>
				
				<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Harga</label>
						<input name="price" 
							   type="number" 
							   step="0.01" 
							   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
							   placeholder="Harga" 
							   value="{{ old('price') }}" 
							   required>
					</div>
					
					<div>
						<label class="block text-sm font-medium text-gray-700 mb-2">Harga Coret (Opsional)</label>
						<input name="compare_at_price" 
							   type="number" 
							   step="0.01" 
							   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
							   placeholder="Harga Coret (opsional)" 
							   value="{{ old('compare_at_price') }}">
					</div>
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Stok</label>
					<input name="stock" 
						   type="number" 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   placeholder="Stok" 
						   value="{{ old('stock', 0) }}" 
						   required>
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Gambar Utama</label>
					<input type="file" 
						   name="thumbnail" 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   accept="image/*">
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Gambar Tambahan</label>
					<input type="file" 
						   name="images[]" 
						   multiple 
						   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
						   accept="image/*">
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Singkat</label>
					<textarea name="short_description" 
							  class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
							  placeholder="Deskripsi Singkat" 
							  rows="3">{{ old('short_description') }}</textarea>
				</div>
				
				<div>
					<label class="block text-sm font-medium text-gray-700 mb-2">Deskripsi Lengkap</label>
					<textarea name="description" 
							  class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
							  placeholder="Deskripsi Lengkap" 
							  rows="5">{{ old('description') }}</textarea>
				</div>
				
				<div class="flex flex-wrap gap-4">
					<label class="inline-flex items-center gap-2">
						<input type="checkbox" 
							   name="is_active" 
							   class="rounded border-gray-300 text-amber-600 focus:ring-amber-500" 
							   {{ old('is_active', true) ? 'checked' : '' }}>
						<span class="text-sm font-medium text-gray-700">Aktif</span>
					</label>
					
					<label class="inline-flex items-center gap-2">
						<input type="checkbox" 
							   name="is_featured" 
							   class="rounded border-gray-300 text-amber-600 focus:ring-amber-500" 
							   {{ old('is_featured') ? 'checked' : '' }}>
						<span class="text-sm font-medium text-gray-700">Featured</span>
					</label>
				</div>
				
				<div class="flex gap-4 pt-4">
					<button type="submit" 
							class="px-6 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-colors">
						Simpan Produk
					</button>
					
					<a href="{{ route('admin.products.index') }}" 
					   class="px-6 py-3 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
						Batal
					</a>
				</div>
			</div>
		</form>
	</div>
</x-app-layout>


