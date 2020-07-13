<?php

if(isset($_POST['logout'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../../View/Home.php");
} else echo ".";
