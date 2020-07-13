<?php

    session_start();
    require '../../Model/DataBase/DBcon.php';

    $email = $_POST['email'];
    $pass = $_POST['pwd'];

    if (isset($_POST['Login-submit'])){
        if (empty($email) || empty($pass)){
            header("Location: ../../View/Auth/Login.php?error= Empty Fields");
        } else {
            $hash = password_hash($pass, PASSWORD_BCRYPT);
            $sqlQuery = "SELECT * FROM USER WHERE email ='".$email . "'";
            $result = mysqli_query($conn,$sqlQuery);
            $row = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) > 0){
                $_SESSION['usermail'] = $email;
                $_SESSION['username'] = $row['username'];
                $_SESSION['userID'] = $row['user_id'];
                header("Location: ../../View/Home.php");
            } else {
                echo "<script>alert('wrong Username or Password')</script>";
                header("Location: ../../View/Auth/Login.php?error= incorrect email or password !");
            }
        }

    } else {
        echo "not set";
    }



// &$2y$10$dXfYkFg4kq81qwtibuV.k.ftkSb7Pzcyw67v278HlI2yicMRy4MVq
// &$2y$10$dXfYkFg4kq81qwtibuV.k.ftkSb7Pzcyw67v278HlI2yicMRy4MVq




//if (isset($_POST['Login-submit'])) {
//
//    require '../../Model/DataBase/DBcon.php';
//
//    $email = $_POST['email'];
//    $pass = $_POST['pwd'];
//
//    if (empty($email) || empty($pass)) {
//        header("Location: ../../View/Auth/Login.php?error=emptyfields");
//        exit();
//    } else {
//        $sql = "SELECT * FROM USER WHERE email = ?;";
//        $stmt = mysqli_stmt_init($conn);
//        if (!mysqli_stmt_prepare($stmt, $sql)) {
//            header("Location: ../../View/Auth/Login.php?error=sqlerror");
//            exit();
//        } else {
//            mysqli_stmt_bind_param($stmt, "s", $email);
//            mysqli_stmt_execute($stmt);
//            $result = mysqli_stmt_get_result($stmt);
//            if ($row = mysqli_fetch_assoc($result)) {
//                $pwdCheck = password_verify($pass, $row['password']);
//                if ($pwdCheck == false) {
//                    header("Location: ../../View/Auth/Login.php?error=passWrong");
//                    exit();
//                } elseif ($pwdCheck == true) {
//                    session_start();
//                    $_SESSION['userId'] = $row['user_id'];
//                    $_SESSION['userName'] = $row['username'];
//
//                    header("Location: ../../View/Auth/Login.php?success");
//                    header("Location: ../../View/Home.php");
//                    exit();
//
//                } else {
//                    header("Location: ../../View/Auth/Login.php?error=passwrong");
//                    exit();
//                }
//            }
//        }
//    }
//
//} else {
//    header("Location: ../../View/HomeMember.php");
//    exit();
//}