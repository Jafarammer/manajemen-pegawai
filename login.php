<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>Halaman Login</title>
</head>
<body>
    <div class="container-login">
        <section class="login-box">
            <h2>Login Aplikasi</h2>
            <form method="POST" action="cek_login.php">
                <input type="text" placeholder="Username" id="username" autocomplete="off">
                <input type="password" placeholder="Password" id="password">
                <input type="submit" value="Login">
            </form>
        </section>
    </div>
</body>
</html>