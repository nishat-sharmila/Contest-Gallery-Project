<?php require_once("include/DB.php"); ?>
<?php require_once("include/Sessions.php");?>
<?php require_once("include/functions.php");?>

<?php
if(isset($_POST["Submit"]))
{
	 $contestant=mysqli_real_escape_string($connection,$_POST["Contestant"]);
	 $register_for=mysqli_real_escape_string($connection,$_POST["register_for"]);
	 $phone_number=mysqli_real_escape_string($connection,$_POST["phone_number"]);
	 date_default_timezone_set("Asia/Dhaka");
	 $CurrentTime=time();
	 $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
	 $DateTime;
	 $Admin="Nishat sharmila";


	 if(empty($contestant))
	 {
	 $_SESSION["ErrorMassage"]="All fields must be filled out";
	 Redirect_to("contestant.php");
   }

		 else if(strlen($contestant)>99)
		 {
		$_SESSION["ErrorMassage"]="Too long name for contestant name";
		Redirect_to("contestant.php");
		}
else {
global  $connectingDB;
$Query="INSERT INTO contestants_list(contestant_name,register_for,phone,admin_name,date_time)
VALUES( '$contestant','$register_for','$phone_number','$Admin','$DateTime')";
$Execute=mysqli_query($connection,$Query);
if($Execute)
{
	$_SESSION["SuccessMassage"]="Contestant Added Successfully";
	Redirect_to("contestant.php");
}
else {
	$_SESSION["ErrorMassage"]="Contestant failed to Add";
	Redirect_to("contestant.php");
     }
    }
}


 ?>



<!DOCTYPE HTML>
<html>
	<head>
		<title>contestants List</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">


			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Contestants List</strong></a>
					<nav class="nav-Design" id="nav">
						<a href="adminhome.php">Home</a>
							<a href="admincontests.php">Contests</a>
						
						<a href="adminprofile.php">Profile</a>
						
						<a href="contestant.php">Contestant List</a>
						<a href="index.php">Logout</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
<div>
	<h3>Add New Contestant</h3>
	<div>
		<?php echo Massage();
		echo SuccessMassage()  ?>
	</div>
	<div class=" ">
		<form class="" action="contestant.php" method="post">
			<fieldset>
				<label for="contestant">Name: </label>
				<input type="name" name="Contestant" value="" id="contestantname" placeholder="name">
				<label for="contestant">Register For: </label>
				<input type="text"" name="register_for" value="" placeholder="register for" size="30%">

				<label for="contestant">Phone Number: </label>
				<input type="tel" name="phone_number" value="" placeholder="phone number">

			</fieldset>
			 <input type="Submit" name="Submit" value="Add New Contestant">

		</form>
	</div>
	<div>
		<table>
			<tr>
				<th>Contestant ID</th>
				<th>Contestant Name</th>
				<th>Register For</th>
				<th>Phone Number</th>
				<th>Added By</th>
				<th>DateTime</th>
			</tr>
<?php
global $connectingDB;
$viewQuery="SELECT * FROM contestants_list ORDER BY date_time desc";
$Execute=mysqli_query($connection,$viewQuery);
$srno=0;
while ($DataRows=mysqli_fetch_array($Execute))
 {
      $Id=$DataRows["id"];
			$contestantname=$DataRows["contestant_name"];
			$register_for=$DataRows["register_for"];
			$phone=$DataRows["phone"];
			$admin=$DataRows["admin_name"];
			$DateTime=$DataRows["date_time"];
			$srno++;


		 ?>
<tr>
   <td><?= $srno; ?></td>
	 <td><?= $contestantname; ?></td>
	 <td><?= $register_for; ?></td>
	 <td><?= $phone; ?></td>
	 <td><?= $admin; ?></td>
	 <td><?= $DateTime; ?></td>
</tr>
<?php } ?>
		</table>
	</div>
</div>


	</body>
</html>
