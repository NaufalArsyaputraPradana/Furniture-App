<x-app-layout>
    <div class="py-8">
		<div class="max-w-7xl mx-auto px-4">
			<h1 class="text-2xl font-bold mb-6">Dashboard</h1>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
				<div class="p-4 rounded border bg-white">
					<div class="text-gray-600 text-sm">Produk</div>
					<div class="text-3xl font-semibold">{{ $stats['products'] }}</div>
				</div>
				<div class="p-4 rounded border bg-white">
					<div class="text-gray-600 text-sm">Kategori</div>
					<div class="text-3xl font-semibold">{{ $stats['categories'] }}</div>
				</div>
				<div class="p-4 rounded border bg-white">
					<div class="text-gray-600 text-sm">Produk Aktif</div>
					<div class="text-3xl font-semibold">{{ $stats['active_products'] }}</div>
				</div>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
				<div class="p-6 rounded border bg-white">
					<h2 class="text-lg font-semibold mb-3">Kelola Produk</h2>
					<div class="flex gap-2">
						<a href="{{ route('admin.products.index') }}" class="px-4 py-2 bg-primary text-white rounded">Daftar Produk</a>
						<a href="{{ route('admin.products.create') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Tambah Produk</a>
					</div>
				</div>
				<div class="p-6 rounded border bg-white">
					<h2 class="text-lg font-semibold mb-3">Kelola Kategori</h2>
					<div class="flex gap-2">
						<a href="{{ route('admin.categories.index') }}" class="px-4 py-2 bg-primary text-white rounded">Daftar Kategori</a>
						<a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-gray-800 text-white rounded">Tambah Kategori</a>
					</div>
				</div>
				<div class="p-6 rounded border bg-white">
					<h2 class="text-lg font-semibold mb-3">Pengaturan</h2>
					<div class="flex gap-2">
						<a href="{{ route('admin.settings.edit') }}" class="px-4 py-2 bg-gray-700 text-white rounded">Buka Pengaturan</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
