<?php
session_start();
include 'db_connect.php'; // Koneksi ke database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $nim = $_POST['nim'];
    $department = $_POST['department'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role = $_POST['role'];

    // Handle file upload
    $profile_pic = '';
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        $allowed = ['jpg', 'jpeg', 'png', 'gif'];
        $file_name = $_FILES['profile_pic']['name'];
        $file_tmp = $_FILES['profile_pic']['tmp_name'];
        $file_size = $_FILES['profile_pic']['size'];
        $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (in_array($file_ext, $allowed)) {
            $upload_dir = 'uploads/';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }

            $new_file_name = uniqid('', true) . '.' . $file_ext;
            $upload_path = $upload_dir . $new_file_name;

            if (move_uploaded_file($file_tmp, $upload_path)) {
                $profile_pic = $new_file_name;
            }
        }
    }

    $query = "INSERT INTO users (full_name, nim, department, phone_number, email, password, profile_pic, role) VALUES ('$full_name', '$nim', '$department', '$phone_number', '$email', '$password', '$profile_pic', '$role')";
    if (mysqli_query($conn, $query)) {
        header('Location: login.php');
        exit();
    } else {
        echo 'Error: ' . mysqli_error($conn);
    }
}
?>
    