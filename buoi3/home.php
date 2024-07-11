<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home </h1>
        <?php
        session_start();
        $username = $_SESSION["username"];
        if(isset($username)){
            echo "user: " . $username;
            echo '<a href="logout.php">Logout</a>';
        }else{
            header("Location: login.php");
        }
        
        ?>
   
</body>
</html>