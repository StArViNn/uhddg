<!DOCTYPE html>
<html>
<head>
    <title>Formulir Penambahan Buku | SMK Taruna Bhakti</title>
</head>

<body>
    <header>
        <h3>Formulir Penambahan Buku</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">

        <fieldset>

        <p>
            <label for="judulbuku">Nama Buku: </label>
            <input type="text" name="judulbuku" placeholder="nama buku" />
        </p>
        <p>
            <label for="pengarang">Pengarang: </label>
            <textarea name="pengarang"></textarea>
        </p>
        <p>
            <label for="tahun_terbit">Tahun Terbit: </label>
            <input type="text" name="tahun_terbit" placeholder="tahun terbit" />
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>
