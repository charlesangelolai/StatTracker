<?php
session_start();
if(!isset($_SESSION['token'])) {
    mysqli_close($conn);
    session_destroy();
    header("Location: ../index.php?origin=ffp&err=no_credz");
    exit();
}
require_once 'table.data.config.php';
$_SESSION['fform'] = $_POST['fform'];
$_SESSION['scale'] = $_POST['scale'];

$liked = $_SESSION['like'];
$dliked = $_SESSION['dlike'];
$l1 = $_SESSION['l1'];
$l2 = $_SESSION['l2'];
$l3 = $_SESSION['l3'];
$d1 = $_SESSION['d1'];
$d2 = $_SESSION['d2'];
$d3 = $_SESSION['d3'];
$fform = $_SESSION['fform'];
$scale = $_SESSION['scale'];

$sql = "INSERT INTO G1(liked, disliked," . $liked . "1, " . $liked . "2, " . $liked . "3, " . $dliked . "1, " . $dliked . "2, " . $dliked . "3, fform, scale) VALUES($liked, $dliked, $l1, $l2, $l3, $d1, $d2, $d3, $fform, $scale)";

mysqli_query($conn, $sql);
mysqli_close($conn);
$_SESSION['finishline'] = true;
header("Location: ../survey.php");
exit();
?>
