<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Post</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" placeholder="Username" name="username">
        <br>
        <input type="password" placeholder="Password" name="password">
        <br>
        <input type="submit" value="Login">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            echo "Username: <b>$_POST[username]</b><br>";
            echo "Password: <b>$_POST[password]</b>";
        }
    ?>
</body>
</html>