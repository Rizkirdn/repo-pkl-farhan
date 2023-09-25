<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
$data = query("SELECT * FROM siswa");
if(isset($_POST["cari"])){
    $data = cari($_POST["keyword"]);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">log out</a>
    <h1>data siswa</h1>
    <a href="tambah.php">tambahkan data</a>
    <br>
    <form action="" method="post">
        <input type="text" name="keyword" size="30" autocomplete
        placeholder="masukan pencarian" autofocus="off">
        <button type="search" name="cari">cari</button>
    </form>
    <table border="5" cellspacing="0" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nik</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $no = 1; ?>
        <?php foreach($data as $siswa): ?>
        <tr>
            <td><?= $no; ?></td>
            <td>
                <a href="ubah.php?id= <?= $siswa["id"]; ?>">Ubah</a> ||
                <a href="hapus.php?id= <?= $siswa["id"]; ?>">Hapus</a>
            </td>
            <td><img src="img/<?= $siswa ["gambar"]; ?>" width="50px"></td>
            <td><?= $siswa ["nik"]; ?></td>
            <td><?= $siswa ["nama"]; ?></td>
            <td><?= $siswa ["email"]; ?></td>
            <td><?= $siswa ["jurusan"]; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>