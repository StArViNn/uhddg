<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Buku | SMK Taruna Bhakti</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <header>
        <h3>Penambahan Buku</h3>
        <h1>SMK Taruna Bhakti</h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Buku Baru</a></li>
            <li><a href="list-siswa.php">Buku Terdaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Buku baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>
    </body>
</html>
