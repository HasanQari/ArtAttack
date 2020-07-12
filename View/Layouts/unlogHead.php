<!-- ***** Header Area Start ***** -->
<header class="header_area animated">
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
                                <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link" href="#features">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                <li class="nav-item"><a class="nav-link" href="Auth/Login.php">Login</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Signin btn -->
            <div class="col-12 col-lg-2">
                <div class="sing-Up-button d-none d-lg-block">
                    <a href="Auth/Register.php">Sign Up Free</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Wellcome Area Start ***** -->
<section class="wellcome_area clearfix" id="home">
    <!--    Welcome thumb-->
    <div id="imgWelcome" class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
        <img src="../Resource/img/AA/hi.png" alt="AA">
    </div>
    <div class="container h-100 h-60">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md">
                <div class="wellcome-heading">
                    <h2>Art Attack</h2>
                    <h3>Art</h3>
                    <p>Everything You Need. To Start Creative Ideas Beautifully</p>
                    <div class="respBtnHeader">
                        <a class="pointer app-download-btn wow fadeInUp" id="startSup"
                           style="color: #fff;font-size: 30px;font-weight: bold;text-shadow: 2px 2px 5px red;"
                           onclick="signup()">Start Now!</a>
                        <p style="color: white"> You Have Account?
                            <a style="color: deepskyblue; font-weight: bold;font-size: 20px" onclick="login()">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Wellcome Area End ***** -->

<!-- ***** Special Area Start ***** -->
<section class="special-area bg-white section_padding_100" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="section-heading text-center">
                    <h2>Why Is It Special</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                    <div class="single-icon">
                        <i class="ti-mobile" aria-hidden="true"></i>
                    </div>
                    <h4>Easy to use</h4>
                    <p>We build pretty complex tools and this allows us to take designs and turn them into functional
                        quickly and easily</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                    <div class="single-icon">
                        <i class="ti-ruler-pencil" aria-hidden="true"></i>
                    </div>
                    <h4>Powerful Design</h4>
                    <p>Get the ability to design what you want in a distinctive and modern design that gives you
                        strength for your work</p>
                </div>
            </div>
            <!-- Single Special Area -->
            <div class="col-12 col-md-4">
                <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                    <div class="single-icon">
                        <i class="ti-settings" aria-hidden="true"></i>
                    </div>
                    <h4>Customizability</h4>
                    <p>Now you can create your design how you like because you have many options and ideas</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Special Description Area -->
    <div class="special_description_area mt-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="special_description_img">
                        <img src="../Resource/img/AA/spwel.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="special_description_content">
                        <h2 id="rm-Mb-txt">Best Propositions</h2>
                        <h2>for You!</h2>
                        <p>With so many creators who love to have their own luster, we have made it our responsibility
                            to provide them with fertile soil that inspires them to grow their ideas and creativity.
                            With our distinguished platform there is a lot of art for you, start your experience now and
                            show your wonderful talents in your first Design.</p>
                        <p class="txt-color-pink-big">Its Free for You Only!</p>
                        <div class="app-download-area">
                            <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                <!-- signUp -->
                                <a href="Auth/Register.php">
                                    <i class="fa fa-sign-in"></i>
                                    <p class="mb-0">Register Now for free</p>
                                </a>
                            </div>
                        </div>
                        <br>
                        <p>You have already Account? <a id="login-INunder" href="Auth/Login.php">Login</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Special Area End ***** -->

<!-- ***** Cool Line ***** -->
<div class="our-monthly-membership section_padding_50 "></div>

<!-- ***** Awesome Service Start ***** -->
<section class="awesome-feature-area bg-white section_padding_0_50 clearfix" id="features">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Heading Text -->
                <div class="section-heading text-center">
                    <h2>Awesome Services</h2>
                    <div class="line-shape"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Feature Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="fa fa-mortar-board" aria-hidden="true"></i>
                    <h5>The Educational Designs</h5>
                    <ul>
                        <li><a href="#pptx" class="ServList">PowerPoint Template</a></li>
                        <li><a href="#report" class="ServList">Report Template</a></li>
                        <li><a href="#cv" class="ServList">CV Template</a></li>
                    </ul>
                </div>
            </div>
            <!-- Single Feature Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <h5>The Occasions Designs</h5>
                    <ul>
                        <li><a href="#" class="ServList">Design Graduation and Success Parties</a></li>
                        <li><a href="#" class="ServList">Design Religious and Feasts Occasions</a></li>
                        <li><a href="#" class="ServList">Design Occasions and Weddings</a></li>
                    </ul>
                </div>
            </div>
            <!-- Single Feature Start -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="single-feature">
                    <i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <h5>The Commercial Designs</h5>
                    <ul>
                        <li><a href="../NoNeed/service3.html" class="ServList">Design Business Cards</a></li>
                        <li><a href="../NoNeed/service2.html" class="ServList">Design Advertisements</a></li>
                        <li><a href="../NoNeed/TesTservice1.html" class="ServList">Design Poster or Banner</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
    <br>
</section>
<!-- ***** Awesome Features End ***** -->
