<x-app-layout>
	<div class="max-w-7xl mx-auto p-6">
		<div class="flex justify-between items-center mb-4">
			<h1 class="text-2xl font-bold">Kategori</h1>
			<a href="{{ route('admin.categories.create') }}" class="px-4 py-2 bg-primary text-white rounded">Tambah</a>
		</div>
		@if(session('status'))
			<div class="mb-4 p-3 bg-green-100 text-green-800 rounded">{{ session('status') }}</div>
		@endif
		<table class="w-full border">
			<thead>
				<tr>
					<th class="p-2 border">Nama</th>
					<th class="p-2 border">Slug</th>
					<th class="p-2 border"></th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $c)
					<tr>
						<td class="p-2 border">{{ $c->name }}</td>
						<td class="p-2 border">{{ $c->slug }}</td>
						<td class="p-2 border text-right">
							<a class="text-blue-600" href="{{ route('admin.categories.edit',$c) }}">Edit</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<div class="mt-4">{{ $categories->links() }}</div>
	</div>
</x-app-layout>


