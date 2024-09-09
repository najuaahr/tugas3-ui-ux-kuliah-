<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {

    $fname = mysqli_real_escape_string($kon, $_POST['first_name']);
    $lname = mysqli_real_escape_string($kon, $_POST['last_name']);
    $user = mysqli_real_escape_string($kon, $_POST['username']);
    $email = mysqli_real_escape_string($kon, $_POST['email']);
    $jkn = mysqli_real_escape_string($kon, $_POST['jenis_kelamin']);
    $telp = mysqli_real_escape_string($kon, $_POST['no_telp']);
    $alamat = mysqli_real_escape_string($kon, $_POST['alamat']);
    $rt = mysqli_real_escape_string($kon, $_POST['rt']);
    $rw = mysqli_real_escape_string($kon, $_POST['rw']);
    $kec = mysqli_real_escape_string($kon, $_POST['kecamatan']);
    $kel = mysqli_real_escape_string($kon, $_POST['kelurahan']);
    $kota = mysqli_real_escape_string($kon, $_POST['kota']);
    $kdpos = mysqli_real_escape_string($kon, $_POST['kode_pos']);
    $job = mysqli_real_escape_string($kon, $_POST['job']);
    $pw = $_POST['password'];

    $sql = " SELECT * FROM mst_users WHERE email = '$email' && password = '$pw' && username = '$user'";
    $hasil = mysqli_query($kon, $sql);

    if (mysqli_num_rows($hasil) > 0) {

        $error[] = 'user already exist!';

    } else {
        $sql1 = "INSERT INTO mst_users VALUES ('','$fname','$lname','$email','$user','$pw','$jkn','$telp','$alamat','$rt','$rw','$kec','$kel','$kota','$kdpos','$job')";
        mysqli_query($kon, $sql1);
        header('location:index.php');
    }
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="styles2.css">
</head>

<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>SIGN UP</h3>

            <?php
            if (isset($error)) {
                foreach ($error as $error) {
                    echo '<span class="error-msg">' . $error . '</span>';
                };
            };
            ?>

            <table>
                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="first_name" required placeholder="First Name">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="last_name" required placeholder="Last Name">
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="username" required placeholder="Username">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="email" required placeholder="Email">
                    </td>
                </tr>

                <tr>
                    <td class="g">
                        <p> Gender </p>
                    </td>

                    <td class="genders">

                        <input type="radio" name="jenis_kelamin" value="male"> Male
                        <input type="radio" name="jenis_kelamin" value="female"> Female
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="no_telp" required placeholder="Phone">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="alamat" required placeholder="Address">
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="rt" required placeholder="RT">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="rw" required placeholder="RW">
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="kecamatan" required placeholder="Sub-district">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="kelurahan" required placeholder="Urban Village">
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="kota" required placeholder="City">
                    </td>

                    <td class="name">
                        <input class="fn" type="text" name="kode_pos" required placeholder="Postcode">
                    </td>
                </tr>

                <tr>
                    <td class="name">
                        <input class="fn" type="text" name="job" required placeholder="Job">
                    </td>

                    <td class="name">
                        <input class="fn" type="password" name="password" required placeholder="Password">
                    </td>
                </tr>

            </table>

            <div class="loginp">
                <input type="submit" name="submit" value="Sign Up" class="form-btn">
            </div>

            <div class="loginp">
                <p>already have an account? <a href="index.php">login now</a></p>
            </div>
        </form>

    </div>
</body>

</html>