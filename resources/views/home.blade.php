<x-app-layout>
    <div class="py-8">
    	<div class="max-w-7xl mx-auto px-4">
    		<div class="text-center mb-8">
    			<h1 class="text-3xl font-bold">{{ $settings->hero_title ?? 'Selamat Datang' }}</h1>
    			<p class="text-gray-500">{{ $settings->hero_subtitle ?? '' }}</p>
    		</div>
    		<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    			@foreach($featured as $p)
    				<a href="{{ route('catalog.show', $p->slug) }}" class="block border rounded-lg p-3 hover:shadow">
    					<div class="aspect-square bg-gray-100 rounded mb-2"></div>
    					<div class="font-medium">{{ $p->name }}</div>
    					<div class="text-primary">Rp {{ number_format($p->price,0,',','.') }}</div>
    				</a>
    			@endforeach
    		</div>
    	</div>
    </div>
</x-app-layout>
