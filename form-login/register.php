<?php
include('config.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $no_telepon = $_POST['no_telepon'];
    $password = $_POST['password'];
    $konfirmasi_password = $_POST['konfirmasi_password'];

    if (empty($nama)) {
        $errors[] = "Nama harus diisi";
    }
    if (empty($nim)) {
        $errors[] = "NIM harus diisi";
    }
    if (empty($jurusan)) {
        $errors[] = "Jurusan harus diisi";
    }
    if (empty($jenis_kelamin)) {
        $errors[] = "Jenis kelamin harus dipilih";
    }
    if (empty($email)) {
        $errors[] = "Email harus diisi";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    }
    if (empty($no_telepon)) {
        $errors[] = "No. Telepon harus diisi";
    }
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    }
    if ($password !== $konfirmasi_password) {
        $errors[] = "Konfirmasi password tidak sesuai";
    }

    $query_check_nim = "SELECT * FROM users WHERE nim='$nim'";
    $result_check_nim = mysqli_query($conn, $query_check_nim);
    if (mysqli_num_rows($result_check_nim) > 0) {
        $errors[] = "NIM sudah terdaftar, gunakan NIM lain";
    }

    if (empty($errors)) {
        $hashed_password = md5($password);
        $role = 'USER';

        $query_register = "INSERT INTO users (nama, nim, jurusan, jenis_kelamin, email, no_telepon, password, role) 
                           VALUES ('$nama', '$nim', '$jurusan', '$jenis_kelamin', '$email', '$no_telepon', '$hashed_password', '$role')";
        $result_register = mysqli_query($conn, $query_register);

        if ($result_register) {
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Gagal melakukan registrasi";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran INSPIRA</title>
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
            max-width: 50%;
        }
        .container h2 {
            margin-bottom: 15px;
            text-align: center;
            color: #333;
        }
        .message {
            text-align: center;
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Pendaftaran INSPIRA<br>(Instiki Prestasi dan Kreativitas)</h2>
        <?php 
        if (!empty($errors)) {
            echo '<div class="message">' . implode('<br>', $errors) . '</div>';
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap:</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM:</label>
                        <input type="text" id="nim" name="nim" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan:</label>
                        <input type="text" id="jurusan" name="jurusan" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin:</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon">No. Telepon:</label>
                        <input type="text" id="no_telepon" name="no_telepon" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="konfirmasi_password">Konfirmasi Password:</label>
                        <input type="password" id="konfirmasi_password" name="konfirmasi_password" class="form-control" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
