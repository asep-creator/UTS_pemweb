<?php
include "koneksi.php";

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM users 
        WHERE username='$username' AND password='$password'");

    $user = mysqli_fetch_assoc($data);

    if ($user) {

        $_SESSION['login'] = true;
        $_SESSION['role'] = $user['role'];
        $_SESSION['username'] = $user['username'];

        if ($user['role'] == 'admin') {
            header("Location: admin/index.php");
        } else {
            header("Location: galeri.php");
        }

    } else {
        echo "Login gagal!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<style>
body {
    font-family: Poppins;
    background:#f5f7fa;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box {
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    width:300px;
}

input {
    width:100%;
    padding:10px;
    margin:10px 0;
}

button {
    width:100%;
    padding:10px;
    background:#1e90ff;
    color:white;
    border:none;
}
</style>
</head>
<body>

<div class="box">
<h2>Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">

<button name="login">Masuk</button>
</form>

</div>

</body>
</html>