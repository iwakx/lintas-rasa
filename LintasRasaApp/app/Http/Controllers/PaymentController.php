<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function confirm(Request $request)
    {
        $orderJson = $request->input('order') ?? session('cart_order');
        $total = $request->input('total') ?? session('cart_total');

        if (!$orderJson || !$total) {
            return redirect()->route('menu.index')->with('error', 'Data keranjang tidak ditemukan.');
        }

        session([
            'cart_order' => $orderJson,
            'cart_total' => $total
        ]);

        $order = json_decode($orderJson, true) ?? [];

        $menuIds = array_keys($order);
        $menus = Menu::whereIn('id', $menuIds)->get()->keyBy('id');

        $orderDetails = [];
        foreach ($order as $id => $qty) {
            if (isset($menus[$id])) {
                $orderDetails[] = [
                    'id' => $id,
                    'name' => $menus[$id]->name,
                    'qty' => $qty,
                    'price' => $menus[$id]->price,
                    'subtotal' => $menus[$id]->price * $qty,
                ];
            }
        }

        return view('payment.confirm', [
            'orderDetails' => $orderDetails,
            'total' => $total,
            'order' => $orderJson,
            'menus' => $menus,
        ]);
    }

    public function qrisPage($menuId)
    {
        $menu = Menu::findOrFail($menuId);
        $total = session('cart_total') ?? 0;
        $order = session('cart_order') ?? '{}';

        return view('payment.qris', compact('menu', 'total', 'order'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'payment_proof' => 'required|image|max:2048',
            'total' => 'required|numeric',
            'order' => 'required|string',
        ]);

        $imagePath = $request->file('payment_proof')->store('payment_proofs', 'public');
        $order = json_decode($request->order, true);

        $newOrder = Order::create([
            'user_id' => Auth::id(),
            'items' => $this->generateItemSummary($order),
            'order_data' => json_encode($order),
            'total' => $request->total,
            'payment_proof' => $imagePath,
            'status' => 'pending',
        ]);

        $orderId = $newOrder->id;

        return redirect()->route('reviews.create', $newOrder->id)->with('success', 'Transaksi berhasil dikirim. Menunggu konfirmasi admin.');
    }

    private function generateItemSummary($order)
    {
        $menuIds = array_keys($order);
        $menus = Menu::whereIn('id', $menuIds)->get()->keyBy('id');

        $summary = [];
        foreach ($order as $id => $qty) {
            if (isset($menus[$id])) {
                $summary[] = $menus[$id]->name . ' x' . $qty;
            }
        }

        return implode(', ', $summary);
    }

    //
    //
    //
    // ===== KHUSUS ATMIN =====
    //
    //
    //

    public function adminIndex()
    {
        $orders = Order::latest()->get();
        return view('admin.orders.index', compact('orders'));
    }

    public function adminEdit(Order $order)
    {
        return view('admin.orders.edit', compact('order'));
    }

    public function adminUpdate(Request $request, Order $order)
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return redirect()->route('admin.orders.index')->with('success', 'Status pesanan berhasil diperbarui.');
    }
}
