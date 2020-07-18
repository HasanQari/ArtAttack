<?php

$servername = "localhost";
$DBusername = "root";
$DBpassword = "1234";
$DBname = "ArtAttack";

$conn = mysqli_connect($servername, $DBusername, $DBpassword, $DBname);

if (!$conn){
    die("Conection Failed: ".mysqli_connect_error());
}

$con = new PDO("mysql:host=localhost;dbname=ArtAttack",'root','1234');