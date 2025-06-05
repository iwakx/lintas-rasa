@extends('layouts.app')

@section('content')
<div class="container" style="max-width: 600px; margin: 30px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #fff;">
    <h2 style="text-align: center; margin-bottom: 25px; color: #2c3e50;">Edit Menu</h2>

    <form method="POST" action="{{ route('admin.menus.update', $menu->id) }}" enctype="multipart/form-data" style="display: flex; flex-direction: column; gap: 15px;">
        @csrf
        @method('PUT')

        <div>
            <label for="name" style="font-weight: 600; display: block; margin-bottom: 5px;">Nama Menu</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                value="{{ old('name', $menu->name) }}" 
                required
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
            >
            @error('name')
                <div style="color: red; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="description" style="font-weight: 600; display: block; margin-bottom: 5px;">Deskripsi</label>
            <textarea 
                name="description" 
                id="description" 
                rows="3"
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
            >{{ old('description', $menu->description) }}</textarea>
            @error('description')
                <div style="color: red; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="price" style="font-weight: 600; display: block; margin-bottom: 5px;">Harga (Rp)</label>
            <input 
                type="number" 
                name="price" 
                id="price" 
                value="{{ old('price', $menu->price) }}" 
                required
                min="0"
                style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px;"
            >
            @error('price')
                <div style="color: red; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="image" style="font-weight: 600; display: block; margin-bottom: 5px;">Gambar Menu</label>
            <input 
                type="file" 
                name="image" 
                id="image"
                accept="image/*"
                style="padding: 5px;"
            >
            @error('image')
                <div style="color: red; margin-top: 5px;">{{ $message }}</div>
            @enderror

            @if ($menu->image)
                <div style="margin-top: 10px;">
                    <p style="margin-bottom: 5px;">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/menu_images/' . $menu->image) }}" alt="Menu Image" style="max-width: 100%; border: 1px solid #ccc; border-radius: 5px;">
                </div>
            @endif
        </div>

        <div style="display: flex; gap: 10px; justify-content: flex-end;">
            <a href="{{ route('admin.menus.index') }}"
               style="
                 padding: 12px 24px; 
                 background-color: #6c757d; 
                 color: white; 
                 border-radius: 5px; 
                 text-decoration: none;
                 font-weight: 600;
                 font-size: 16px;
                 display: inline-block;
                 text-align: center;
                 transition: background-color 0.3s ease;
               "
               onmouseover="this.style.backgroundColor='#5a6268'"
               onmouseout="this.style.backgroundColor='#6c757d'"
            >Batal</a>

            <button type="submit" style="
                background-color: #3490dc; 
                color: white; 
                padding: 12px 24px; 
                border: none; 
                border-radius: 5px; 
                cursor: pointer;
                font-weight: 600;
                font-size: 16px;
                transition: background-color 0.3s ease;
            "
            onmouseover="this.style.backgroundColor='#2779bd'"
            onmouseout="this.style.backgroundColor='#3490dc'"
            >Update</button>
        </div>
    </form>
</div>
@endsection
