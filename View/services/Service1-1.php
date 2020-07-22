<?php
require "../Layouts/ServiceHeader.php";
?>

<head>
    <!-- Title -->
    <title>Art Attack | PowerPoint Template</title>

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

<main>

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>PowerPoint Template</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
            <!--row1-->
            <div class="row">
                <?php
                    include "../../Model/DataBase/DBcon.php";
                    $query = $con->prepare("SELECT * FROM SERV_TEM_EDU WHERE file_type='pp'");
                    $query->execute();
                    while ($row = $query->fetch()){
                ?>

                            <div class="col-12 col-md-4">
                                <div class="single-holder text-center wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="single-icon sImg single-SSS">
                                        <img src="../../Resource/img/Services1/powerpoint/<?php echo $row['file_name'] ?>.png">
                                        <div class="S-hover-effects">
                                            <div class="S-social-icon">
                                                <a href="<?php echo $row['file_path'] ?>" download target="_blank" title="Download">
                                                    <i class="fa fa-download" aria-hidden="true" title="Download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Cool Line ***** -->
    <div class="our-monthly-membership section_padding_50 "></div>

    <?php
    require "../Layouts/footer.php";
    ?>
