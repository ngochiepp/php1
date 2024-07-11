<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <p>Username</p>
        <input type="text" name="username"><br>
        <p>Password</p>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
    <?php
        if(isset($_POST["login"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($username == "admin" && $password == "12345"){
                session_start();
                $_SESSION["user"] = $username;
                header("Location: home.php");
            }else{
                echo "Sai mật khẩu";
            }
        }
    ?>
</body>
</html>