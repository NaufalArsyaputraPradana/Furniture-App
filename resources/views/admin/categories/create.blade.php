<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Tambah Kategori</h1>
		<form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="space-y-4">
				<input name="name" class="w-full border p-2" placeholder="Nama">
				<input name="slug" class="w-full border p-2" placeholder="Slug (opsional)">
				<input type="file" name="image" class="w-full border p-2">
				<textarea name="description" class="w-full border p-2" placeholder="Deskripsi"></textarea>
				<label class="inline-flex items-center gap-2"><input type="checkbox" name="is_active" checked> Aktif</label>
				<button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
			</div>
		</form>
	</div>
</x-app-layout>


