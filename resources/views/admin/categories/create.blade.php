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
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
								</svg>
								Nama Kategori *
							</label>
							<input name="name" 
								   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
								   placeholder="Contoh: Kursi, Meja, Lemari, Tempat Tidur" 
								   value="{{ old('name') }}" 
								   required>
						</div>
						
						<div>
							<label class="block text-sm font-semibold text-gray-700 mb-3">
								<svg class="w-4 h-4 inline mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
								</svg>
								Gambar Kategori (Opsional)
							</label>
							<div class="relative">
								<input type="file" 
									   name="image" 
									   class="w-full border-2 border-gray-200 rounded-xl p-4 focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 hover:border-amber-300" 
									   accept="image/*">
								<div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
									<svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
									</svg>
								</div>
							</div>
							<p class="text-sm text-gray-500 mt-2">Format: JPG, PNG, WebP. Ukuran maksimal: 4MB</p>
						</div>
						
						<div class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-xl p-6 border border-amber-200">
							<div class="flex items-center mb-4">
								<svg class="w-5 h-5 text-amber-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
								</svg>
								<h3 class="text-lg font-semibold text-amber-800">Deskripsi AI Generator</h3>
							</div>
							<p class="text-amber-700 text-sm mb-4">
								Deskripsi kategori akan otomatis dibuatkan berdasarkan nama kategori menggunakan AI.
								Deskripsi akan mencakup jenis produk, keunggulan, dan karakteristik furniture Jepara dalam kategori ini.
							</p>
							<div class="bg-white rounded-lg p-3 border border-amber-300">
								<div class="flex items-center text-amber-600">
									<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									<span class="text-sm font-medium">Deskripsi akan dibuat otomatis setelah menyimpan kategori</span>
								</div>
							</div>
						</div>
						
						<div class="bg-gray-50 rounded-xl p-6">
							<label class="inline-flex items-center gap-3">
								<input type="hidden" name="is_active" value="0">
								<input type="checkbox" 
									   name="is_active" 
									   value="1"
									   class="w-5 h-5 rounded border-gray-300 text-amber-600 focus:ring-amber-500 transition-colors" 
									   {{ old('is_active', '1') == '1' ? 'checked' : '' }}>
								<span class="text-sm font-semibold text-gray-700 flex items-center">
									<svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
									</svg>
									Kategori Aktif
								</span>
							</label>
							<p class="text-sm text-gray-500 mt-3">
								• <strong>Kategori Aktif:</strong> Tampil di navigasi dan dapat digunakan untuk produk
							</p>
						</div>
						
						<div class="flex flex-col sm:flex-row gap-4 pt-6 border-t border-gray-200">
							<button type="submit" 
									class="flex-1 flex items-center justify-center px-8 py-4 bg-gradient-to-r from-amber-600 to-amber-700 text-white font-semibold rounded-xl hover:from-amber-700 hover:to-amber-800 focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 shadow-lg">
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


