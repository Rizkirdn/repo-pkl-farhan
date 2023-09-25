<?php
$conn = mysqli_connect("Localhost", "root", "", "data sekola");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah($data){
    global $conn;
    $nik = $data["nik"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "INSERT INTO siswa
                VALUES
            ('', '$nik', '$nama', '$email', '$jurusan', '$gambar')  
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function ubah($data){
    global $conn;
    $id = $data["id"];
    $nik = $data["nik"];
    $nama = $data["nama"];
    $email = $data["email"];
    $jurusan = $data["jurusan"];
    $gambar = $data["gambar"];

    $query = "UPDATE siswa SET 
              nik = '$nik',      
              nama = '$nama',      
              email = '$email',      
              jurusan = '$jurusan',      
              gambar = '$gambar'
                WHERE id = $id      
            ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function registrasi($data){
    global $conn;
    $username = stripslashes(strtolower($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo 
        "<script>
        alert('gunakan username yang lain');
        </script>";
        return false;
    }
    if($password !== $password2){
        echo 
        "<script>
        alert('password tidak sesuai');
        </script>";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM siswa
                WHERE 
              nik LIKE '%$keyword%' OR  
              nama LIKE '%$keyword%' OR  
              email LIKE '%$keyword%' OR  
              jurusan LIKE '%$keyword%'   
            ";
    return query($query);
}
?>