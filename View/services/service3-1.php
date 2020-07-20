<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta charset="UTF-8">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Design Graduation and Success Parties</title>


    <!-- Core Stylesheet -->
    <link href="../../Resource/Library/css/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="../../Resource/Library/css/AAresponsive.css" rel="stylesheet">

    <!-- Home Style Sheet -->
    <link href="../../Resource/ArtAttack.css" rel="stylesheet" type="text/css">

    <!--CSS for Modal-->
    <link href="../../Resource/Library/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!--CSS jquery-->

    <link href="../../Resource/Library/js/jquery-ui-1.12.1/jquery-ui.css">
    <link href="../../Resource/Library/js/jquery-ui-1.12.1/jquery-ui.structure.css">
    <link href="../../Resource/Library/js/jquery-ui-1.12.1/jquery-ui.theme.css">

    <!-- Custom fonts for this template-->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../Resource/Library/css/sb-admin-2.css" rel="stylesheet">
    <link href="../../Resource/Library/css/style.css" rel="stylesheet">
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
                                <li class="nav-item"><a class="nav-link respBtnHeader" href="../profile.html">My
                                        Profile</a></li>
                                <li class="nav-item"><a class="nav-link" href="../HomeMember.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="../MyDesign.html">My Design</a></li>
                                <li class="nav-item"><a class="nav-link" href="../Home.html">Logout</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Customer Profile btn -->
            <div class="col-12 col-lg-2">
                <div class="Cus d-none d-lg-block">
                    <a href="../profile.html">Hi Customer</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
<section class="special-area bg-white section_padding_Container_resp" id="about">
    <div class="container">
        <div class="row" style="padding: 5%">
            <div class="col-12">
                <!-- Section Heading Area -->
                <div class="displayFlex">
                    <h2 class="section-head">Design Title</h2>
                    <input type="text" name="Projectitle" placeholder="Write project title here!"
                           class="inputField">
                    <button class="btn pointer" id="saveDesignBtn">Save</button>
                    <button class="btn pointer" id="deleteDesignBtn" onclick="deleteStage()">Delete</button>
                    <!--     <button class="btn pointer" id="helpDesignBtn"><i class="fa fa-question-circle-o"></i> </button> -->
                    <button class="btn pointer" id="HelpDesignBtn" onclick="helpUser()">Help</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="stage" class="card-body card shadow mb-4 DesignArea">
            </div>

        </div>
    </div>
</section>

<!-- ***** Cool Line ***** -->
<div class="toolBar section_padding_toolBar_resp">
    <div class="btnHolder">

        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#text-modal">Text</button>
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#picture-modal">Picture</button>
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#shape-modal">Shape</button>
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#wallpaper-modal">Wallpaper
        </button>
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#template-modal">Template
        </button>
    </div>
</div>


<!-- Modal for Add picture (1) : -->
<div class="modal fade" id="picture-modal" tabindex="-1" role="dialog" aria-labelledby="picture-modal-label"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="picture-modal-label">Add Picture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>Select Photo</label>
                <?php
                $target_dir = "uploads/"; // specifies the directory where the file is going to be placed
                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); //specifies the path of the file to be uploaded
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); //holds the file extension of the file (in lower case)
                // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
                ?>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    Select image to upload:
                    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/png, image/jpeg , image/jpg" size="10">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit"  name="submit" class="btn btn-primary" id="save-picture">Select</button>

            </div>
        </div>
    </div>
</div>

<!-- Modal For Add Wallpaper (2) : -->

<div class="modal fade" id="wallpaper-modal" tabindex="-1" role="dialog" aria-labelledby="wallpaper-modal-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="wallpaper-modal-label">Add Wallpaper</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="image" id="wall1" class="img-fluid" src="../../Resource/img/WallPaper/wall1.jpeg"/>
                <input type="image" id="wall2" class="img-fluid" src="../../Resource/img/WallPaper/wall2.jpeg"/>
                <input type="image" id="wall3" class="img-fluid" src="../../Resource/img/WallPaper/wall3.jpeg"/>
                <input type="image" id="wall4" class="img-fluid" src="../../Resource/img/WallPaper/wall4.jpeg"/>
                <input type="image" id="wall5" class="img-fluid" src="../../Resource/img/WallPaper/wall5.jpeg"/>
                <input type="image" id="wall6" class="img-fluid" src="../../Resource/img/WallPaper/wall6.jpeg"/>
                <input type="image" id="wall7" class="img-fluid" src="../../Resource/img/WallPaper/wall7.jpg"/>
                <input type="image" id="wall8" class="img-fluid" src="../../Resource/img/WallPaper/wall8.jpg"/>
                <input type="image" id="wall9" class="img-fluid" src="../../Resource/img/WallPaper/wall9.jpg"/>
                <input type="image" id="wall10" class="img-fluid" src="../../Resource/img/WallPaper/wall10.jpg"/>
                <input type="image" id="wall11" class="img-fluid" src="../../Resource/img/WallPaper/wall11.jpg"/>
                <input type="image" id="wall12" class="img-fluid" src="../../Resource/img/WallPaper/wall12.jpg"/>
                <input type="image" id="wall13" class="img-fluid" src="../../Resource/img/WallPaper/wall13.jpg"/>
                <input type="image" id="wall14" class="img-fluid" src="../../Resource/img/WallPaper/wall14.jpg"/>
                <input type="image" id="wall15" class="img-fluid" src="../../Resource/img/WallPaper/wall15.jpg"/>
                <input type="image" id="wall16" class="img-fluid" src="../../Resource/img/WallPaper/wall16.jpg"/>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-image">Select</button>
            </div>
        </div>
    </div>
</div>


<!--Model template-->

<div class="modal fade" id="template-modal" tabindex="-1" role="dialog" aria-labelledby="template-modal-label"
     aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="template-modal-label">Add Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <style>
                    button.templates {
                        border: none;
                        background-color: transparent;
                    }
                </style>

                <?php
                include "../../Model/DataBase/DBcon.php";
                $sql = "SELECT * FROM `service2-1`";
                $result = mysqli_query($conn, $sql);
                $counter = 0;
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='templateClass' >" . $row['path_serv2'] . "</div>";
                        ?>

                        <?php
                    }
                }

                ?>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>

    </div>

</div>

<!-- Modal (3) for shapes -->

<div class="modal fade" id="shape-modal" tabindex="-1" role="dialog" aria-labelledby="shape-modal-label"
     aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shape-modal-label">Add Shape</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <style>
                    button.shapes {
                        border: none;
                        background-color: transparent;
                    }
                </style>

                <!-- php code for the shape -->
                <?php

                include "../../Model/DataBase/DBcon.php";
                $sql = "SELECT * FROM `service2-1_shape`";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>

                        <?php
                        echo "<div class='shapesClass' id='shape$counter'>" . $row['path_serv2_shape'] . "</div>";
                        ?>


                        <?php
                    }
                }
                ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

            </div>
        </div>

    </div>
</div>
</div>

<!-- Modal for Add text (1) : -->
<div class="modal fade" id="text-modal" tabindex="-1" role="dialog" aria-labelledby="text-modal-label"
     aria-hidden="true"> <!-- Edit 37: added modal for text -->
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="text-modal-label">Add Text</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label>Text</label>
                <input type="text" name="add-text" id="add-text" class="form-control">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-text">Select</button>
            </div>
        </div>
    </div>
</div>

<!-- ***** Footer Area Start ***** -->

<!-- Jquery-2.2.4 JS -->
<script src="../../Resource/Library/js/jquery-2.2.4.min.js"></script>
<script src="../../Resource/Library/js/jquery-ui-1.12.1/jquery-ui.js"></script>
<!--<script src="../../Resource/Library/js/vendor/jquery/jquery.js"></script>-->

<!-- Popper js -->
<script src="../../Resource/Library/js/popper.min.js"></script>
<!-- Bootstrap-4 Beta JS -->
<script src="../../Resource/Library/js/bootstrap.min.js"></script>
<!-- All Plugins JS -->
<script src="../../Resource/Library/js/plugins.js"></script>
<!-- Slick Slider Js-->
<script src="../../Resource/Library/js/slick.min.js"></script>
<!-- Footer Reveal JS -->
<script src="../../Resource/Library/js/footer-reveal.min.js"></script>
<!-- Active JS -->
<script src="../../Resource/Library/js/active.js"></script>
<!---->

<script src="https://cdn.jsdelivr.net/npm/interactjs/dist/interact.min.js"></script>
<!-- Page level custom scripts
<script src="../../Resource/Library/js/demo/chart-area-demo.js"></script>
<script src="../../Resource/Library/js/demo/chart-pie-demo.js"></script>
-->
<script type="text/javascript" src="../../Resource/nicEdit.js"></script>
<script type="text/javascript" src="../../Resource/ArtAttack.js"></script>





</body>

</html>
