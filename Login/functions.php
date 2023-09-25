<?php
$conn = mysqli_connect("Localhost", "root", "", "data sekola");

function registrasi($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo 
        "<script>
        alert('Gunakan username yang lain');
        </script>";
    }
    if($password !== $password2){
        echo
        "<script>
        alert('Konfirmasi password tidak sesuai');
        </script>";
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
?>