<?php

// menulis konfigurasi untuk aplikasi
$config['base_url'] = "http://localhost/absensi";

// koneksi ke database daftar_hadir di mongodb
$connection = new MongoClient();
$db = $connection->daftar_hadir;

?>
