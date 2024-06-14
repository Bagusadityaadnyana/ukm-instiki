<?php
include('config.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    $query_check_user = "SELECT * FROM users WHERE nim='$nim'";
    $result_check_user = mysqli_query($conn, $query_check_user);

    if (mysqli_num_rows($result_check_user) == 1) {
        $user = mysqli_fetch_assoc($result_check_user);

        if (password_verify($password, $user['password'])) {
            echo '<script>window.location="../homepage.html"</script>';
            exit();
        } else {
            $errors[] = "Password salah";
        }
    } else {
        $errors[] = "NIM tidak ditemukan";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login INSPIRA</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('img/background.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(5px);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
            max-width: 38%;
        }
        .error-message {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
        .register-link {
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Login INSPIRA<br>(Instiki Prestasi dan Kreativitas)</h2>
        <?php 
        if (!empty($errors)) {
            echo '<div class="error-message">' . implode('<br>', $errors) . '</div>';
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="nim">NIM:</label>
                <input type="text" id="nim" name="nim" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
        <p class="text-center register-link">Belum mempunyai akun? <a href="register.php">Daftar disini sekarang!</a></p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
