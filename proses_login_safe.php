<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();

$result = $stmt->get_result();

if($result->num_rows > 0){
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Gagal</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            background: linear-gradient(135deg, #ff758c, #ff7eb3);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 300px;
        }

        h2 {
            color: #dc3545;
        }

        p {
            color: #555;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: #4facfe;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        a:hover {
            background: #007bff;
        }
    </style>
</head>
<body>

<div class="card">
    <h2>Login Gagal</h2>
    <p>Username atau password salah.</p>
    <p><strong>Sistem aman dari SQL Injection.</strong></p>
    <a href="login.php">Kembali</a>
</div>

</body>
</html>