@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 900px;
        margin: 30px auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    h1 {
        margin-bottom: 20px;
        font-size: 28px;
        color: #333;
    }

    .add-button {
        display: inline-block;
        background-color: #3490dc;
        color: white;
        padding: 10px 16px;
        border-radius: 5px;
        text-decoration: none;
        margin-bottom: 20px;
    }

    .add-button:hover {
        background-color: #2779bd;
    }

    .success-message {
        background-color: #d4edda;
        color: #155724;
        padding: 10px 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        border: 1px solid #c3e6cb;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px 15px;
        border: 1px solid #dee2e6;
        text-align: left;
        vertical-align: middle;
    }

    th {
        background-color: #f8f9fa;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .action-links a {
        color: #3490dc;
        text-decoration: none;
        margin-right: 8px;
    }

    .action-links a:hover {
        text-decoration: underline;
    }

    .delete-button {
        color: red;
        background: none;
        border: none;
        cursor: pointer;
        padding: 0;
        font: inherit;
    }

    .delete-button:hover {
        text-decoration: underline;
    }

    .menu-image {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>

<div class="container">
    <h1>📋 Daftar Menu</h1>

    <a href="{{ route('admin.menus.create') }}" class="add-button">+ Tambah Menu</a>

    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Nama Menu</th>
                <th>Deskripsi</th>
                <th>Harga (Rp)</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($menus as $index => $menu)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>
                        @if ($menu->image)
                            <img src="{{ asset('storage/menu_images/' . $menu->image) }}" alt="{{ $menu->name }}" width="120">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $menu->name }}</td>
                    <td>{{ $menu->description ?? '-' }}</td>
                    <td>{{ number_format($menu->price, 2, ',', '.') }}</td>
                    <td class="action-links">
                        <a href="{{ route('admin.menus.edit', $menu->id) }}">Edit</a>
                        <form action="{{ route('admin.menus.destroy', $menu->id) }}" method="POST" style="display:inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center;">Belum ada menu.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
