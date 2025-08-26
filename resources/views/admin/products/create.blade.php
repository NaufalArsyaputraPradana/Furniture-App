<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Tambah Produk</h1>
		<form method="post" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="space-y-4">
				<select name="category_id" class="w-full border p-2">
					@foreach($categories as $id=>$name)
						<option value="{{ $id }}">{{ $name }}</option>
					@endforeach
				</select>
				<input name="name" class="w-full border p-2" placeholder="Nama">
				<input name="slug" class="w-full border p-2" placeholder="Slug (opsional)">
				<input name="sku" class="w-full border p-2" placeholder="SKU (opsional)">
				<input name="price" type="number" step="0.01" class="w-full border p-2" placeholder="Harga">
				<input name="compare_at_price" type="number" step="0.01" class="w-full border p-2" placeholder="Harga Coret (opsional)">
				<input name="stock" type="number" class="w-full border p-2" placeholder="Stok">
				<input type="file" name="thumbnail" class="w-full border p-2">
				<input type="file" name="images[]" multiple class="w-full border p-2">
				<textarea name="short_description" class="w-full border p-2" placeholder="Deskripsi Singkat"></textarea>
				<textarea name="description" class="w-full border p-2" placeholder="Deskripsi Lengkap"></textarea>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" checked> Aktif</label>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_featured"> Featured</label>
				<button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
			</div>
		</form>
	</div>
</x-app-layout>


