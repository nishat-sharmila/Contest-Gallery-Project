<?php
session_start();
include ("include/connection.php");
$userprofile= $_SESSION['name'];
$query= "SELECT * FROM Signup_contestant where name='$userprofile'";
$Execute=mysqli_query($conn,$query);
if ($userprofile==true) {
	while ($DataRows=mysqli_fetch_array($Execute))
	 {
	      $result['Name']=$DataRows["Name"];
				$result['Address']=$DataRows["Address"];
				$result['Gender']=$DataRows["Gender"];
				$result['DOB']=$DataRows["DOB"];
				$result['Phone_Number']=$DataRows["Phone_Number"];
				$result['Email']=$DataRows["Email"];
			}
}
else
{
	header('location:login.php');
}

                $data2=mysqli_query($conn,$query);
                $result= mysqli_fetch_assoc($data2);

?>

	<!DOCTYPE HTML>

<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">


			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>PROFILE</strong></a>
					<nav class="nav-Design" id="nav">
						<a href="home.php">Home</a>
							<a href="Contests.php">Contests</a>
						<a href="Winners.php">Winners</a>
						<a href="Profile.php">Profile</a>
						<a href="contact.php">Contact Us</a>
						<a href="index.php">Logout</a>


					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>


			<section id="three" class="wrapper">
				<div class="inner">
					<header class="align-center">
						<img class="profile" src="https://image.flaticon.com/icons/svg/456/456141.svg" alt="">
						<p>Picture</p>
					</header>


        <p><strong>Name:</strong> <?php echo $result['Name']; ?></p>

        <p><strong>Gender</strong> <?php echo $result['Gender']; ?></p>
        <p><strong>Date Of Birth:</strong> <?php echo $result['DOB']; ?></p>
        <p><strong>Phone Number:</strong> <?php echo $result['Phone_Number']; ?></p>
        <p><strong>Email:</strong> <?php echo $result['Email']; ?></p>
				  <p><strong>Address:</strong> <?php echo $result['Address']; ?></p>
        <h3>Joined Contests</h3>
        <div class="">
          <ul>
            <li>chess Mania</li>
              <li>Real Shooter-2018</li>
          </ul>
        </div>


			</section>
		</body>

</html>
