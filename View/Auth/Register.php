<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">

<head>
    <!-- Title -->
    <title>Art Attack | Register</title>

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
            margin: 10px 0 20px 0;
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

<div id="regsterHolder" class="popStyle">
    <div class="wrapperAuT fadeInDownAuT">
        <div class="formContent">
            <!-- Tabs Titles -->
            <h2 class="signTitle active">Sign Up </h2>

            <!-- Login Form -->
            <form method="post" action="../../Controller/auth/RegisterController.php">
                <input type="text" name="username" placeholder="Username" minlength="3"
                       class="fadeInAuT fst inputAuT">
                <input type="email" name="email" placeholder="Email"
                       class="fadeInAuT fst inputAuT">
                <input type="password" name="pwd" placeholder="Password" minlength="6"
                       class="fadeInAuT scd inputAuT">
                <input type="password" name="Cpwd" placeholder="Confirm Password" minlength="6"
                       class="fadeInAuT scd inputAuT">

                <input type="submit" name="Register-submit" value="Register"
                       class="fadeInAuT trd AuTsubmit">
            </form>

            <!-- Go To Home -->
            <div>
                <a id="BkHome" class="underlineHover" href="../Home.php">Back To Home</a>
            </div>
        </div>
    </div>
</div>


</body>

</html>