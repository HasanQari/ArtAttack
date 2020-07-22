<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
    <!-- Title -->
    <title>Art Attack | Login</title>

    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Core Stylesheet -->
    <link href="../../Resource/Library/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../../Resource/Library/css/responsive.css" rel="stylesheet">

    <!-- Home Style Sheet -->
    <link href="../../Resource/ArtAttack.css" rel="stylesheet" type="text/css">

    <!-- Home Script Sheet -->
    <script src="../../Resource/ArtAttack.js"></script>

    <style>
        #BkHome{
            cursor: pointer;
            color: #313131;
            margin: 5px 0 25px 0;
        }
    </style>
</head>

<body class="colorfulBG">

<!-- ***** Header Area Start ***** -->
<header class="header_area animated" style="position: fixed">
    <div class="container-fluid">
        <div class="row align-items-center col-12 col-lg-10 menu_area">
            <nav class="navbar navbar-expand-lg navbar-light">
                <!-- Logo -->
                <a class="navbar-brand" style="color: #fff">Art<span id="AttackWord">Attack</span></a>
            </nav>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- Login Form -->
<div id="loginHolder" class="popStyle">
    <div class="wrapperAuT fadeInDownAuT">
        <div class="formContent">
            <!-- Tabs Titles -->
            <h2 class="signTitle active">Sign in </h2>

            <?php
                if(@$_GET['error'] == true){
            ?>
                    <div class="alert-light text-danger text-center py-2"><?php echo $_GET['error'] ?></div>
            <?php
                }
            ?>

            <!-- Login Form -->
            <form method="post" action="../../Controller/auth/LoginController.php">
                <input type="email" name="email" placeholder="Email"
                       class="fadeInAuT fst inputAuT">
                <input type="password" name="pwd" placeholder="Password" minlength="6"
                       class="fadeInAuT scd inputAuT">

                <input type="submit" name="Login-submit" value="Login"
                       class="fadeInAuT trd AuTsubmit">
            </form>

            <!-- Remind Password -->
            <div class="">
                <a class="underlineHover pointer" onclick="fPass()">Forgot Password?</a>
            </div>

            <!-- Go To Home -->
            <div>
                <a id="BkHome" class="underlineHover" href="../Home.php">Back To Home</a>
            </div>
        </div>
    </div>
</div>

<?php
//if(!empty($_POST["forgot-password"])){
//    $conn = mysqli_connect("localhost", "root", "", "blog_samples");
//
//    $condition = "";
//
//    if(!empty($_POST["user-email"])) {
//        if(!empty($condition)) {
//            $condition = " and ";
//        }
//        $condition = " member_email = '" . $_POST["user-email"] . "'";
//    }
//
//    if(!empty($condition)) {
//        $condition = " where " . $condition;
//    }
//
//    $sql = "Select * from members " . $condition;
//    $result = mysqli_query($conn,$sql);
//    $user = mysqli_fetch_array($result);
//
//    if(!empty($user)) {
//        require_once("../../Controller/auth/FPassController.php");
//    } else {
//        $error_message = 'No User Found';
//    }
//}
//?>
<!-- Forget Password -->
<div id="fPassHolder" class="popStyle" style="display: none">
    <div class="wrapperAuT fadeInDownAuT">
        <div class="formContent">
            <!-- Tabs Titles -->
            <h2 class="signTitle active">Remember Password </h2>
            <!-- Login Form -->
            <form>
<!--                 method="post" action="../../Controller/auth/FPassController.php"> -->

                <input type="email" name="user-email" id="user-email" placeholder="Email"
                       class="fadeInAuT fst inputAuT">

                <button type="submit" name="forgot-password" id="forgot-password" class="fadeInAuT trd AuTsubmit"
                   onclick="sendMail()"><span style="color:#fff;">SEND</span></button>
            </form>
            <div>
                <a id="BkHome" class="underlineHover" href="">Remember it? Back to Login</a>
            </div>
        </div>
    </div>
</div>
<!--message-->
<div id="sentMsg" class="popStyle" style="display: none">
    <div class="wrapperAuT fadeInDownAuT">
        <div class="formContent">
            <!-- Tabs Titles -->
            <h2 class="signTitle active">Sent </h2>
            <p>Your Password Sent to your Email Successfully</p>
            <!-- Go To Home -->
            <div>
                <a id="BkHome" class="underlineHover" href="../Home.php">Back To Home</a>
            </div>
        </div>
    </div>
</div>

</body>

</html>

