
<?php
session_start();
require_once ('connection.php');
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="admin/assets/css/main.css" />
	</head>
	<body>


		<!-- Header -->

			<header id="header">
				<div class="inner">

					<nav class="nav-Design" id="nav">

            <a href="adminsignup.php">Sign up</a>
            <a href="index.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <footer id="footer">
        <div class="inner">

            <h3>Please Log In</h3>
            <h5>As Admin</h5>

            <form name="insert" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
               
               <div class="field half first">
                <label for="name">Name</label>
                <input type="text" name="Name" id="Name" value="" required>
              </div>
               <div class="field half first">
                  <label for="email">Email</label>
                  <input type="email" name="Email" value="" required>
                </div>
                <div class="field half first">
                  <label>Password</label>
                  <input type="password" name="password" value="" minlength="5" required>
                </div>
              
              <div class="field half first">
                <label for="submit"></label>

                <input type="submit" name="submit" value="Log In"/>
                </form>

                <?php
                if(isset($_POST['submit']))
                {

                $Name= $_POST ['Name'];
                $Email= $_POST ['Email'];
                $Password= $_POST ['password'];
                

                $query2= "SELECT * FROM admin_info where name='$Name' && email='$Email' && password= '$Password'";

                $data2= mysqli_query($conn,$query2); 
                $total= mysqli_num_rows ($data2);

                if($total==1)
                {
                	$_SESSION['name']= $Name;
                header('location:adminprofile.php');
                }
                else
                {
                 echo "<script>alert('Login failed');</script>";
                 header ('location:adminlogin.php');
                }
               }
                
                ?>
              </div>


          </footer>


    </body>
  </html>
