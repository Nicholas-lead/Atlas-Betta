<?php include 'counter.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Atlan Betta Surabaya</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .about-hero {
            background: linear-gradient(rgba(26, 37, 47, 0.8), rgba(26, 37, 47, 0.8)), url('images/cupang_svip.png');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 50px 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .about-hero h2 {
            margin: 0 0 10px 0;
            font-size: 32px;
        }
        .about-hero p {
            font-size: 16px;
            color: #ecf0f1;
            max-width: 700px;
            margin: 0 auto;
        }
        .about-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .about-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 25px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            box-sizing: border-box;
        }
        .about-card h3 {
            margin-top: 0;
            color: #2c3e50;
            border-bottom: 2px solid #2980b9;
            padding-bottom: 8px;
            font-size: 20px;
        }
        .about-card p, .about-card li {
            font-size: 14px;
            line-height: 1.6;
            color: #555;
        }
        .about-card ul {
            padding-left: 20px;
            margin: 10px 0;
        }
        .features-list {
            list-style: none;
            padding: 0;
        }
        .features-list li {
            padding: 8px 0;
            border-bottom: 1px dashed #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .features-list li:last-child {
            border-bottom: none;
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
        </nav>
    </header>

    <div class="container">
        <div class="about-hero">
            <h2>Tentang Atlan Betta Surabaya</h2>
            <p>Pusat budidaya dan galeri ikan cupang hias terpercaya yang mengedepankan kualitas genetik, keindahan bentuk, serta pelayanan terbaik bagi penghobi.</p>
        </div>

        <div class="about-grid">
            <div class="about-card">
                <h3>📖 Latar Belakang</h3>
                <p>Atlan Betta Surabaya berawal dari hobi mendalam terhadap budidaya ikan cupang hias sejak tahun 2020. Berlokasi di wilayah Surabaya, Jawa Timur, kami konsisten mengembangkan kualitas ikan hias mulai dari kelas rumahan hingga standar kontes internasional.</p>
            </div>

            <div class="about-card">
                <h3>🎯 Visi & Misi</h3>
                <p><strong>Visi:</strong> Menjadi breeder dan supplier ikan cupang hias unggulan nomor satu di Indonesia yang diakui kualitas kontesnya.</p>
                <p><strong>Misi:</strong> Menyediakan varian cupang sehat berkualitas tinggi, mengedukasi penghobi seputar perawatan yang benar, serta memberikan jaminan keamanan pengiriman.</p>
            </div>

            <div class="about-card">
                <h3>📍 Lokasi & Operasional</h3>
                <p><strong>Alamat Utama:</strong> Surabaya, Jawa Timur, Indonesia</p>
                <ul class="features-list">
                    <li>📦 <strong>Pengiriman:</strong> Melayani area Surabaya & Seluruh Indonesia</li>
                    <li>🤝 <strong>Sistem COD:</strong> Tersedia khusus area Surabaya Timur & Selatan</li>
                </ul>
            </div>
        </div>
        
        <div class="counter-box">
            Total Page Views: <?php echo $views; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Atlan Betta Surabaya. All Rights Reserved.</p>
    </footer>
</body>
</html>