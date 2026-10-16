<?php include 'counter.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Blog & FAQ - Atlan Betta Surabaya</title>
    <link rel="stylesheet" href="style.css">
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
        <h2>Blog & Pertanyaan yang Sering Ditanyakan (FAQ)</h2>
        
        <article class="card" style="width: 100%; margin-bottom: 15px;">
            <h3>Q: Apa perbedaan Kasta Biasa, VIP, dan Super VVIP?</h3>
            <p><strong>A:</strong> Kasta Biasa adalah cupang dengan form & warna standar. VIP memiliki kombinasi warna lebih rapi dan genetik bagus. Super VVIP adalah cupang kualitas kontes/grade A dengan form sempurna dan warna langka.</p>
        </article>

        <article class="card" style="width: 100%; margin-bottom: 15px;">
            <h3>Q: Apakah ada garansi pengiriman?</h3>
            <p><strong>A:</strong> Ya, kami memberikan garansi Ikan Hidup sampai Tujuan (DOA - Dead on Arrival) khusus pengiriman wilayah Jawa Timur & Surabaya dengan melampirkan video unboxing.</p>
        </article>

        <article class="card" style="width: 100%; margin-bottom: 15px;">
            <h3>Q: Bagaimana cara merawat air agar ekor cupang tidak rusak?</h3>
            <p><strong>A:</strong> Gunakan air yang sudah diendapkan minimal 24 jam dan tambahkan ekstrak daun ketapang secukupnya serta sedikit garam ikan.</p>
        </article>

        <div class="counter-box">
            Total Page Views: <?php echo $views; ?>
        </div>
    </div>

    <footer>
        <p>&copy; 2026 Atlan Betta Surabaya.</p>
    </footer>
</body>
</html>