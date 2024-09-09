<!-- <?php
    include "koneksi.php";
    session_start();
    echo $_SESSION['username'];
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="nav">
        <div class="navbar-brand">
            <ul class="left">
                <li><img class="image" src="image/logo.png" width="100px" height="100px"></li>
                <li><a href='#'><i class="fa fa-fw fa-home"></i> Home </a></li>
                <li><a href='profile.php'><i class="fa fa-fw fa-user"></i> Profile </a></li>
            </ul>
        </div>
    </nav>
    <div class="home">
        <a href="#"><img src="image/wp.jpg" class="img1"></a>
    </div>
</body>

</html>