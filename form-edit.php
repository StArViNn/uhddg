<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Formulir Edit Siswa</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <fieldset>

            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

        <p>
            <label for="judulbuku">Judul Buku: </label>
            <input type="text" name="judulbuku" placeholder="judulbuku" value="<?php echo $siswa['judulbuku'] ?>" />
        </p>
        <p>
            <label for="pengarang">Pengarang: </label>
            <textarea name="pengarang"><?php echo $siswa['pengarang'] ?></textarea>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit: </label>
            <input type="text" name="tahun_terbit" placeholder="nama sekolah" value="<?php echo $siswa['tahun_terbit'] ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>


    </form>

    </body>
</html>
