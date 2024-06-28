<?php
include 'includes/session.php'; // Menangani sesi untuk login

// Pastikan formulir login dikirim dengan metode POST
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Kredensial admin yang valid
    $admin_user = 'admin@admin.com';
    $admin_pass = 'admin';

    // Periksa apakah email dan password cocok dengan kredensial admin
    if ($email === $admin_user && $password === $admin_pass) {
        // Set sesi admin
        $_SESSION['admin'] = $admin_user;

        // Redirect ke halaman home admin
        header('location: admin/home.php');
        exit();
    } else {
        // Jika kredensial salah, set sesi error
        $_SESSION['error'] = 'Invalid email or password';

        // Redirect kembali ke halaman login admin
        header('location: admin.php');
        exit();
    }
} else {
    // Jika formulir login tidak dikirim, set sesi error
    $_SESSION['error'] = 'Please fill up the login form first';

    // Redirect kembali ke halaman login admin
    header('location: admin.php');
    exit();
	}
?>