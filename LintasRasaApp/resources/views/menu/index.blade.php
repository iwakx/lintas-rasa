@extends('layouts.app')

@section('content')
<style>
    :root {
        --primary-50: #fef9ec;
        --primary-100: #fcefd0;
        --primary-200: #f9dfa1;
        --primary-300: #f3c869;
        --primary-400: #eda83a;
        --primary-500: #e8911e;
        --primary-600: #d97314;
        --primary-700: #b45613;
        --primary-800: #914418;
        --primary-900: #763a18;
        --primary-950: #411c09;
    }

    /* Hero Section */
    .menu-hero {
        background: linear-gradient(135deg, var(--primary-700) 0%, var(--primary-900) 100%);
        position: relative;
        overflow: hidden;
    }

    .menu-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd' opacity='0.1'%3E%3Cg fill='%23ffffff' fill-opacity='0.4'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }

    /* Background Batik Pattern */
    .bg-batik {
        position: relative;
        overflow: hidden;
    }
    
    .bg-batik::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cpath fill='%23fcefd0' fill-opacity='0.1' d='M0 0h100v100H0V0zm10 10h80v80H10V10zm10 10h60v60H20V20zm10 10h40v40H30V30zm10 10h20v20H40V40z'/%3E%3C/svg%3E");
        background-size: 150px;
        opacity: 0.15;
        z-index: 0;
    }

    /* Menu Items */
    .menu-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        gap: 32px;
        padding: 2rem;
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .menu-card {
        background: white;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        z-index: 1;
        transform-style: preserve-3d;
    }

    .menu-card:hover {
        transform: translateY(-8px) rotateX(5deg) rotateY(1deg);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .menu-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(232, 145, 30, 0.1) 0%, rgba(232, 145, 30, 0) 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .menu-card:hover::before {
        opacity: 1;
    }

    .menu-card::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 8px;
        background: linear-gradient(90deg, var(--primary-400), var(--primary-600));
        transition: all 0.3s ease;
    }

    .menu-card:hover::after {
        height: 10px;
        background: linear-gradient(90deg, var(--primary-500), var(--primary-700));
    }

    .menu-image {
        width: 100%;
        height: 280px;
        object-fit: cover;
        border-bottom: 4px solid var(--primary-100);
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-image {
        transform: scale(1.02);
        border-bottom-color: var(--primary-200);
    }

    .menu-content {
        padding: 24px;
        position: relative;
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-content {
        transform: translateY(-5px);
    }

    .menu-badge {
        position: absolute;
        top: -20px;
        right: 24px;
        background: var(--primary-500);
        color: white;
        padding: 6px 16px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.9rem;
        box-shadow: 0 4px 12px rgba(232, 145, 30, 0.3);
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-badge {
        transform: scale(1.05) rotate(2deg);
        box-shadow: 0 6px 15px rgba(232, 145, 30, 0.4);
    }

    .menu-title {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-900);
        margin-bottom: 8px;
        font-family: 'Playfair Display', serif;
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-title {
        color: var(--primary-800);
    }

    .menu-description {
        color: var(--primary-800);
        font-size: 1rem;
        line-height: 1.6;
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-description {
        color: var(--primary-700);
    }

    .menu-price {
        font-size: 1.8rem;
        font-weight: 700;
        color: var(--primary-600);
        margin: 16px 0;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .menu-card:hover .menu-price {
        color: var(--primary-500);
        transform: scale(1.03);
    }

    .menu-price::before {
        content: "Rp";
        font-size: 1.2rem;
        margin-right: 4px;
    }

    .menu-actions {
        display: flex;
        gap: 12px;
        margin-top: 20px;
    }

    .add-to-cart {
        flex: 1;
        background: linear-gradient(135deg, var(--primary-500), var(--primary-700));
        color: white;
        border: none;
        padding: 14px;
        border-radius: 12px;
        font-weight: 600;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        position: relative;
        overflow: hidden;
    }

    .add-to-cart::after {
        content: "";
        position: absolute;
        top: -50%;
        left: -60%;
        width: 200%;
        height: 200%;
        background: linear-gradient(
            to right,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0) 100%
        );
        transform: rotate(30deg);
        transition: all 0.3s ease;
    }

    .add-to-cart:hover {
        background: linear-gradient(135deg, var(--primary-600), var(--primary-800));
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(232, 145, 30, 0.4);
    }

    .add-to-cart:hover::after {
        left: 100%;
    }

    .add-to-cart:active {
        transform: translateY(0);
    }

    .quantity-controls {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .quantity-btn {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        border: none;
        background: var(--primary-100);
        color: var(--primary-700);
        font-size: 1.2rem;
        font-weight: bold;
        cursor: pointer;
        transition: all 0.2s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quantity-btn:hover {
        background: var(--primary-200);
        transform: scale(1.1);
    }

    .quantity-btn:active {
        transform: scale(0.95);
    }

    .quantity-display {
        min-width: 30px;
        text-align: center;
        font-weight: 600;
        color: var(--primary-900);
    }

    /* Floating Cart */
    .floating-cart {
        position: fixed;
        bottom: 24px;
        left: 50%;
        transform: translateX(-50%);
        width: 90%;
        max-width: 800px;
        background: white;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        padding: 16px 24px;
        z-index: 100;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
        opacity: 0;
        visibility: hidden;
        transform: translateX(-50%) translateY(20px);
    }

    .floating-cart.active {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(0);
    }

    .cart-items {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding: 8px 0;
        scrollbar-width: thin;
        scrollbar-color: var(--primary-200) transparent;
    }

    .cart-items::-webkit-scrollbar {
        height: 4px;
    }

    .cart-items::-webkit-scrollbar-thumb {
        background-color: var(--primary-200);
        border-radius: 4px;
    }

    .cart-item {
        display: flex;
        align-items: center;
        gap: 8px;
        background: var(--primary-50);
        padding: 8px 12px;
        border-radius: 12px;
        white-space: nowrap;
        transition: all 0.2s ease;
    }

    .cart-item:hover {
        background: var(--primary-100);
        transform: translateY(-2px);
    }

    .cart-item-name {
        font-weight: 600;
        color: var(--primary-900);
    }

    .cart-item-qty {
        color: var(--primary-700);
        font-weight: 600;
    }

    .cart-item-price {
        font-weight: 700;
        color: var(--primary-600);
    }

    .cart-actions {
        display: flex;
        gap: 12px;
        margin-left: 16px;
    }

    .cart-btn {
        padding: 12px 20px;
        border-radius: 12px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        white-space: nowrap;
        position: relative;
        overflow: hidden;
    }

    .checkout-btn {
        background: linear-gradient(135deg, var(--primary-500), var(--primary-700));
        color: white;
    }

    .checkout-btn:hover {
        background: linear-gradient(135deg, var(--primary-600), var(--primary-800));
        box-shadow: 0 4px 12px rgba(232, 145, 30, 0.3);
        transform: translateY(-2px);
    }

    .checkout-btn:active {
        transform: translateY(0);
    }

    .reset-btn {
        background: white;
        color: var(--primary-700);
        border: 1px solid var(--primary-200);
    }

    .reset-btn:hover {
        background: var(--primary-50);
        border-color: var(--primary-300);
        transform: translateY(-2px);
    }

    .reset-btn:active {
        transform: translateY(0);
    }

    /* Empty State */
    .empty-cart {
        color: var(--primary-600);
        font-style: italic;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .menu-grid {
            grid-template-columns: 1fr;
            padding: 1rem;
        }
        
        .floating-cart {
            flex-direction: column;
            gap: 12px;
            width: 95%;
            padding: 16px;
        }
        
        .cart-actions {
            margin-left: 0;
            width: 100%;
        }
        
        .cart-btn {
            flex: 1;
        }
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.05); }
        100% { transform: scale(1); }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.4s ease-out forwards;
    }

    .animate-pulse {
        animation: pulse 0.5s ease;
    }

    /* Special Highlight */
    .special-highlight {
        position: absolute;
        top: 16px;
        left: 16px;
        background: rgba(255, 255, 255, 0.9);
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        color: var(--primary-700);
        z-index: 2;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .menu-card:hover .special-highlight {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }
</style>

<!-- Hero Section -->
<div class="menu-hero py-16 text-center relative">
    <div class="max-w-4xl mx-auto px-4 relative z-10">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4" style="font-family: Helvetica, Arial, sans-serif">Nusantara Heritage</h1>
        <p class="text-xl text-white opacity-90 max-w-2xl mx-auto" style="font-family: Helvetica, Arial, sans-serif">Rasa autentik warisan nenek moyang dalam kemasan modern</p>
    </div>
</div>

<!-- Menu Grid -->
<div class="py-12 bg-gradient-to-b from-white to-amber-50 bg-batik">
    <div class="menu-grid">
        @forelse ($menus as $menu)
            <div class="menu-card animate-fadeInUp" style="animation-delay: {{ $loop->index * 0.1 }}s">
                @if($menu->is_special)
                    <div class="special-highlight">⭐ Spesial Hari Ini</div>
                @endif
                
                @if ($menu->image)
                    <img src="{{ asset('storage/menu_images/' . $menu->image) }}" alt="{{ $menu->name }}" class="menu-image">
                @else
                    <div class="menu-image bg-amber-100 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                    </div>
                @endif

                <div class="menu-content">
                    <div class="menu-badge">Best Seller</div>
                    <h3 class="menu-title">{{ $menu->name }}</h3>
                    <p class="menu-description">{{ $menu->description ?? 'Rasa autentik dengan bahan pilihan terbaik.' }}</p>
                    <div class="menu-price">{{ number_format($menu->price, 0, ',', '.') }}</div>
                    
                    <div id="cart-controls-{{ $menu->id }}" 
                         data-menu-name="{{ $menu->name }}" 
                         data-menu-price="{{ $menu->price }}">
                        <div class="menu-actions">
                            <button class="add-to-cart"
                                    data-menu-id="{{ $menu->id }}"
                                    data-menu-name="{{ $menu->name }}"
                                    data-menu-price="{{ $menu->price }}">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-xl font-semibold text-amber-800 mt-4">Menu Belum Tersedia</h3>
                <p class="text-amber-600 mt-2">Kami sedang menyiapkan menu spesial untuk Anda</p>
            </div>
        @endforelse
    </div>
</div>

<!-- Floating Cart -->
<div class="floating-cart" id="floating-cart">
    <div class="cart-items" id="cart-items">
        <div class="empty-cart">Keranjang kosong</div>
    </div>
    
    <div class="cart-actions">
        <form id="checkout-form" action="{{ route('payment.confirm') }}" method="GET">
            <input type="hidden" name="order" id="order-json">
            <input type="hidden" name="total" id="order-total">
            <button type="submit" id="checkout-btn" class="cart-btn checkout-btn" disabled>
                Bayar
            </button>
        </form>
        <button id="reset-cart-btn" class="cart-btn reset-btn">
            Clear
        </button>
    </div>
</div>

<script>
    let cart = {};
    let cartAnimationTimeout;

    function formatRupiah(number) {
        return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 0 }).format(number);
    }

    function addToCart(id, name, price) {
        const existingIds = Object.keys(cart);
        if (existingIds.length > 0 && !cart[id]) {
            alert('Maaf, Anda hanya bisa memesan 1 jenis menu per transaksi. Silakan kosongkan keranjang terlebih dahulu.');
            return;
        }

        if (cart[id]) {
            cart[id].qty++;
        } else {
            cart[id] = { name, price, qty: 1 };
        }

        renderCart();
        updateMenuControls();
        showCart();

        const card = document.querySelector(`[data-menu-id="${id}"]`)?.closest('.menu-card');
        if (card) {
            card.classList.add('animate-pulse');
            setTimeout(() => card.classList.remove('animate-pulse'), 500);
        }
    }

    function decreaseFromCart(id) {
        if (cart[id]) {
            cart[id].qty--;
            if (cart[id].qty <= 0) {
                delete cart[id];
            }
            renderCart();
            updateMenuControls();
            if (Object.keys(cart).length === 0) {
                hideCart();
            }
        }
    }

    function resetCart() {
        if (Object.keys(cart).length === 0) return;

        if (confirm('Apakah Anda yakin ingin mengosongkan keranjang?')) {
            cart = {};
            renderCart();
            updateMenuControls();
            hideCart();
        }
    }

    function showCart() {
        document.getElementById('floating-cart')?.classList.add('active');
        if (cartAnimationTimeout) clearTimeout(cartAnimationTimeout);
    }

    function hideCart() {
        document.getElementById('floating-cart')?.classList.remove('active');
    }

    function renderCart() {
        const cartItemsContainer = document.getElementById('cart-items');
        const checkoutBtn = document.getElementById('checkout-btn');
        const resetBtn = document.getElementById('reset-cart-btn');
        const orderJsonInput = document.getElementById('order-json');
        const orderTotalInput = document.getElementById('order-total');

        if (!cartItemsContainer) return;

        cartItemsContainer.innerHTML = '';
        let total = 0;
        let itemCount = 0;
        const orderData = {};

        for (const id in cart) {
            const item = cart[id];
            const subtotal = item.price * item.qty;
            total += subtotal;
            itemCount += item.qty;
            orderData[id] = item.qty;

            const itemDiv = document.createElement('div');
            itemDiv.className = 'cart-item';
            itemDiv.innerHTML = `
                <span class="cart-item-name">${item.name}</span>
                <span class="cart-item-qty">×${item.qty}</span>
                <span class="cart-item-price">${formatRupiah(subtotal)}</span>
            `;
            cartItemsContainer.appendChild(itemDiv);
        }

        if (itemCount === 0) {
            cartItemsContainer.innerHTML = '<div class="empty-cart">Keranjang kosong</div>';
            checkoutBtn.disabled = true;
            resetBtn.disabled = true;
        } else {
            checkoutBtn.disabled = false;
            resetBtn.disabled = false;
        }

        if (orderJsonInput) orderJsonInput.value = JSON.stringify(orderData);
        if (orderTotalInput) orderTotalInput.value = total;
    }

    function updateMenuControls() {
        for (const id in cart) {
            const menuControls = document.getElementById(`cart-controls-${id}`);
            if (menuControls) {
                menuControls.innerHTML = `
                    <div class="menu-actions">
                        <div class="quantity-controls">
                            <button onclick="decreaseFromCart('${id}')" class="quantity-btn">−</button>
                            <span class="quantity-display">${cart[id].qty}</span>
                            <button onclick="addToCart('${id}', '${cart[id].name}', ${cart[id].price})" class="quantity-btn">+</button>
                        </div>
                    </div>
                `;
            }
        }

        document.querySelectorAll('[id^="cart-controls-"]').forEach(ctrl => {
            const id = ctrl.id.replace('cart-controls-', '');
            if (!cart[id]) {
                const name = ctrl.dataset.menuName;
                const price = ctrl.dataset.menuPrice;
                ctrl.innerHTML = `
                    <div class="menu-actions">
                        <button class="add-to-cart"
                                data-menu-id="${id}"
                                data-menu-name="${name}"
                                data-menu-price="${price}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            Tambah
                        </button>
                    </div>
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

        const resetBtn = document.getElementById('reset-cart-btn');
        if (resetBtn) {
            resetBtn.addEventListener('click', resetCart);
        }

        if (Object.keys(cart).length === 0) {
            hideCart();
        }
    });
</script>
@endsection