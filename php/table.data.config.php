<?php
$server = "localhost";
$admin = "root";
$adminpass = "therootisallpowerful";
$database = "StatTracker";

//Try to connect
$conn = mysqli_connect($server, $admin, $adminpass, $database);
//Send user back to index on fail, stop running php
if (!$conn) {
    header("Location: ../index.php?origin=con&err=conn_error");
    exit();
}
