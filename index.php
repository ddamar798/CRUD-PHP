<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Pendaftaran Siswa Baru</h2>
    <h1>SMK HENGKER</h1>
    <h4>Menu</h4>
    <nav>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

        <ol>
            <li><a href="form-daftar.php">Daftar</a></li>
            <li><a href="/list-siswa.php">daftar siswa</a></li>
        </ol>
    </nav>
</body>
</html>