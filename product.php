<?php 
include 'counter.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk - Atlan Betta Surabaya</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Card Interaktif */
        .clickable-card {
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .clickable-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        /* Badges Navigasi & Keranjang */
        .cart-nav-btn {
            background-color: #e74c3c;
            color: white !important;
            padding: 6px 12px;
            border-radius: 20px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-weight: bold;
        }
        .cart-nav-btn:hover {
            background-color: #c0392b;
        }

        /* Modal General */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            justify-content: center;
            align-items: center;
        }
        .modal-content {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            width: 90%;
            max-width: 500px;
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            max-height: 90vh;
            overflow-y: auto;
        }
        .close-btn {
            position: absolute;
            right: 15px;
            top: 10px;
            font-size: 24px;
            cursor: pointer;
            color: #888;
        }
        .close-btn:hover { color: #000; }

        /* Tabel Keranjang */
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        .cart-table th, .cart-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 14px;
        }
        .cart-table th {
            background-color: #2c3e50;
            color: white;
        }
        .btn-delete {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 4px 8px;
            cursor: pointer;
            border-radius: 3px;
        }
        .btn-primary {
            background: #27ae60;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            font-weight: bold;
            font-size: 15px;
            width: 100%;
        }
        .btn-primary:hover {
            background: #219150;
        }
    </style>
</head>
<body>
    <header>
        <h1>Atlan Betta Surabaya</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="product.php">Product</a>
            <a href="blog.php">Blog (FAQ)</a>
            <!-- Menu Keranjang di Sebelah Blog (FAQ) -->
            <a href="javascript:void(0)" class="cart-nav-btn" onclick="openCartModal()">
                🛒 Keranjang (<span id="cartCountNav">0</span>)
            </a>
        </nav>
    </header>

    <div class="container">
        <h2>Katalog Ikan Cupang & Perlengkapan</h2>
        <p><em>Klik pada produk untuk memilih jumlah dan memasukannya ke keranjang belanja.</em></p>

        <h3>1. Kategori Ikan Cupang</h3>
        <div class="product-grid">
            <!-- Cupang Biasa -->
            <div class="card clickable-card" onclick="openQtyModal('Cupang Plakat Red (Kasta Biasa)', 25000)">
                <img src="images/cupang_biasa.png" alt="Cupang Biasa">
                <h4>Cupang Plakat Red</h4>
                <span class="badge badge-biasa">Kasta Biasa</span>
                <p>Harga: Rp 25.000</p>
            </div>
            <!-- Cupang VIP -->
            <div class="card clickable-card" onclick="openQtyModal('Halfmoon Blue Rim (Kasta VIP)', 100000)">
                <img src="images/cupang_vip.png" alt="Cupang VIP">
                <h4>Halfmoon Blue Rim</h4>
                <span class="badge badge-vip">Kasta VIP</span>
                <p>Harga: Rp 100.000</p>
            </div>
            <!-- Cupang Super VVIP -->
            <div class="card clickable-card" onclick="openQtyModal('Avatar Gordon Multi-Color (Kasta Super VVIP)', 350000)">
                <img src="images/cupang_svip.png" alt="Cupang Super VVIP">
                <h4>Avatar Gordon Multi-Color</h4>
                <span class="badge badge-svip">Kasta Super VVIP</span>
                <p>Harga: Rp 350.000</p>
            </div>
        </div>

        <h3>2. Perlengkapan Ikan</h3>
        <div class="product-grid">
            <div class="card clickable-card" onclick="openQtyModal('Soliter Kaca 15x15x20', 20000)">
                <img src="images/soliter.png" alt="Soliter Kaca">
                <h4>Soliter Kaca 15x15x20</h4>
                <p>Jenis: Wadah/Akuarium</p>
                <p><strong>Harga: Rp 20.000</strong></p>
            </div>
            <div class="card clickable-card" onclick="openQtyModal('Pelet High Protein 50gr', 15000)">
                <img src="images/pelet.png" alt="Pelet High Protein">
                <h4>Pelet High Protein 50gr</h4>
                <p>Jenis: Pakan Ikan</p>
                <p><strong>Harga: Rp 15.000</strong></p>
            </div>
            <div class="card clickable-card" onclick="openQtyModal('Daun Ketapang Olahan', 10000)">
                <img src="images/olahan.png" alt="Daun Ketapang Olahan">
                <h4>Daun Ketapang Olahan</h4>
                <p>Jenis: Perawatan Air</p>
                <p><strong>Harga: Rp 10.000</strong></p>
            </div>
        </div>

        <div class="counter-box">
            Total Page Views: <?php echo $views; ?>[cite: 4]
        </div>
    </div>

    <!-- 1. Modal Popup Input Quantity Produk -->
    <div class="modal" id="qtyModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeQtyModal()">&times;</span>
            <h3 id="modalProductName">Nama Produk</h3>
            <p id="modalProductPrice" style="font-weight: bold; color: #27ae60;">Harga: Rp 0</p>
            <div style="margin: 15px 0;">
                <label>Masukkan Jumlah / Kuantitas:</label><br>
                <input type="number" id="modalQty" value="1" min="1" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
            </div>
            <button class="btn-primary" onclick="addToCart()">Masukkan ke Keranjang</button>
        </div>
    </div>

    <!-- 2. Modal Popup Keranjang Belanja & Checkout -->
    <div class="modal" id="cartModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeCartModal()">&times;</span>
            <h3>🛒 Keranjang Belanja Anda</h3>
            
            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Subtotal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="cartTableBody">
                    <tr>
                        <td colspan="5" style="text-align: center;">Keranjang masih kosong.</td>
                    </tr>
                </tbody>
            </table>
            
            <h4 style="text-align: right; font-size: 16px; margin-bottom: 20px;" id="grandTotalText">Total: Rp 0</h4>

            <!-- Form Data Pembeli & Checkout -->
            <div style="background: #f8f9fa; padding: 15px; border-radius: 5px;">
                <h4 style="margin-top: 0;">📋 Data Pembeli</h4>
                <div style="margin-bottom: 10px;">
                    <label><strong>Nama Lengkap Pembeli:</strong></label><br>
                    <input type="text" id="buyerName" placeholder="Masukkan nama Anda" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
                </div>
                <div style="margin-bottom: 15px;">
                    <label><strong>Metode Pembayaran:</strong></label><br>
                    <select id="paymentMethod" style="width: 100%; padding: 8px; margin-top: 5px; box-sizing: border-box;">
                        <option value="Transfer Bank (BCA/Mandiri)">Transfer Bank (BCA / Mandiri)</option>
                        <option value="QRIS / E-Wallet (Gopay/OVO/Dana)">QRIS / E-Wallet (Gopay / OVO / DANA)</option>
                        <option value="COD (Surabaya Area)">COD (Bayar di Tempat - Area Surabaya)</option>
                    </select>
                </div>
                <button type="button" class="btn-primary" onclick="checkoutToWhatsApp()">Checkout via WhatsApp 📲</button>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Atlan Betta Surabaya.</p>
    </footer>

    <!-- Script JavaScript Interaktif Keranjang & WhatsApp -->
    <script>
        let cart = [];
        let selectedProduct = { name: '', price: 0 };

        // Functions Modal Input Qty Produk
        function openQtyModal(name, price) {
            selectedProduct = { name, price };
            document.getElementById('modalProductName').innerText = name;
            document.getElementById('modalProductPrice').innerText = 'Harga: Rp ' + price.toLocaleString('id-ID');
            document.getElementById('modalQty').value = 1;
            document.getElementById('qtyModal').style.display = 'flex';
        }

        function closeQtyModal() {
            document.getElementById('qtyModal').style.display = 'none';
        }

        // Functions Modal Keranjang
        function openCartModal() {
            renderCart();
            document.getElementById('cartModal').style.display = 'flex';
        }

        function closeCartModal() {
            document.getElementById('cartModal').style.display = 'none';
        }

        // Tambah Produk ke Keranjang
        function addToCart() {
            const qty = parseInt(document.getElementById('modalQty').value);
            if (isNaN(qty) || qty < 1) {
                alert('Silakan masukkan jumlah minimal 1.');
                return;
            }

            const existingIndex = cart.findIndex(item => item.name === selectedProduct.name);
            if (existingIndex > -1) {
                cart[existingIndex].qty += qty;
            } else {
                cart.push({
                    name: selectedProduct.name,
                    price: selectedProduct.price,
                    qty: qty
                });
            }

            closeQtyModal();
            updateCartCountNav();
            alert('Produk berhasil ditambahkan ke keranjang!');
        }

        // Hapus Produk dari Keranjang
        function removeFromCart(index) {
            cart.splice(index, 1);
            renderCart();
            updateCartCountNav();
        }

        // Update Counter Angka di Navigasi Atas
        function updateCartCountNav() {
            const totalItems = cart.reduce((sum, item) => sum + item.qty, 0);
            document.getElementById('cartCountNav').innerText = totalItems;
        }

        // Render Isi Tabel Keranjang
        function renderCart() {
            const tbody = document.getElementById('cartTableBody');
            tbody.innerHTML = '';

            if (cart.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" style="text-align: center;">Keranjang masih kosong.</td></tr>';
                document.getElementById('grandTotalText').innerText = 'Total: Rp 0';
                return;
            }

            let total = 0;
            cart.forEach((item, index) => {
                const subtotal = item.price * item.qty;
                total += subtotal;

                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${item.name}</td>
                    <td>Rp ${item.price.toLocaleString('id-ID')}</td>
                    <td>${item.qty}</td>
                    <td>Rp ${subtotal.toLocaleString('id-ID')}</td>
                    <td><button class="btn-delete" onclick="removeFromCart(${index})">Hapus</button></td>
                `;
                tbody.appendChild(tr);
            });

            document.getElementById('grandTotalText').innerText = 'Total: Rp ' + total.toLocaleString('id-ID');
        }

        // Checkout ke WhatsApp
        function checkoutToWhatsApp() {
            const name = document.getElementById('buyerName').value.trim();
            const payment = document.getElementById('paymentMethod').value;

            if (cart.length === 0) {
                alert('Keranjang belanja Anda masih kosong!');
                return;
            }
            if (!name) {
                alert('Silakan masukkan nama Anda terlebih dahulu.');
                return;
            }

            // Nomor WhatsApp Toko
            const phoneNumber = "6281216595852"; 

            let message = `Halo *Atlan Betta Surabaya*, saya ingin memesan produk berikut:\n\n`;
            message += `👤 *Nama Pembeli:* ${name}\n`;
            message += `💳 *Metode Pembayaran:* ${payment}\n\n`;
            message += `📦 *Rincian Pesanan:*\n`;

            let total = 0;
            cart.forEach((item, idx) => {
                const subtotal = item.price * item.qty;
                total += subtotal;
                message += `${idx + 1}. ${item.name} (${item.qty}x) = Rp ${subtotal.toLocaleString('id-ID')}\n`;
            });

            message += `\n💰 *Total Pembayaran:* Rp ${total.toLocaleString('id-ID')}\n\n`;
            message += `Mohon konfirmasi ketersediaan stok dan instruksi pembayaran selanjutnya. Terima kasih!`;

            const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        }
    </script>
</body>
</html>