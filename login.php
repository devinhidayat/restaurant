<?php include('config/constants.php'); ?>

<html>
    <head>
        <title>Login - Food Order System</title>
        <link rel ="sytlesheet" href ="admin.css">
    </head>

    <body>
        <div class="login">
            <h1 class="text-center">Login</h1>
            <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
            ?>
            <br><br>

            <form action="" method="POST" class="text-center">
            Username: <br>
            <input type="text" name="username" placeholder ="Username" required><br><br>

            Password: <br>
            <input type="password" name="password" placeholder ="Password" required><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primary">
            <br><br>
            <a href="signup.php">Create an account</a>
            </form>
        </div>
    </body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM tbl_user WHERE username ='$username' AND password='$password'";

        $res = mysqli_query($conn, $sql);

        $count = mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login'] = "<div class = 'success text-center' style='color: black'><h1>Welcome, $username</h1></div>";
            header('location:'.SITEURL);
        }
        else
        {
            $_SESSION['login'] = "<div class = 'error'>Login Failed.</div>";
            header('location:'.SITEURL.'login.php');
        }
    }
?>