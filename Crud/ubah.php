<?php
require 'functions.php';
$id = $_GET["id"];
$data = query("SELECT * FROM siswa WHERE id = $id")[0];
if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo 
        "<script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>";
    } else {
        echo 
        "<script>
        alert('data gagal diubah');
        document.location.href = 'index.php';
        </script>";
    }
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
    <h1>halaman ubah data</h1>
    <form action="" method="post">
        <ul>
            <li>
                <input type="hidden" name="id" id="id" value="<?= $data["id"]; ?>">
                <label for="nik">nik</label>
                <input type="text" name="nik" id="nik" value="<?= $data["nik"]; ?>">
            </li>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" value="<?= $data["nama"]; ?>">
            </li>
            <li>
                <label for="email">email</label>
                <input type="text" name="email" id="email" value="<?= $data["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $data["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?= $data["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">tambahkan data</button>
            </li>
        </ul>
    </form>
</body>
</html>