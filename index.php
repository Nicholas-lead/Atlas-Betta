<?php 
include 'counter.php'; 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlan Betta Surabaya - Toko Ikan Cupang</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Penyesuaian tata letak agar kartu champion tampil elegan dan terpusat */
        .champion-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .champion-card {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            box-sizing: border-box;
            text-align: center;
        }
        .champion-card img {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            border-radius: 6px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .betta-info {
            text-align: left;
            margin-top: 15px;
        }
        .betta-info p {
            margin: 10px 0;
            font-size: 14px;
            line-height: 1.6;
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
        <section class="hero">
            <h2>Selamat Datang di Atlan Betta Surabaya</h2>
            <p>Penyedia Ikan Cupang Hias Kualitas Terbaik dan Perlengkapan Lengkap di Surabaya.</p>
            <div class="counter-box">
                Total Page Views: <?php echo $views; ?>
            </div>
        </section>

        <section>
            <h3 style="text-align: center;">🏆 Ikan Cupang Kebanggaan Kami: Betta of the Year</h3>
            <p style="text-align: center;">Mengenal lebih dekat profil, karakteristik, dan sejarah singkat dari sang juara kontes.</p>
            
            <div class="champion-container">
                <div class="champion-card">
                    <h3>Avatar Gordon Multi-Color (Grand Champion Line)</h3>
                    <span class="badge badge-svip" style="margin-top: 5px;">Predikat: Betta of the Year 2026</span>
                    
                    <img src="images/cupang_svip.png" alt="Cupang Champion">
                    
                    <div class="betta-info">
                        <p><strong>Deskripsi Fisik:</strong> Varian papan atas dengan mutasi warna gelap pekat berlapis bintik metalik terang khas avatar serta kombinasi warna multi-color yang sangat kontras dan tajam di bagian kepala dan siripnya.</p>
                        <p><strong>Mental & Performa:</strong> Memiliki mental tarung yang tenang namun berwibawa, bukaan sirip dorsal dan anal yang sangat lebar, serta stabil dalam pencahayaan kontes.</p>
                        <p><strong>Asal Muasal Jenis:</strong> Merupakan hasil inovasi pemuliaan (breeding) modern tingkat lanjut yang menggabungkan garis keturunan genetik Black Samurai, Cooper, dan Fancy melalui program line breeding ketat selama belasan generasi oleh para breeder master hingga menghasilkan pola warna metalik berlapis yang sempurna.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer>
        <p>&copy; 2026 Atlan Betta Surabaya. All Rights Reserved.</p>
    </footer>
</body>
</html>