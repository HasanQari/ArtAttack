<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<head>
    <!-- Favicon -->
    <link rel="icon" href="">

    <!-- Core Stylesheet -->
    <link href="../../Resource/Library/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../../Resource/Library/css/responsive.css" rel="stylesheet">

    <!-- Home Style Sheet -->
    <link href="../../Resource/ArtAttack.css" rel="stylesheet" type="text/css">

    <!-- AA Responsive CSS -->
    <link href="../../Resource/Library/css/AAresponsive.css" rel="stylesheet">

    <!-- Home Script Sheet -->
    <script src="../../Resource/ArtAttack.js"></script>

    <!-- this is for icon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<!-- ***** Header Area Start ***** -->
<header class="header_areaMD animated">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12 col-lg-10">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- Logo -->
                        <a class="navbar-brand" href="#">Art<span id="AttackWord">Attack</span></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar"
                                aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span
                                class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="ca-navbar">
                            <ul class="navbar-nav ml-auto" id="nav">
                                <li class="nav-item"><a class="nav-link" href="../Home.php">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="../Profile.php">My Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="../MyDesign.php">My Design</a></li>
                                <li class="nav-item">
                                    <a class="nav-link">
                                        <form action="../Controller/auth/LogoutController.php" method="post">
                                            <input type="submit" name="logout" value="Logout" class="logoutStyleBtn">
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Customer Profile btn -->
            <div class="col-12 col-lg-2">
                <div class="Cus d-none d-lg-block">
                    <a style="color: white"><?php session_start(); echo "Hi ". $_SESSION['username']; ?></a>
                </div>
            </div>
        </div>
    </div>
</header><br><br>
<!-- ***** Header Area End ***** -->
