<?php

$msg = "";

//echo phpinfo();

if (isset($_POST['submit'])) {
    $con = new mysqli('localhost', 'root', '0000', 'ArtAttack');

    $username = $con->real_escape_string($_POST['username']);
    $email = $con->real_escape_string($_POST['email']);
    $Password = $con->real_escape_string($_POST['Password']);
    $cPassword = $con->real_escape_string($_POST['cPassword']);

    if ($Password != $cPassword) {
        $msg = "Please Check the Confirm Password";
    } else {
        $hash = password_hash($Password, PASSWORD_BCRYPT);
        $con->query("INSERT INTO USER (username,email,password) VALUES ('$username','$email','$hash')");
//        $msg = "Registered!";
        header('Location: ../HomeMember.php');
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Core Stylesheet -->
    <link href="../../Resource/Library/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../../Resource/Library/css/responsive.css" rel="stylesheet">
    <!-- Home Style Sheet -->
    <link href="../../Resource/ArtAttack.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="signupHolder" class="popStyle" style="display: block">
    <div class="wrapperAuT fadeInDownAuT">
        <div class="formContent">
            <div class="close btn pointer">
                <button class="close btn pointer" onclick="closeUp()"><i class="ti-close" aria-hidden="true"></i>
                </button>
            </div>
            <!-- Tabs Titles -->
            <h2 class="signTitle active"> Sign Up </h2>
            <!-- Login Form -->
            <?php if ($msg != "") echo $msg."<br><br>"; ?>
            <form method="post" action="Register.php">
                <input type="text" class="fadeInAuT fst inputAuT" minlength="3" name="username" placeholder="Username">
                <input type="email" class="fadeInAuT fst inputAuT" name="email" placeholder="Email">
                <input type="password" class="fadeInAuT scd inputAuT" minlength="6" name="Password"
                       placeholder="Password">
                <input type="password" class="fadeInAuT scd inputAuT" minlength="6" name="cPassword"
                       placeholder="Confirm Password">
                <input type="submit" class="fadeInAuT trd AuTsubmit" name="submit" value="Register">
            </form>
        </div>
    </div>
</div>
</body>
</html>