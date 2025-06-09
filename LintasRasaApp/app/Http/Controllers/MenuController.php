<?php

namespace App\Http\Controllers;

use App\Models\Menu; 
use App\Models\Order; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('menu_images', $imageName, 'public');
            $validated['image'] = $imageName;
        }

        Menu::create($validated);
        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric|min:0',
        'image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
    ]);

    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if ($menu->image && Storage::disk('public')->exists('menu_images/' . $menu->image)) {
            Storage::disk('public')->delete('menu_images/' . $menu->image);
        }

        // Simpan gambar baru
        $imageName = time() . '.' . $request->image->extension();
        $request->image->storeAs('menu_images', $imageName, 'public');
        $validated['image'] = $imageName;
    }

        $menu->update($validated);
        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('admin.menus.index')->with('success', 'Menu berhasil dihapus');
    }

    public function userIndex()
    {
        $menus = Menu::all();
        return view('menu.index', compact('menus'));
    }
}
