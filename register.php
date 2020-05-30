<?php

require_once ('include/connection.php');
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Registration</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<form action="register.php" method="POST">
			<header id="header">
				<div class="inner">

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
      <footer id="footer">
        <div class="inner">

            <h3>Registration</h3>


          <form name="insert" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

              <div class="field half first">
                <label for="name">Name</label>
                <input type="text" name="Name" value="">
              </div>
							<div class="field half first">
                <label>Gender</label>
                <div>
                  <input type="radio" id="Male" name="Gender"checked >
                  <label for="Male">Male</label>
                </div>

                <div>
                  <input type="radio" id="Female" name="Gender" checked>
                  <label for="Female">Female</label>
                </div>
                </div>

                <div class="field half first">
                  <label for="email">Email</label>
                  <input type="email" name="Email" value="">
                </div>
                <div class="field half first">
                  <label for="Date">Date of Birth</label>
                  <input type="Date" name="DOB" value="">
                </div>
                <div class="field half first">
                  <label>Phone Number</label>
                  <input type="tel" name="Phone_Number" value="">
                </div>
								<div class="field half first">
                  <label>Marital Status</label>
                  <div>
                    <input type="radio" name="Marital_Status" value="Single" checked>
                    <label for="single">Single</label>
                  </div>

                  <div>
                    <input type="radio" name="Marital_Status" value="Married" checked>
                    <label for="married">Married</label>
                  </div>

                </div>
                <div class="field half first">
                  <label>Profession</label>
                  <input type="text" name="Profession" value="">
                </div>
              </div>
              <div class="field half first">
                <label>Address</label>
                <input type="text" name="Address" value="">

              </div>
							<div class="field half first">
								<label>Register For</label>
								<input type="text" name="register_for" value="">
							</div>
              <div class="field half first">
                <label for="submit"></label>

                <input type="submit" name="submit" value="submit">
                </form>
								<?php
								if(isset($_POST['submit']))
								{
								$Name= $_POST ['Name'];
								$Gender= $_POST ['Gender'];
								$Email= $_POST ['Email'];
								$DOB= $_POST['DOB'];
								$Phone_Number= $_POST ['Phone_Number'];
								$Marital_Status= $_POST ['Marital_Status'];
								$Profession= $_POST ['Profession'];
								$register_for=$_POST['register_for'];
								$Address= $_POST['Address'];

								$query= "INSERT INTO register_form (Name, Gender, Email, DOB, Phone_Number, Marital_Status, Profession, register_for,Address) VALUES('$Name','$Gender','$Email','$DOB','$Phone_Number','$Marital_Status','$Profession','$register_for','$Address')";

								$data=mysqli_query($conn,$query);
								if($data)
								{
								 echo "<script>alert('Data inserted successfully');</script>";
								}
								else
								{
								 echo "<script>alert('Data not inserted');</script>";
								}
								}

								?>
              </div>


          </footer>


    </body>
  </html>
