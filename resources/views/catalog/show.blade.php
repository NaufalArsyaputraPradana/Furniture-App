<x-app-layout>
    <div class="py-8">
		<div class="max-w-5xl mx-auto px-4 grid grid-cols-1 md:grid-cols-2 gap-8">
			<div class="aspect-square bg-gray-100 rounded"></div>
			<div>
				<h1 class="text-2xl font-bold mb-2">{{ $product->name }}</h1>
				<div class="text-primary text-xl mb-4">Rp {{ number_format($product->price,0,',','.') }}</div>
				<p class="text-gray-600 mb-6">{{ $product->short_description }}</p>
				@php $wa = $settings?->whatsapp_number; @endphp
				<a href="https://wa.me/{{ $wa }}?text={{ urlencode('Halo, saya ingin pesan '.$product->name) }}" class="inline-flex items-center px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Pesan via WhatsApp</a>
			</div>
		</div>
	</div>
</x-app-layout>
