<?php

require_once ('include/connection.php');
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Sign UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<form action="Signup_contestant.php" method="POST">
			<header id="header">
				<div class="inner">

					<nav class="nav-Design" id="nav">

            <a href="index.php">Home</a>
							<a href="Contestspublic.php">Contests</a>
						<a href="Winnerspublic.php">Winners</a>
						<a href="contactpublic.php">Contact Us</a>
						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <footer id="footer">
        <div class="inner">

            <h3>Sign Up</h3>
            <h5>As Contestant</h5>


          <form name="insert" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

              <div class="field half first">
                <label for="name">Name</label>
                <input type="text" name="Name" value="">
              </div>
              <div class="field half first">
                <label>Gender</label>
                <div>
                  <input type="radio" name="Gender" value="Male" checked>
                  <label for="Male">Male</label>
                </div>

                <div>
                  <input type="radio" name="Gender" value="Female">
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

              </div>
              <div class="field half first">
                <label>Address</label>
                <input type="text" name="Address" value="">

              </div>
              <div class="field half first">
                <label>Password</label>
                <input type="password" name="password" value="" minlength="5" required>
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
								$Address= $_POST['Address'];
                $password= $_POST['password'];
                $Description= "has joined into Contest Gallery";
                

								$query= "INSERT INTO signup_contestant (Name, Gender, Email, DOB, Phone_Number,Address,password) VALUES('$Name','$Gender','$Email','$DOB','$Phone_Number','$Address','$password')";
                

								$data=mysqli_query($conn,$query);
                if ($data) {
                  $query2= "INSERT INTO notification (Name, Description) VALUES('$Name','$Description')"; 
                  $data2= mysqli_query($conn,$query2);          
                    }
								if($data2)
								{
								 echo "<script>alert('Data inserted successfully');</script>";
								}
								else
								{
								 echo "<script>alert('Data not inserted');</script>";
								}
                header('location:login.php');
								}

								?>
              </div>


          </footer>


    </body>
  </html>
