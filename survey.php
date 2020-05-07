<?php
session_start();
if (!isset($_SESSION['token'])) {
	mysqli_close($conn);
	session_destroy();
	header("Location: index.php");
	exit();
}
require_once 'php/config.php';

$token = $_SESSION["token"];
$uid = mysqli_query($conn, "SELECT uid from Tokens WHERE token = \"$token\"")->fetch_assoc()['uid'];
$userdata = mysqli_query($conn, "SELECT * FROM Users WHERE userID = \"$uid\"")->fetch_assoc();

?>

<!DOCTYPE html>
<html lang-"en">
    <head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="css/sudo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="js/functions.js"></script>
    </head>
    <body>

	<!-- Start of Navbar -->
	<!-- Add to CSS to remove:
		#nav {
			display: none;
		}
	-->
	<ul id="nav">
		<li><a href="#">Survey</a></li>
		<li><a href="#">Group Rankings</a></li>
		<li><a href="#">Theme<span class="fas fa-caret-down"></span></a>
			<ul>
				<li><a href="#">0x1050</a></li>
				<li><a href="#">sudo</a></li>
				<li><a href="#">Adrian</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
			</ul>
		</li>
		<li><a href="#">About</a></li>
		<li><a href="#">Log Out</a></li>
	</ul>
	<!-- End of Navbar -->

	<!-- Start of Sidebar -->
	<!-- Add to CSS to remove:
		.sidebar {
			display: none;
		}
	-->
	<nav class="sidebar">
		<div class="text">StatTracker</div>
		<div class="user"><?php echo $userdata['username']; ?></div>
		<ul>
			<li><a href="#">Survey</a></li>
			<li><a href="#">Group Rankings</a></li>
			<li><a href="#">Theme<span class="fas fa-plus"></span></a>
				<ul>
					<li><a href="#">0x1050</a></li>
					<li><a href="#">sudo</a></li>
					<li><a href="#">Adrian</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
			</li>
			<li><a href="#">About</a></li>
			<li><a href="#">Log Out</a></li>
		</ul>
	</nav>
	<!-- End of Sidebar -->

	<div id="form">
	    &nbsp;
	</div>
    </body>
<?php
if (!isset($_SESSION['like']) && !isset($_SESSION['dlike'])) {
	echo "<script type='text/javascript'>
		loadFragment('forms/ff.scale.survey.html', document.getElementById('form'));
	  </script>";
}
else if (!isset($_SESSION['l1']) &&
      !isset($_SESSION['l2']) &&
      !isset($_SESSION['l3']) &&
      !isset($_SESSION['d1']) &&
      !isset($_SESSION['d2']) &&
      !isset($_SESSION['d3']) ) {
    echo "<script type='text/javascript'>
	    loadFragment('forms/categories.survey.html', document.getElementById('form'));
    </script>";
}
else  if (!isset($_SESSION['fform']) &&
      !isset($_SESSION['scale']) ) {
    echo "<script type='text/javascript'>
	    loadFragment('forms/ff.scale.survey.html', document.getElementById('form'));
    </script>";
}
?>
</html>
