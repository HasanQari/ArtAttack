<?php

if (isset($_POST['Register-submit'])) {

    require '../../Model/DataBase/DBcon.php';
    $msg = "";

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['pwd'];
    $Cpassword = $_POST['Cpwd'];

    if (empty($username) || empty($email) || empty($password) || empty($Cpassword)) {
        header("Location: ../../View/Auth/Register.php?error=emptyFields");
        $msg = "Please Check Don't leave the fields empty!";
        exit();
    } else if ($password !== $Cpassword) {
        header("Location: ../../View/Auth/Register.php?error=passwordNotMatch");
        $msg = "Password Not Match!";
        exit();

    } else {

        $sql = "SELECT username from USER WHERE username = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../../View/Auth/Register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0) {
                header("Location: ../../View/Auth/Register.php?error=usertaken");
                exit();
            } else {

                $hash = password_hash($password, PASSWORD_BCRYPT);
                $sql = "INSERT INTO USER (username,email,password) VALUES ('$username','$email','$hash')";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../../View/Auth/Register.php?error=sqlerror");
                    exit();
                } else {
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hash);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../../View/Auth/Register.php?signup=success");
                    header("Location: ../../View/Home.php");
                }
            }
        }
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

} else {
    header("Location: ../../View/Auth/Register.php");
    exit();
}
















//$msg = "";
//
////echo phpinfo();
//
//if (isset($_POST['submit'])) {
//    $con = new mysqli('localhost', 'root', '0000', 'ArtAttack');
//
//    $username = $con->real_escape_string($_POST['username']);
//    $email = $con->real_escape_string($_POST['email']);
//    $Password = $con->real_escape_string($_POST['Password']);
//    $cPassword = $con->real_escape_string($_POST['cPassword']);
//
//    if ($Password != $cPassword) {
//        $msg = "Please Check the Confirm Password";
//    } else {
//        $hash = password_hash($Password, PASSWORD_BCRYPT);
//        $con->query("INSERT INTO USER (username,email,password) VALUES ('$username','$email','$hash')");
////        $msg = "Registered!";
//        header('Location: ../HomeMember.php');
//    }
//}
