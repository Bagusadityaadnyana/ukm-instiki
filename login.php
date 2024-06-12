<?php
session_start();
include 'db_connect.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header('Location: homepage.html');
        exit();
    } else {
        echo 'Email atau password salah';
    }
}
?>

<form action="login.php" method="post">
    <div class="form-group">
        <input type="email" class="form-control" name="email" placeholder="Masukan Alamat Email" required>
    </div>
    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Masukan Password" required>
    </div>
    <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
</form>
