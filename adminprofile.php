<?php
session_start();
include ("connection.php"); 
$userprofile= $_SESSION['name']; 
$query= "SELECT * FROM admin_info where name='$userprofile'";
if ($userprofile==true) {
	# code...
}
else
{
	header('location:adminlogin.php');
}

                $data2=mysqli_query($conn,$query); 
                $result= mysqli_fetch_assoc($data2);
                         
               
                
?>
<!DOCTYPE HTML>

 <html>
	<head>
		<title>Admin Profile</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="admin/assets/css/main.css" />
	</head>
	<body class="subpage">


			<header id="header">
				<div class="inner">
					<a href="adminprofile.php" class="logo"><strong>ADMIN PROFILE</strong></a>
					<nav class="nav-Design" id="nav">
						<a href="adminhome.php">Home</a>
						<a href="adminprofile.php">Profile</a>
						
						<a href="notifications.php">Notifications</a>
						<a href="index.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				"</div>
			</header> 


			<section id="three" class="wrapper">
				<div class="inner">
					<header class="image round center">
                        <img class="profile" src='<?php echo $result['Image']; ?>' height='250' width= '200' hspace= '20'/>
						<p>Picture</p>
					</header>
				<p><strong>Admin ID: </strong><?php echo $result['Admin_Id']; ?></p>

         <p><strong>Name: </strong><?php echo $result['Name']; ?></p>
        <p><strong>Age: </strong> 23</p>
        <p><strong>Gender: </strong><?php echo $result['Gender']?></p>
         <p><strong>Birth Date: </strong><?php echo $result['DOB']?></p>
          <p><strong>Profession: </strong><?php echo $result['Profession']?></p>
           <p><strong>Address: </strong><?php echo $result['Address']?></p>
         <p><strong>Phone Number: </strong><?php echo $result['Phone_Number']?></p>
          <p><strong>Email: </strong><?php echo $result['Email']?></p>
      
			</section>

 </html> 
