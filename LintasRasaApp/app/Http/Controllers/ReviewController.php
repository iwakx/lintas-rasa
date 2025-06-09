<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Order;
use App\Models\Menu;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function create(Order $order)
    {
        $orderData = json_decode($order->order_data, true);

        return view('reviews.create', compact('order', 'orderData'));
    }

    public function store(Request $request)
    {
        $reviews = $request->input('reviews');

        foreach ($reviews as $reviewData) {
            Review::create([
                'user_id' => Auth::user()->id,
                'menu_id' => $reviewData['menu_id'],
                'order_id' => $reviewData['order_id'],
                'rating' => $reviewData['rating'],
                'comment' => $reviewData['comment'],
            ]);
        }

        return redirect()->route('menu.index', $reviewData['order_id'])->with('success', 'Ulasan berhasil dikirim.');
    }

    public function index(Menu $menu)
    {
        $menu = Menu::all();
        $reviews = Review::all(); 
        return view('reviews.index', compact('menu', 'reviews'));
    }
}
