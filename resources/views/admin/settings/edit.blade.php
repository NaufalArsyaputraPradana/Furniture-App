<x-app-layout>
	<div class="max-w-3xl mx-auto p-6">
		<h1 class="text-2xl font-bold mb-4">Pengaturan Toko</h1>
		
		@if(session('status'))
			<div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('status') }}</div>
		@endif
		
		@if ($errors->any())
			<div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
				<ul class="list-disc list-inside">
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		
		<form method="post" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="space-y-6">
				<div class="bg-white p-6 rounded-lg shadow-sm border">
					<h3 class="text-lg font-semibold mb-4">Informasi Toko</h3>
					
					<div class="space-y-4">
						<div>
							<label class="block text-sm font-medium text-gray-700 mb-2">Nama Toko</label>
							<input name="store_name" 
								   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
								   value="{{ old('store_name', $setting->store_name) }}" 
								   placeholder="Nama Toko" 
								   required>
						</div>
						
						<div>
							<label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
							<input name="whatsapp_number" 
								   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
								   value="{{ old('whatsapp_number', $setting->whatsapp_number) }}" 
								   placeholder="62xxx (tanpa tanda +)" 
								   required>
							<p class="text-sm text-gray-500 mt-1">Format: 62812345678 (tanpa tanda + atau spasi)</p>
						</div>
					</div>
				</div>
				
				<div class="bg-white p-6 rounded-lg shadow-sm border">
					<h3 class="text-lg font-semibold mb-4">Logo Toko</h3>
					
					<div>
						@if($setting->store_logo)
							<div class="mb-4">
								<img src="{{ Storage::url($setting->store_logo) }}" alt="Current logo" class="w-32 h-32 object-contain bg-gray-100 rounded">
								<p class="text-sm text-gray-500 mt-1">Logo saat ini</p>
							</div>
						@endif
						<input type="file" 
							   name="store_logo" 
							   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
							   accept="image/*">
						<p class="text-sm text-gray-500 mt-1">Ukuran disarankan: 200x200px atau rasio 1:1</p>
					</div>
				</div>
				
				<div class="bg-white p-6 rounded-lg shadow-sm border">
					<h3 class="text-lg font-semibold mb-4">Hero Section</h3>
					
					<div class="space-y-4">
						<div>
							<label class="block text-sm font-medium text-gray-700 mb-2">Hero Title</label>
							<input name="hero_title" 
								   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
								   value="{{ old('hero_title', $setting->hero_title) }}" 
								   placeholder="Judul utama halaman beranda">
						</div>
						
						<div>
							<label class="block text-sm font-medium text-gray-700 mb-2">Hero Subtitle</label>
							<textarea name="hero_subtitle" 
									  class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
									  placeholder="Deskripsi singkat tentang toko" 
									  rows="3">{{ old('hero_subtitle', $setting->hero_subtitle) }}</textarea>
						</div>
						
						<div>
							<label class="block text-sm font-medium text-gray-700 mb-2">Hero Image</label>
							@if($setting->hero_image)
								<div class="mb-4">
									<img src="{{ Storage::url($setting->hero_image) }}" alt="Current hero image" class="w-64 h-32 object-cover rounded">
									<p class="text-sm text-gray-500 mt-1">Gambar hero saat ini</p>
								</div>
							@endif
							<input type="file" 
								   name="hero_image" 
								   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-amber-500 focus:border-amber-500" 
								   accept="image/*">
							<p class="text-sm text-gray-500 mt-1">Ukuran disarankan: 1920x1080px atau rasio 16:9</p>
						</div>
					</div>
				</div>
				
				<div class="flex gap-4 pt-4">
					<button type="submit" 
							class="px-6 py-3 bg-amber-600 text-white font-medium rounded-lg hover:bg-amber-700 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-colors">
						Simpan Pengaturan
					</button>
					
					<a href="{{ route('dashboard') }}" 
					   class="px-6 py-3 bg-gray-600 text-white font-medium rounded-lg hover:bg-gray-700 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
						Kembali ke Dashboard
					</a>
				</div>
			</div>
		</form>
	</div>
</x-app-layout>


