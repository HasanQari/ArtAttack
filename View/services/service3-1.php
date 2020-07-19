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
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#wallpaper-modal">Wallpaper</button>
        <button type="button" class="btnTool pointer" data-toggle="modal" data-target="#template-modal">Template</button>
    </div>
</div>

<!-- this script is for the help window -->
<script>
    function helpUser(){
        alert("Hi user , to design whatever you want in our website " +
            "\n First : choose the wallpaper you want or the template. " +
            "\n Second : if you choose the template then you can modify it. " +
            "\n Third : if you choose the wallpaper then you can add shapes and text." +
            "\n Fourth : you can downloads the template or share it . ")
    }
</script>
<!-- Modal for Add picture (1) : -->
<div class="modal fade" id="picture-modal" tabindex="-1" role="dialog" aria-labelledby="picture-modal-label" aria-hidden="true">
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
                <input type="file" name="bg" accept="image/png, image/jpeg , image/jpg" size="10">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-picture">Select</button> <!-- Edit 12: changed id attribute and text of button -->
            </div>
        </div>
    </div>
</div>

<!-- Modal For Add Wallpaper (2) : -->

<div class="modal fade" id="wallpaper-modal" tabindex="-1" role="dialog" aria-labelledby="wallpaper-modal-label" aria-hidden="true">
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

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-image">Select</button>
            </div>
        </div>
    </div>
</div>


<!--Model template-->

<div class="modal fade" id="template-modal" tabindex="-1" role="dialog" aria-labelledby="template-modal-label" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="template-modal-label">Add Template</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close" >
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
                <button class="templates" type="button">
            <?php
            include "../../Model/DataBase/DBcon.php";
            $sql = "SELECT * FROM `service2-1`";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo $row['path_serv2'];
            ?>
                </button>

    <?php
    }
    }
    ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="save-shape">Select</button>
            </div>
        </div>

    </div>

</div>

<!-- Modal (3) -->

<div class="modal fade" id="shape-modal" tabindex="-1" role="dialog" aria-labelledby="shape-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="shape-modal-label">Add Shape</h5> <!-- Edit 23: added this line as title for modal -->
                <button type="button" class="close" data-dismiss="modal" aria-label="close" >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                    <!-- this is for styling the table shapes -->
                    <div class="col-md-2 col-sm-4 col-xs-6 text-center py-4">

            <!-- php code for the shape -->
            <?php

            include "../../Model/DataBase/DBcon.php";
            $sql = "SELECT * FROM `service2-1_shape`";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo $row['path_serv2_shape'];
                    ?>


                    <?php
                }
            }
            ?>
                </div>
            </div>
            <div class="modal-footer"> <!-- Edit 36: added modal footer with button to add shape to stage -->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
</div>

<!-- Modal for Add text (1) : -->
<div class="modal fade" id="text-modal" tabindex="-1" role="dialog" aria-labelledby="text-modal-label" aria-hidden="true"> <!-- Edit 37: added modal for text -->
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
                <input type="text" name="add-text" id="add-text" class="form-control" >
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
<!-- Page level custom scripts -->
<script src="../../Resource/Library/js/demo/chart-area-demo.js"></script>
<script src="../../Resource/Library/js/demo/chart-pie-demo.js"></script>
<script type="text/javascript" src="../../Resource/nicEdit.js"></script>
<script src="../../Resource/ArtAttack.js"></script>

<script>
    let elements = 0;
    //this variable to group all content that the user add , so that we can downloads the all designe
    $('#stage').html('<svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"></svg>');

    //Adding picture in stage when the user press "Add Photo" button:
    $('#save-picture').on('click', function () {
        // $('#stage').html('#stage').html() + '<image ' + ' href="' + $('#image-url').val() + '/>'); // Edit 42: used append instead of html
        $('#stage svg').html($('#stage svg').html() + '<g id="picture-' + ++elements + '"><image href="' + $('#image-url').val() + '"/></g>');
    });
    //});


    // Add Wallpaper Paper JS :

    let Wallpaper = {};

    $('input[type=image]').on('click', function () {
        Wallpaper.href = $(this).attr('src');
    });


    // Add wall paper on stage when user press "Select" button :
    $('#save-image').on('click', function () {
        // $('#exampleModal-wall').modal('hide'); // Edit 44: changed id to 'wallpaper-modal'
        $('#wallpaper-modal').modal('hide');

        // Adding image id after inserting image on stage to allow to make resizeable and draggable
        // $('#stage').html($('<div id="newImage" ><img style="display: inline-block"  src="' + Wallpaper.href + '" style="height: 80%; width: 80%; "/></div> '); // Edit 45: changed this line to add wallpaper as background image
        if($('#stage svg g#wallpaper').length > 0) {
            $('#stage svg g#wallpaper').html('<image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/>');
        } else {
            $('#stage svg').html('<g id="wallpaper"><image x="0" y="0" width="100%" href="' + Wallpaper.href + '"/></g>' + $('#stage svg').html());
        }
        // $("#newImage").resizable({handles: "all", // Edit 46: no need for drag and resize in wallpaper
        //     autoHide: true,
        //     ghost:true,
        //     aspectRatio:true,});
        // $("#newImage").draggable({cursor: "move"});
    });


    // this is for the shapes

    let shape = ''; //added variable to hold shape text
    // let allShapes = Array.from(document.getElementsByClassName("shapes")); // Edit 55: no need for this line
    // var stage = document.getElementById("stage"); // Edit 56: no need for this line
    // allShapes.forEach(function(shape){ // Edit 57: Changed this line to be using jQuery
    // shape.addEventListener("click",function (e) {
    //     console.log(e.target.localName);
    //     if (e.target.localName != "svg"){
    //         let instanceOfShape= e.target.parentNode.cloneNode(true);
    //         stage.appendChild(instanceOfShape);
    //     } else {
    //         let instanceOfShape= e.target.cloneNode(true);
    //         console.log(instanceOfShape);
    //         stage.appendChild(instanceOfShape);
    //     }
    // })
    $('.shapes').click(function() {
        shape = $(this).innerHTML;
    });


    $('#save-shape').click(function() { // Edit 58: changed how shapes are added using a save button
        $('#shape-modal').modal('hide');

        $('#stage svg').html($('#stage svg').html() + '<g id="' + $(shape)[0].tagName.toLowerCase() + '-' + ++elements + '">' + shape + '</g>');
    });


    // this is for the template written by doaa -->

    //Template Modal:
    // Get the modal
    //var modal = document.getElementById("myModal"); // Edit 59: no need for this line
    // Get the button that opens the modal
    //var btn = document.getElementById("myBtn"); // Edit 60: no need for both lines
    //var stage = document.getElementById("stage");
    // Get the <span> element that closes the modal
    //var span = document.getElementsByClassName("close")[0]; // Edit 61: no need for both lines
    //var svg1 = document.getElementById("svg");
    // When the user clicks on the button, open the modal
    // btn.onclick = function() { // Edit 62: no need for the 3 lines
    //     modal.style.display = "block";
    // }

    // When the user clicks on <span> (x), close the modal
    // span.onclick = function() { // Edit 63: no need for the 3 lines
    //     modal.style.display = "none";
    // }

    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) { // Edit 64: no need for the 4 lines
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // }

    let template = ''; // Edit 65: added template variable
    // svg1.onclick=function() { // Edit 66: changed to a different way to handle adding template to stage
    //     let stage = document.getElementById("stage");
    //     let copySvg= svg1.cloneNode(true);
    //     cpoy();
    //     stage.appendChild(copySvg);
    // }
    $('.templates').click(function() {
        template = $(this).children(':first-child')[0].outerHTML;
    });

    $('#save-template').click(function() { // Edit 67: changed how template is added using a save button
        $('#template-modal').modal('hide');
        $('#stage').html(template);
    })

    $('#save-text').click(function() { // Edit 68: changed how text is added using a save button
        $('#text-modal').modal('hide');
        $('#stage svg').html($('#stage svg').html() + '<g id="text-' + ++elements + '"><text x="0" y="20" fill="black" font-size="20">' + $('#add-text').val() + '</text></g>');
    });
</script>

<script>
    function cpoy() {
        // for edit the text in template
        $(document).ready(function () {
            var userText = document.createElement("INPUT");
            let stage = document.getElementById("stage");
            userText.setAttribute("id", "usertext");
            userText.setAttribute("type", "text");

            $("#test").on("click", function () {
                console.log("hello");
                userText.setAttribute("placeholder", "BUSINES");
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    let s = $("#usertext").innerHTML;
                    console.log(inputText.value)
                    $("#test").text(inputText.value)


                })

            });

            $("#test2").on("click", function () {

                userText.setAttribute("value", "START A");
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    let s = $("#usertext").innerHTML;
                    console.log(inputText.value)
                    $("#test2").text(inputText.value)
                })
            });

            $("#test3").on("click", function () {

                userText.setAttribute("placeholder", "lacina non semper! ");
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    let s = $("#usertext").innerHTML;
                    console.log(inputText.value)
                    $("#test3").text(inputText.value)
                })
            });

            $("#test4").on("click", function () {
                userText.setAttribute("placeholder", "lorem ipsum sit dolor amet...\n" +
                    "Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut " +
                    "laoreet dolore magna aliquam erat volutpat ");
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    let s = $("#usertext").innerHTML;
                    console.log(inputText.value)
                    $("#test4").text(inputText.value)
                })
            });
            $("#test5").on("click", function () {

                userText.setAttribute("placeholder", "lorem ipsum sit dolor amet..");
                stage.appendChild(userText);
                let inputText = document.getElementById("usertext");
                $("#usertext").change(function () {
                    let s = $("#usertext").innerHTML;
                    console.log(inputText.value)
                    $("#test5").text(inputText.value)
                })
            });


        });
    }
</script>








<!-- script for adding text -->
<script>
    function FunctionForUserText() {
        var userText = document.createElement("INPUT");
        let stage = document.getElementById("stage");

        userText.setAttribute("id", "userText");
        userText.setAttribute("type", "text");
        userText.setAttribute("placeholder", "write your text here");
        stage.appendChild(userText);
        $("#userText").draggable({cursor: "move"});

    }

    document.getElementById('btnText')
        .addEventListener("click", function (event) {
            FunctionForUserText();
        }, {once: true});

</script>




<!-- script for deleting the stage -->
<script>
    function deleteStage(){
        $("#stage").html("");

    }
</script>


</body>

</html>
