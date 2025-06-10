<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Pesanan</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        img { max-height: 100px; }
    </style>
</head>
<body>
    <h2>Data Pesanan</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
                <th>Bukti Pembayaran</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>Rp{{ number_format($order->total, 0, ',', '.') }}</td>
                    <td>{{ $order->status }}</td>
                    <td>
                        @if($order->payment_proof)
                            <img src="{{ public_path('storage/' . $order->payment_proof) }}" alt="Bukti" style="height: 80px;">
                        @else
                            Tidak ada
                        @endif
                    </td>
                    <td>{{ $order->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
