<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Order;

class ExportOrderController extends Controller
{
    public function exportPdf()
    {
        $orders = Order::with('user')->latest()->get();

        $pdf = PDF::loadView('admin.orders.pdf', compact('orders'))
                ->setPaper('A4', 'portrait');

        return $pdf->download('data-pesanan.pdf');
    }
}
