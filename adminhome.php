<?php 
session_start();
error_reporting(0);
include ("connection.php");
?>

<!DOCTYPE HTML>

<html>
	<head>

		<title>Admin home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="admin/assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					
					<nav id="nav">
						<a href="adminhome.php">Home</a>
						<a href="adminprofile.php">Profile</a>
						
						<a href="notifications.php">Notifications</a>
					    <a href="index.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Welcome to Contest Gallery</h1>
						<h3>Welcome to your place, Admin!</h3>
					</header>

					<div class="flex ">

						<div>
							<span class="icon fa-car"></span>
							<a href="contestant.php"><h3>Users</h3>
							<p>See the users</p>
						</div>

						<div>
							<span class="icon fa-camera"></span>
							<a href="admincontests.php"><h3>Contests</h3>
							<p>See the contests</p>
						</div>
                        
					</div>

					<footer>
						
					</footer>
				</div>
			</section>


	
			<footer id="footer">
				<div class="inner">

					<h3>Get in touch</h3>

					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email"  placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>
					<?php
					if(isset($_POST['submit']))
					{
						$name= $_POST['name'];
						$mailto= $_POST['email'];
						$subject= "Response from Website";
						$message= $_POST['message'];
						$headers= "From: contest_gallery@gamehouse.org";
						$txt= "You have recieved an email from ".$name.".\n\n".$message;
						if (mail($mailto, $subject, $txt, $headers))
						{
							echo "<script>alert('The mail sent successfully');</script>";
							header('location:adminhome.php?mailsend');
						}
						else 
						{
							echo "<script>alert('The mail isn't sent');</script>";
							header('location:adminhome.php');
						}

					}
					?>
                     
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>