<?php
require "Layouts/header.php";
?>

<head>
    <!-- Title -->
    <title>Art Attack | Profile</title>

    <!-- Core Stylesheet -->
    <link href="../Resource/Library/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../Resource/Library/css/responsive.css" rel="stylesheet">

    <!-- Home Style Sheet -->
    <link href="../Resource/ArtAttack.css" rel="stylesheet" type="text/css">

    <!-- AA Responsive CSS -->
    <link href="../Resource/Library/css/AAresponsive.css" rel="stylesheet">

</head>

<main>
<!-- Preloader Start -->
<div id="preloader">
    <div class="colorlib-load"></div>
</div>

<section class="special-area bg-white section_padding_100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="text-center">
                    <p class="PFsectionTitle">Profile</p>
                    <div class="line-shape"></div>
                </div>
            </div>

            <div class="container emp-profile">
                <form method="post">
                    <div class="row" style="margin-bottom: -5%;">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog"
                                     alt=""/>
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5>
                                    Nood M
                                </h5>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                           role="tab" aria-controls="home" aria-selected="true">My Profile</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" class="profile-edit-btn profBtn1" name="btnAddMore"
                                   value="Edit Profile"/>
                            <input type="submit" class="profile-edit-btn profBtn2" name="btnAddMore" value="Save"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                     aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>User Name</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Nood M</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>user-id</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>42345567</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>s437001919@st.uqu.edu.sa</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>**********</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Confirm Password</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>**********</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ***** Cool Line ***** -->
<div class="our-monthly-membership section_padding_50 "></div>

<?php
require "Layouts/footer.php";
?>

