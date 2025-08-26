<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Edit Kategori</h1>
		<form method="post" action="{{ route('admin.categories.update',$category) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="space-y-4">
				<input name="name" class="w-full border p-2" value="{{ old('name',$category->name) }}">
				<input name="slug" class="w-full border p-2" value="{{ old('slug',$category->slug) }}">
				<input type="file" name="image" class="w-full border p-2">
				<textarea name="description" class="w-full border p-2">{{ old('description',$category->description) }}</textarea>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" {{ $category->is_active ? 'checked' : '' }}> Aktif</label>
				<button class="px-4 py-2 bg-primary text-white rounded">Update</button>
			</div>
		</form>
	</div>
</x-app-layout>


