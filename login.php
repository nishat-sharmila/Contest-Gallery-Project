
<?php
session_start();


require_once ('include/connection.php');
 ?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Log In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>


		<!-- Header -->

			<header id="header">
				<div class="inner">

					<nav class="nav-Design" id="nav">
             <a href="adminlogin.php">Admin-Login</a>
            <a href="Signup_contestant.php">Sign up</a>
            <a href="index.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <footer id="footer">
        <div class="inner">
<h1>Welcome To contest Gallery</h1>
            <h3>Please Log In</h3>
            <h5>As Contestant</h5>
          <?php  if($_SESSION['Error']==1)
            {
              echo "Login Failed";
            }?>
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


                $query2= "SELECT * FROM Signup_contestant where name='$Name' && password='$Password'";

                $data2= mysqli_query($conn,$query2);
                $total= mysqli_num_rows ($data2);

              echo $total;

              if($total==1)
              {
                $_SESSION['name']= $Name;
                $_SESSION['Error']= 0;
              header('location:home.php');
              }
              else
              {
               echo "<script>alert('Login failed');</script>";
               $_SESSION['Error']= 1;
               header ('location:login.php');
             }
                }
                ?>

              </div>


          </footer>


    </body>
  </html>
