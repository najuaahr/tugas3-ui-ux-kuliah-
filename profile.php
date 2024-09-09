<?php
include "koneksi.php";
session_start();

$query = "SELECT*FROM mst_users where username='" . $_SESSION['username'] . "'";
$result = mysqli_query($kon, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>profile</title>
    <link rel="stylesheet" href="st4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <!-- header -->
        <nav class="nav">
            <div class="navbar-brand">
                <ul class="left">
                    <li><img class="image" src="image/logo.png" width="100px" height="100px"></li>
                    <li><a href='home.php'><i class="fa fa-fw fa-home"></i> Home </a></li>
                    <li><a href='profile.php'><i class="fa fa-fw fa-user"></i> Profile </a></li>
                </ul>
            </div>
        </nav>

        <!-- header end -->
        <!-- content -->
        <div class="profile">
            <div class="prof">
                <form action="logout.php" method="post">
                    <table>
                        <?php
                        while ($ts = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td><img src="image/user.png" /></td>
                                <td class="ft">
                                    <?php echo $ts['first_name'] ?>
                                    <?php echo $ts['last_name'] ?>
                                </td>
                            </tr>

                            <tr>
                                <td class="mp">My Profile</td>
                            </tr>

                            <tr>
                                <td class="ifn"> First Name</td>
                                <td>:
                                    <input type="text" class="input" name="first_name" value="<?= $ts['first_name'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="iln"> Last Name</td>
                                <td>:
                                    <input type="text" class="input" name="last_name" value="<?= $ts['last_name'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="jk">Gender</td>
                                <td class="input1">:
                                    <input type="radio" name="jenis_kelamin" value="male" <?php if ($ts["jenis_kelamin"] == "male")
                                        echo 'checked' ?> />male
                                        <input type="radio" name="jenis_kelamin" value="female" <?php if ($ts["jenis_kelamin"] == "female")
                                        echo 'checked' ?> />female
                                    </td>
                                </tr>

                                <tr>
                                    <td class="tlp">Phone</td>
                                    <td>:
                                        <input type="text" class="input" name="no_telp" value="<?= $ts['no_telp'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="em">Email</td>
                                <td>:
                                    <input type="textarea" class="input" name="email" value="<?= $ts['email'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="ad">Address</td>
                                <td>:
                                    <input type="text" class="input2" name="alamat" value="<?= $ts['alamat'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td>
                                <td class="input3">
                                    RT : <input type="text" class="rtw" maxlength="3" name="rt"
                                        value="<?php echo $ts['rt'] ?>" />
                                    RW : <input type="text" class="rtw" maxlength="3" name="rw"
                                        value="<?php echo $ts['rw'] ?>" />
                                </td>
                                </td>
                            </tr>

                            <tr>
                                <td class="kc">Sub-district</td>
                                <td>:
                                    <input type="text" class="input" name="kecamatan" value="<?= $ts['kecamatan'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="kl">Urban Village</td>
                                <td>:
                                    <input type="text" class="input" name="kelurahan" value="<?= $ts['kelurahan'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="ct">City</td>
                                <td>:
                                    <input type="text" class="input" name="kota" value="<?= $ts['kota'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="kd">Postcode</td>
                                <td>:
                                    <input type="text" class="input" name="kode_pos" value="<?= $ts['kode_pos'] ?>" />
                                </td>
                            </tr>

                            <tr>
                                <td class="job">Job</td>
                                <td>:
                                    <input type="text" class="input" name="job" value="<?= $ts['job'] ?>" />
                                </td>
                            </tr>

                            <?php
                        }
                        ?>
                    </table>
                    <div class="logout">
                    <input type="submit" class="form-btn" name="logout" value="logout" />
                    </div>
                    
                </form>


            </div>
        </div>
        <!-- content end -->
    </div>
</body>

</html>