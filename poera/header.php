<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>static collapsible sidebar</title>
	<meta  name="viewport" content="width=device-width , intial-scale=1">

	<!---- linking bootstrap and custom css files ---->
	<link rel="stylesheet" type="text/css"  href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/dashboard.css" />

	<!---bootstrap js-------->

	<script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

</head>
<body>
<div class="wrapper">

	<!---sidebar---->
	<nav id="sidebar">
		<!----sidebar-header---->
		<div class="sidebar-header">
			<h3><?php echo "name of user "?></h3>
			<strong>NU</strong>

			<!----profile pic of user---->
			<div class="profilePic">

				<img class="img-responsive img-circle" src="img/profile2.jpg" alt="user profile image" >
			</div>

			<!----view profile pic button------>
			<div class="profileBtn">
				<a href="viewprofile.php" class="btn btn-danger btn-block visible-lg">Profile</a>
			</div>
			<!----profile button end---->
		</div>

		<!---navigation links---->
		<ul class="list-unstyled components">
			<li class="active"><a href="#"><i class="glyphicon glyphicon-home"></i>Feeds</a></li>
			<li><a href="#"><i class="glyphicon glyphicon-briefcase"></i>Messages</a></li>

			<li><a href="#homesubmenu" data-toggle="collapse" aria-expand="false">
				<i class="glyphicon glyphicon-duplicate"></i>Compose</a>
				<!---dropdown sub menu ---->
				<ul class="collapse list-unstyled " id="homesubmenu">
					<li><a href="#">page1</a></li>
					<li><a href="#">page2</a></li>
					<li><a href="#">page3</a></li>
				</ul>
			</li>

			<li><a href="#"><i class="glyphicon glyphicon-link"></i>   Stats</a></li>
			<li><a href="#"><i class="glyphicon glyphicon-send"></i>Logout</a></li>
		</ul>
	</nav>
	<!----sidebar end---->