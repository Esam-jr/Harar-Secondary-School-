<?php
if (!isset($_SESSION)) session_start();
if(isset($_SESSION['fullname'])){
    header("Location: home.php");
    exit(0);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <?php include 'connection.php'; ?>
    <div class="container">
        <h1>Login Here</h1>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" placeholder="username" name="username"><br><br>
            <input type="password" placeholder="password" name="password"><br><br>
            <button type="submit" name="login_btn">Login</button>
        </form>
        <?php
        if (isset($_POST['login_btn'])) {
            $uname = $_POST['username'];
            $input_password = $_POST['password'];

            $sql = "SELECT id, fullname FROM users 
            WHERE username= '$uname' AND
             password ='$input_password' ";
           
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    $row= $result->fetch_assoc();
                    $_SESSION['username'] = $uname;
                    $_SESSION['fullname'] = $row['fullname'];
                    header("Location: home.php");
                    exit(0);
                } else {
                    echo "<p class='error'>No such user here!</p>";
                }
              
            } 
        
    
        ?>
        <?php   $con->close(); ?>
    </div>
</body>
</html>
