<?php
$counter_file = "counter.txt";

// Buat file jika belum ada
if (!file_exists($counter_file)) {
    @file_put_contents($counter_file, "0");
}

// Baca nilai counter saat ini
$views = (int)@file_get_contents($counter_file);
$views++;

// Gunakan fopen & flock untuk menangani akses bersamaan dengan aman
$fp = @fopen($counter_file, "w");
if ($fp) {
    if (flock($fp, LOCK_EX)) {
        fwrite($fp, (string)$views);
        flock($fp, LOCK_UN);
    }
    fclose($fp);
}
?>