<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class CartController extends Controller
{
    public function index()
    {
        $cart = session('cart', []);
        $totalPrice = 0;
        $totalQty = 0;

        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
            $totalQty += $item['quantity'];
        }

        return response()->json([
            'cart' => $cart,
            'totalPrice' => $totalPrice,
            'totalQty' => $totalQty,
        ]);
    }

    public function add(Request $request)
    {
        $menuId = $request->input('menu_id');
        $menu = Menu::findOrFail($menuId);

        $cart = session('cart', []);

        if (isset($cart[$menuId])) {
            $cart[$menuId]['quantity'] += 1;
        } else {
            $cart[$menuId] = [
                'id' => $menu->id,
                'name' => $menu->name,
                'price' => $menu->price,
                'quantity' => 1,
            ];
        }
    }

    public function reset()
    {
        session()->forget('cart');
        return response()->json(['message' => 'Keranjang berhasil direset']);
    }
}
