<?php
$listproduk = [
    [
        "nama" => "Televisi 30 inch",
        "kategori" => "Elektronik",
        "harga" => 2500000,
        "stok" => 15,
        "image" => "img/televisi.jpg"
    ],
    [
        "nama" => "Speaker Portable",
        "kategori" => "Aksesoris Teknologi",
        "harga" => 800000,
        "stok" => 10,
        "image" => "img/speaker.jpg"
    ],
    [
        "nama" => "Headphone Bluetooth",
        "kategori" => "Aksesoris Teknologi",
        "harga" => 2500000,
        "stok" => 0,
        "image" => "img/headphone.jpg"
    ],
    [
        "nama" => "TWS Bluetooth",
        "kategori" => "Aksesoris Teknologi",
        "harga" => 450000,
        "stok" => 0,
        "image" => "img/tws.jpg"
    ],
    [
        "nama" => "powerbank 10000 mAh",
        "kategori" => "Aksesoris Teknologi",
        "harga" => 350000,
        "stok" => 50,
        "image" => "img/powerbank.jpg"
    ],
    [
        "nama" => "Mouse Wireless",
        "kategori" => "Aksesoris Teknologi",
        "harga" => 500000,
        "stok" => 50,
        "image" => "img/mouse.jpg"
    ]
];
$totalproduk = count($listproduk);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <div class="logo">Cia Store</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">About us</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h2>Welcome to Cia Store!</h2>
            <p>Temukan berbagai produk elektronik dan aksesoris teknologi berkualitas</p>
            <a href="#Produk" class="btn">Lihat Produk</a>
        </div>
    </section>

    <main id="Produk" class="container">
        <h2>Daftar Produk</h2>
        <p>Total Produk: <?php echo $totalproduk; ?></p>

        <div class="product-list">
            <?php foreach ($listproduk as $produk) : ?>
                <div class="product-card">
                    <img src="<?php echo $produk['image']; ?>" alt="Product" style="width: 100%; height: 140px; object-fit: cover; border-radius: 6px; margin-bottom: 10px;">
                    <span class="product-category"><?php echo $produk["kategori"]; ?></span>
                    <h3><?php echo $produk["nama"]; ?></h3>

                    <?php if ($produk['harga'] >= 1000000) : ?>
                        <?php
                            $diskon = $produk['harga'] * 0.10;
                            $harga_diskon = $produk['harga'] - $diskon;
                        ?>
                        <p class="normal-price" style="text-decoration: line-through; color: gray;">Rp<?php echo number_format($produk['harga'], 0, ',', '.'); ?></p>
                        <p class="price" style="font-weight: bold; color: #2b6cb0;">Rp<?php echo number_format($harga_diskon, 0, ',', '.'); ?> (Diskon 10%)</p>
                    <?php else : ?>
                        <p class="price" style="font-weight: bold;">Rp<?php echo number_format($produk['harga'], 0, ',', '.'); ?></p>
                    <?php endif; ?>

                    <?php if ($produk["stok"] > 0) : ?>
                        <p class="stock">Stok Tersedia: <?php echo $produk["stok"]; ?></p>
                        <button class="buy-button">Beli Sekarang</button>
                    <?php else : ?>
                        <p class="out-of-stock">Stok Habis</p>
                        <button class="buy-button" disabled>Beli Sekarang</button>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Cia Store. All right reserved.</p>
    </footer>
</body>
</html>