<x-app-layout>
    <div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold mb-4">Profil Pengguna</h2>

        <p><strong>Nama:</strong> {{ auth()->user()->name }}</p>
        <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
        <p><strong>Tanggal Registrasi:</strong> {{ auth()->user()->created_at->format('d M Y') }}</p>

        <h3 class="mt-6 text-lg font-medium">Edit Profil</h3>
        <form method="POST" action="{{ route('profile.update') }}">
            @csrf
            @method('PATCH')
            <input type="text" name="name" value="{{ auth()->user()->name }}" class="border p-2 rounded w-full mb-2">
            <input type="email" name="email" value="{{ auth()->user()->email }}" class="border p-2 rounded w-full mb-2">
            <button type="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Simpan Perubahan</button>
        </form>

        <h3 class="mt-6 text-lg font-medium">Ubah Password</h3>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            @method('PUT')
            <input type="password" name="current_password" placeholder="Password Lama" class="border p-2 rounded w-full mb-2">
            <input type="password" name="password" placeholder="Password Baru" class="border p-2 rounded w-full mb-2">
            <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="border p-2 rounded w-full mb-2">
            <button type="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Ubah Password</button>
        </form>

        <h3 class="mt-6 text-lg font-medium text-red-500">Hapus Akun</h3>
        <form method="POST" action="{{ route('profile.destroy') }}">
            @csrf
            @method('DELETE')
            <input type="password" name="password" placeholder="Masukkan password untuk menghapus akun" class="border p-2 rounded w-full mb-2">
            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Hapus Akun</button>
        </form>
    </div>
</x-app-layout>
