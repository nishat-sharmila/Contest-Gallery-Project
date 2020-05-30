<?php

require_once ('include/connection.php');
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Notifications</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="admin/assets/css/main.css" />
	</head>
	<body class="subpage">

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

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-left">
						<h2>Notifications</h2>
						
					</header>
                    
					
					
		<!-- Table -->
									<h3>Notification Table</h3>

									<div class="table-wrapper">
										<table>
											<thead>
												<tr>
													<th>Notification ID</th>
													<th>Username</th>
													<th>Description</th>
													
												</tr>
											</thead>
											
												<?php
                                                 $conn= mysqli_connect("localhost", "root", "", "311l");
                                                 if ($conn->connect_error) {
                                                 die("Connection failed: " . $conn->connect_error);
                                                  }

                                                  
                                                 $sql = "SELECT Notify_ID, Name, Description FROM notification";
                                                 $result = $conn->query($sql);
                                                 if ($result->num_rows > 0) {
                                                 // output data of each row
                                                 while($row = $result->fetch_assoc()) {
                                                 echo "<tr><td>" . $row["Notify_ID"]. "</td><td>" . $row["Name"] . "</td><td>"
                                                 . $row["Description"]. "</td></tr>";
                                                 }
                                                 echo "</table>";
                                                 } else { echo "0 results"; }
                                                 $conn->close();

												?>
											
											
										</table>
									</div>

									
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>