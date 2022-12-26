<?php 


include 'config.php';

$name = strtolower($_POST["name"]);
$email = strtolower(stripcslashes($_POST["email"]));
$password = mysqli_real_escape_string($config, $_POST["password"]);
$confPassword = mysqli_real_escape_string($config, $_POST["confPassword"]);


$query = mysqli_query($config, "SELECT email FROM users WHERE email ='$email'");

if (mysqli_fetch_assoc($query)) {
    echo "<script>
        alert('Email sudah ada!');
        window.location.replace('register.php');
        </script>";
    return false;
} 

// cek konfirmasi paswrod
if( $password != $confPassword){
    echo "<script>
        alert('password tidak sesuai!');
        window.location.replace('register.php');
    </script>";
    return false;

}

// enkripsi password
$password = password_hash($password, PASSWORD_DEFAULT);


// tambahkan user baru ke db
mysqli_query($config, "INSERT INTO users VALUES (' ','$name','','','ahmadafrisal2002@gmail.com','','$password','6','','','USER')");


header('Location:login.php');
?>