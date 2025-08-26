<x-app-layout>
    <div class="py-8">
		<div class="max-w-7xl mx-auto px-4">
			<h1 class="text-2xl font-bold mb-6">Dashboard</h1>
			<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
				<div class="p-4 rounded border">Produk: {{ $stats['products'] }}</div>
				<div class="p-4 rounded border">Kategori: {{ $stats['categories'] }}</div>
				<div class="p-4 rounded border">Aktif: {{ $stats['active_products'] }}</div>
			</div>
		</div>
	</div>
</x-app-layout>
