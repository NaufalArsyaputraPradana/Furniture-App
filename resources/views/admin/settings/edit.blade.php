<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Pengaturan Toko</h1>
		@if(session('status'))
			<div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('status') }}</div>
		@endif
		<form method="post" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="space-y-4">
				<input name="store_name" class="w-full border p-2" value="{{ old('store_name',$setting->store_name) }}" placeholder="Nama Toko">
				<input name="whatsapp_number" class="w-full border p-2" value="{{ old('whatsapp_number',$setting->whatsapp_number) }}" placeholder="Nomor WhatsApp (62xxx)">
				<input name="hero_title" class="w-full border p-2" value="{{ old('hero_title',$setting->hero_title) }}" placeholder="Hero Title">
				<textarea name="hero_subtitle" class="w-full border p-2" placeholder="Hero Subtitle">{{ old('hero_subtitle',$setting->hero_subtitle) }}</textarea>
				<input type="file" name="store_logo" class="w-full border p-2">
				<input type="file" name="hero_image" class="w-full border p-2">
				<button class="px-4 py-2 bg-primary text-white rounded">Simpan</button>
			</div>
		</form>
	</div>
</x-app-layout>


