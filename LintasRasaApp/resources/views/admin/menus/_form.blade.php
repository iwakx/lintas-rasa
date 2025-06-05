<div style="margin-bottom: 15px;">
    <label for="name">Nama Menu</label><br>
    <input type="text" name="name" id="name" value="{{ old('name', $menu->name ?? '') }}" required>
</div>

<div style="margin-bottom: 15px;">
    <label for="description">Deskripsi</label><br>
    <textarea name="description" id="description">{{ old('description', $menu->description ?? '') }}</textarea>
</div>

<div style="margin-bottom: 15px;">
    <label for="price">Harga (Rp)</label><br>
    <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $menu->price ?? '') }}" required>
</div>
