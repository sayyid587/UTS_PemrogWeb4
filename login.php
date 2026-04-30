<!DOCTYPE html>
<html>
<head>
    <title>Login SQL Injection Lab</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            width: 350px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border-radius: 8px;
            border: 1px solid #ccc;
            outline: none;
        }

        input:focus {
            border-color: #4facfe;
        }

        button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-danger {
            background: #ff4d4d;
            color: white;
        }

        .btn-safe {
            background: #28a745;
            color: white;
        }

        .divider {
            margin: 15px 0;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Login System</h2>

    <form method="POST" action="proses_login.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn-danger" type="submit">Login (Rentan)</button>
    </form>

    <div class="divider">atau</div>

    <form method="POST" action="proses_login_safe.php">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button class="btn-safe" type="submit">Login (Aman)</button>
    </form>
</div>

</body>
</html>