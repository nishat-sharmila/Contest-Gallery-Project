
<?php

require_once ('connection.php');
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Sign up</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="admin/assets/css/main.css" />
	</head>
	<body>


		<!-- Header -->

			<header id="header">
				<div class="inner">

					<nav class="nav-Design" id="nav">

            <a href="index.php">Login</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <footer id="footer">
        <div class="inner">

            <h3>Sign up</h3>
            <h5>As Admin</h5>

            <form name="insert" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">

              <div class="field half first">
                <label for="name">Name</label>
                <input type="text" name="Name" id="Name" value="" required>
              </div>
              <div class="field half first">
                <label>Gender</label>
                <div>
                  <input type="radio" name="Gender" value="Male" checked >
                  <label for="Male">Male</label>
                </div>

                <div>
                  <input type="radio" name="Gender" value="Female">
                  <label for="Female">Female</label>
                </div>
                </div>
                 <div class="field half first">
                  <label for="email">Email</label>
                  <input type="email" name="Email" value="" required>
                </div>
                <div class="field half first">
                  <label for="Date">Date of Birth</label>
                  <input type="Date" name="DOB" placeholder="YYYY-MM-DD" value="" required>
                </div>
                <div class="field half first">
                  <label>Phone Number</label>
                  <input type="tel" name="Phone_Number" value="" required>
                </div>
                <div class="field half first">
                  <label>Marital Status</label>
                  <div>
                    <input type="radio" name="Marital_Status" value="Single" checked>
                    <label for="single">Single</label>
                  </div>

                  <div>
                    <input type="radio" name="Marital_Status" value="Married">
                    <label for="married">Married</label>
                  </div>

                </div>
                <div class="field half first">
                  <label>Profession</label>
                  <input type="text" name="Profession" value="" required>
                </div>
              </div>
              <div class="field half first">
                <label>Address</label>
                <input type="text" name="Address" value="" required>
              </div>
               <div class="field half first">
                  <label>Password</label>
                  <input type="password" name="password" value="" minlength="5" required>
                </div>
              <div class="field half first">
                <label for="submit"></label>

                <input type="submit" name="submit" value="Submit"/>
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
                $Address= $_POST ['Address'];
                $Password= $_POST ['password'];

                $query= "INSERT INTO admin_info (Name, Gender,Email, DOB, Phone_Number, Marital_Status, Profession, Address, Password) VALUES('$Name','$Gender','$Email','$DOB','$Phone_Number','$Marital_Status','$Profession','$Address', '$Password')";

                $data=mysqli_query($conn,$query); 
                if($data==1)
                {
                 echo "<script>alert('Data inserted successfully');</script>";
                 header('location:adminlogin.php');
                }
                else
                {
                 echo "<script>alert('Data not inserted');</script>";
                 header('location:adminsignup.php');
                }
                 
               }
               

                
                ?>
              </div>


          </footer>


    </body>
  </html>
