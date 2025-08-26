<x-app-layout>
    <div class="py-8">
		<div class="max-w-7xl mx-auto px-4">
			<form method="get" class="mb-6 grid grid-cols-1 md:grid-cols-4 gap-2">
				<input type="text" name="q" value="{{ request('q') }}" placeholder="Cari produk..." class="border rounded px-3 py-2 w-full">
				<select name="category_id" class="border rounded px-3 py-2 w-full">
					<option value="">Semua Kategori</option>
					@foreach($categories as $c)
						<option value="{{ $c->id }}" {{ request('category_id')==$c->id ? 'selected' : '' }}>{{ $c->name }}</option>
					@endforeach
				</select>
				<input type="number" step="0.01" name="min_price" value="{{ request('min_price') }}" placeholder="Harga min" class="border rounded px-3 py-2 w-full">
				<input type="number" step="0.01" name="max_price" value="{{ request('max_price') }}" placeholder="Harga max" class="border rounded px-3 py-2 w-full">
				<button class="px-4 py-2 bg-primary text-white rounded md:col-span-4">Filter</button>
			</form>
			<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
				@foreach($products as $p)
					<a href="{{ route('catalog.show', $p->slug) }}" class="block border rounded-lg p-3 hover:shadow">
						<div class="aspect-square bg-gray-100 rounded mb-2"></div>
						<div class="font-medium">{{ $p->name }}</div>
						<div class="text-primary">Rp {{ number_format($p->price,0,',','.') }}</div>
					</a>
				@endforeach
			</div>
			<div class="mt-6">{{ $products->links() }}</div>
		</div>
	</div>
</x-app-layout>
