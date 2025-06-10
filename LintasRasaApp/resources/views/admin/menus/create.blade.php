    @extends('layouts.app')

    @section('content')
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-md rounded-xl">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Tambah Menu</h2>

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.menus.store') }}" enctype="multipart/form-data">
            @csrf

            {{-- Nama Menu --}}
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Menu</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            {{-- Deskripsi --}}
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea name="description" id="description" rows="3"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
            </div>

            {{-- Harga --}}
            <div class="mb-6">
                <label for="price" class="block text-gray-700 font-semibold mb-2">Harga (Rp)</label>
                <input type="number" name="price" id="price" step="0.01" value="{{ old('price') }}" required
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            {{-- Gambar Menu --}}
            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Gambar Menu</label>
                <input type="file" name="image" id="image" accept="image/*"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">

                @if (isset($menu) && $menu->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/menu_images/' . $menu->image) }}" alt="Menu Image" class="w-32 rounded shadow">
                    </div>
                @endif
            </div>

            {{-- Gambar QRIS --}}
            <div class="mb-6">
                <label for="qris_image" class="block text-gray-700 font-semibold mb-2">QRIS untuk Menu Ini</label>
                <input type="file" name="qris_image" id="qris_image" accept="image/*"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>


            <div class="flex justify-end">
                <a href="{{ route('admin.menus.index') }}"
                    class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 mr-2">Batal</a>
                <button type="submit"
                    class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Simpan</button>
            </div>
        </form>
    </div>
    @endsection
