@extends('layouts.app')

@section('content')
<style>
    .floating-cart {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 320px;
        background: white;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        border-radius: 16px;
        padding: 20px;
        z-index: 1000;
    }
    .floating-cart h3 {
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 12px;
        color: #2d3748;
    }
    .cart-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 0.9rem;
        color: #4a5568;
    }
    .cart-item-name {
        max-width: 140px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .cart-item-qty {
        margin: 0 10px;
        font-weight: 600;
        color: #2d3748;
    }
    .cart-item-price {
        font-weight: 700;
        color: #e53e3e;
    }
    .cart-total {
        font-weight: 700;
        font-size: 1.1rem;
        text-align: right;
        margin-top: 12px;
        margin-bottom: 16px;
        color: #e53e3e;
    }
    .cart-btn {
        width: 100%;
        padding: 12px 0;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        border: none;
        transition: background-color 0.3s ease;
    }
    #checkout-btn {
        background-color: #3182ce;
        color: white;
        margin-bottom: 10px;
    }
    #checkout-btn:disabled {
        background-color: #a0aec0;
        cursor: not-allowed;
    }
    #checkout-btn:hover:not(:disabled) {
        background-color: #2b6cb0;
    }
    #reset-cart-btn {
        background-color: #e53e3e;
        color: white;
    }
    #reset-cart-btn:hover {
        background-color: #c53030;
    }
</style>

<div class="max-w-7xl mx-auto px-4 py-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-6">Menu Pilihan</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse ($menus as $menu)
            <div class="flex flex-col bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                @if ($menu->image)
                    <img src="{{ asset('storage/menu_images/' . $menu->image) }}" alt="{{ $menu->name }}" class="w-full h-48 object-cover">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center text-gray-500">
                        Tidak ada gambar
                    </div>
                @endif

                <div class="p-4 flex flex-col flex-grow">
                    <h3 class="text-lg font-bold text-gray-800 mb-1">{{ $menu->name }}</h3>
                    <p class="text-sm text-gray-600 mb-2 flex-grow">{{ $menu->description ?? 'Tidak ada deskripsi.' }}</p>
                    <p class="text-md font-semibold text-red-500 mb-4">Rp {{ number_format($menu->price, 0, ',', '.') }}</p>

                    <div id="cart-controls-{{ $menu->id }}" 
                         data-menu-name="{{ $menu->name }}" 
                         data-menu-price="{{ $menu->price }}">
                        <button 
                            class="add-to-cart w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg"
                            data-menu-id="{{ $menu->id }}"
                            data-menu-name="{{ $menu->name }}"
                            data-menu-price="{{ $menu->price }}">
                            Tambah
                        </button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 col-span-full text-center">Belum ada menu tersedia.</p>
        @endforelse
    </div>
</div>

<!-- Floating Cart -->
<div class="floating-cart" id="floating-cart" aria-live="polite" aria-label="Keranjang Belanja">
    <h3>Keranjang</h3>
    <div id="cart-items"></div>
    <p class="cart-total" id="cart-total">Rp 0</p>

<form id="checkout-form" action="{{ route('payment.confirm') }}" method="GET">
    <input type="hidden" name="order" id="order-json">
    <input type="hidden" name="total" id="order-total">
    <button type="submit" id="checkout-btn" class="cart-btn" disabled>
        Lanjut ke Pembayaran
    </button>
</form>
    <button id="reset-cart-btn" class="cart-btn" onclick="resetCart()">
        Reset Keranjang
    </button>
</div>

<script>
    let cart = {};

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(number);
    }

    function addToCart(id, name, price) {
        if (cart[id]) {
            cart[id].qty++;
        } else {
            cart[id] = { name, price, qty: 1 };
        }
        renderCart();
        updateMenuControls();
    }

    function decreaseFromCart(id) {
        if (cart[id]) {
            cart[id].qty--;
            if (cart[id].qty <= 0) {
                delete cart[id];
            }
            renderCart();
            updateMenuControls();
        }
    }

    function resetCart() {
        if (confirm('Yakin ingin mengosongkan keranjang?')) {
            cart = {};
            renderCart();
            updateMenuControls();
        }
    }

    function renderCart() {
        const cartItemsContainer = document.getElementById('cart-items');
        const cartTotalEl = document.getElementById('cart-total');
        const checkoutBtn = document.getElementById('checkout-btn');
        const resetBtn = document.getElementById('reset-cart-btn');
        const floatingCart = document.getElementById('floating-cart');

        cartItemsContainer.innerHTML = '';
        let total = 0;
        let itemCount = 0;

        for (const id in cart) {
            const item = cart[id];
            const subtotal = item.price * item.qty;
            total += subtotal;
            itemCount += item.qty;

            const itemDiv = document.createElement('div');
            itemDiv.className = 'cart-item';
            itemDiv.innerHTML = `
                <span class="cart-item-name" title="${item.name}">${item.name}</span>
                <span class="cart-item-qty">x${item.qty}</span>
                <span class="cart-item-price">${formatRupiah(subtotal)}</span>
            `;
            cartItemsContainer.appendChild(itemDiv);
        }

        if (itemCount === 0) {
            cartItemsContainer.innerHTML = '<p class="text-center text-gray-500 mt-4">Keranjang kosong.</p>';
            checkoutBtn.disabled = true;
            resetBtn.disabled = true;
            floatingCart.style.display = 'none';
        } else {
            checkoutBtn.disabled = false;
            resetBtn.disabled = false;
            floatingCart.style.display = 'block';
        }

        cartTotalEl.textContent = formatRupiah(total);
    }

    function updateMenuControls() {
        for (const id in cart) {
            const menuControls = document.getElementById(`cart-controls-${id}`);
            if (menuControls) {
                menuControls.innerHTML = `
                    <div class="flex items-center justify-between gap-2">
                        <button onclick="decreaseFromCart('${id}')" class="bg-gray-300 text-gray-800 px-3 py-1 rounded-lg font-bold text-lg select-none">−</button>
                        <span class="font-semibold text-gray-800 select-none">x${cart[id].qty}</span>
                        <button onclick="addToCart('${id}', '${cart[id].name}', ${cart[id].price})" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg font-bold text-lg select-none">+</button>
                    </div>
                `;
            }
        }

        // Reset controls for items not in cart
        document.querySelectorAll('[id^="cart-controls-"]').forEach(ctrl => {
            const id = ctrl.id.replace('cart-controls-', '');
            if (!cart[id]) {
                ctrl.innerHTML = `
                    <button 
                        class="add-to-cart w-full bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg"
                        data-menu-id="${id}"
                        data-menu-name="${ctrl.dataset.menuName}"
                        data-menu-price="${ctrl.dataset.menuPrice}">
                        Tambah
                    </button>
                `;
            }
        });

        bindNewButtons();
    }

    function bindNewButtons() {
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.onclick = () => {
                const id = button.getAttribute('data-menu-id');
                const name = button.getAttribute('data-menu-name');
                const price = parseFloat(button.getAttribute('data-menu-price'));
                addToCart(id, name, price);
            };
        });
    }

    document.addEventListener('DOMContentLoaded', () => {
        bindNewButtons();
        renderCart();
        updateMenuControls();
    });

    document.getElementById('checkout-form').addEventListener('submit', function(e) {
    const orderInput = document.getElementById('order-json');
    const totalInput = document.getElementById('order-total');

    const orderData = {};
    let total = 0;

    for (const id in cart) {
        orderData[id] = cart[id].qty;
        total += cart[id].qty * cart[id].price;
    }

    orderInput.value = JSON.stringify(orderData);
    totalInput.value = total;
});

</script>
@endsection
