<x-app-layout>
	<!-- Hero Header Section -->
    <section class="relative bg-gradient-to-br from-emerald-600 via-emerald-500 to-teal-500 py-16 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-emerald-700 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse"></div>
            <div class="absolute top-1/3 right-1/4 w-64 h-64 bg-teal-600 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse" style="animation-delay: 2s;"></div>
        </div>
        
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center text-white">
                <div class="inline-flex items-center bg-white/10 backdrop-blur-sm rounded-full px-4 py-2 mb-6">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    <span class="text-sm font-medium text-white/90">Admin Panel</span>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold mb-4">Tambah Kategori Baru</h1>
                <p class="text-xl text-white/80 max-w-2xl mx-auto">
                    Buat kategori baru untuk mengorganisir produk furniture Anda
                </p>
            </div>
        </div>
    </section>

	<div class="py-12 bg-gradient-to-br from-gray-50 to-white">
		<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
			@if ($errors->any())
				<div class="mb-8 p-6 bg-red-50 border-l-4 border-red-400 rounded-lg">
					<div class="flex items-center mb-3">
						<svg class="w-5 h-5 text-red-400 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
						</svg>
						<h3 class="text-red-800 font-medium">Terdapat kesalahan dalam form:</h3>
					</div>
					<ul class="list-disc list-inside text-red-700 space-y-1">
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
			
			<div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-100">
				<form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
					@csrf
					<div class="space-y-8">
						<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
									</svg>
									Nama Kategori *
								</label>
								<input name="name" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:border-emerald-300" 
									   placeholder="Contoh: Sofa, Meja Makan, Lemari" 
									   value="{{ old('name') }}" 
									   required>
							</div>
							
							<div>
								<label class="block text-sm font-semibold text-gray-700 mb-3">
									<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
									</svg>
									Slug (Opsional)
								</label>
								<input name="slug" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:border-emerald-300" 
									   placeholder="sofa-modern" 
									   value="{{ old('slug') }}">
								<p class="text-sm text-gray-500 mt-2 flex items-center">
									<svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Biarkan kosong untuk generate otomatis dari nama
								</p>
							</div>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
								</svg>
								Gambar Kategori
							</label>
							<div class="relative">
								<input type="file" 
									   name="image" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:border-emerald-300" 
									   accept="image/*">
								<div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
									<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
									</svg>
								</div>
							</div>
							<p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, WebP. Ukuran maksimal: 2MB</p>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
								</svg>
								Deskripsi
							</label>
							<textarea name="description" 
									  class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-all duration-300 hover:border-emerald-300" 
									  placeholder="Deskripsi singkat tentang kategori ini..." 
									  rows="4">{{ old('description') }}</textarea>
						</div>
						
						<div class="bg-gray-50 rounded-xl p-6">
							<label class="inline-flex items-center gap-3">
								<input type="checkbox" 
									   name="is_active" 
									   class="w-5 h-5 rounded border-gray-300 text-emerald-600 focus:ring-emerald-500 transition-colors" 
									   {{ old('is_active', true) ? 'checked' : '' }}>
								<span class="text-sm font-semibold text-gray-700 flex items-center">
									<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Kategori Aktif
								</span>
							</label>
							<p class="text-sm text-gray-500 mt-1 ml-8">Centang untuk mengaktifkan kategori ini</p>
						</div>
						
						<div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
							<button type="submit" 
									class="flex-1 flex items-center justify-center px-8 py-4 bg-gradient-to-r from-emerald-600 to-emerald-700 text-white font-semibold rounded-xl hover:from-emerald-700 hover:to-emerald-800 focus:ring-2 focus:ring-emerald-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 shadow-lg">
								<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
								</svg>
								Simpan Kategori
							</button>
							
							<a href="{{ route('admin.categories.index') }}" 
							   class="flex-1 flex items-center justify-center px-8 py-4 bg-white border-2 border-gray-200 text-gray-700 font-semibold rounded-xl hover:border-gray-300 hover:bg-gray-50 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105">
								<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
								</svg>
								Batal
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-app-layout>


