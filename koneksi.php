<?php

$server = "localhost";
$user = "root";
$pass =  "";
$database = "artikel_db";

$db= mysqli_connect($server, $user,$pass,$database);
if(!$db){
    die("Gagal Terhubung".mysqli_connect_error());
}
