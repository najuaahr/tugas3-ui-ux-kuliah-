<?php
include 'koneksi.php';

session_start();

if (isset($_POST['submit'])) {

    $user = mysqli_real_escape_string($kon, $_POST['username']);
    $pw = $_POST['password'];

    $sql = " SELECT * FROM mst_users WHERE username = '$user' && password = '$pw' ";
    $hasil = mysqli_query($kon, $sql);

    if (mysqli_num_rows($hasil) > 0) {
        $_SESSION['username'] = $user;
        // $_SESSION['username'] = $user;
        header("location: home.php");

    } else {
        $error[] = 'incorrect username or password!';
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>login</title>
    <link rel="stylesheet" href="styles1.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>SIGN IN</h3>

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                }
                ;
            }
            ;
            ?>

            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Sign In" class="form-btn">


            <div class="text-center forget">
                <p><a href="forgot.php">forgot password? </a></p>
                <p>don't have an account? <a href="regis.php">register now</a></p>
            </div>

        </form>

    </div>
</body>

</html>