<?php

$servername = "localhost";
$DBusername = "root";
$DBpassword = "0000";
$DBname = "ArtAttack";

$conn = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

if (!$conn){
    die("Conection Failed: ".mysqli_connect_error());
}