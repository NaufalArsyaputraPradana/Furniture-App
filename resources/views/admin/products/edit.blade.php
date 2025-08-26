<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Edit Produk</h1>
		<form method="post" action="{{ route('admin.products.update',$product) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="space-y-4">
				<select name="category_id" class="w-full border p-2">
					@foreach($categories as $id=>$name)
						<option value="{{ $id }}" {{ $product->category_id==$id ? 'selected' : '' }}>{{ $name }}</option>
					@endforeach
				</select>
				<input name="name" class="w-full border p-2" value="{{ old('name',$product->name) }}">
				<input name="slug" class="w-full border p-2" value="{{ old('slug',$product->slug) }}">
				<input name="sku" class="w-full border p-2" value="{{ old('sku',$product->sku) }}">
				<input name="price" type="number" step="0.01" class="w-full border p-2" value="{{ old('price',$product->price) }}">
				<input name="compare_at_price" type="number" step="0.01" class="w-full border p-2" value="{{ old('compare_at_price',$product->compare_at_price) }}">
				<input name="stock" type="number" class="w-full border p-2" value="{{ old('stock',$product->stock) }}">
				<input type="file" name="thumbnail" class="w-full border p-2">
				<textarea name="short_description" class="w-full border p-2">{{ old('short_description',$product->short_description) }}</textarea>
				<textarea name="description" class="w-full border p-2">{{ old('description',$product->description) }}</textarea>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" {{ $product->is_active ? 'checked' : '' }}> Aktif</label>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_featured" {{ $product->is_featured ? 'checked' : '' }}> Featured</label>
				<button class="px-4 py-2 bg-primary text-white rounded">Update</button>
			</div>
		</form>
	</div>
</x-app-layout>


