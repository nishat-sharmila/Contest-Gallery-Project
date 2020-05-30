<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact Us</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo"><strong>Contact</strong></a>
					<nav class="nav-Design" id="nav">

						<a href="index.php">Home</a>
							<a href="Contestspublic.php">Contests</a>
						<a href="Winnerspublic.php">Winners</a>
					<a href="contactpublic.php">Contact Us</a>
          <a href="About Us.php">About Us</a>
						
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>
      <!-- Footer -->
        <footer id="footer">
          <div class="inner">

            <h3>Get in touch</h3>
              <?php 
              $headers= "From Contest Gallery";
              if(isset($_POST['sendmessage'])){
               if( mail($_POST['email'], $_POST['subject'], $_POST['message'], $headers)){
                echo "Mail sent";
               } else {
                echo "Failed";
               }
              }
              ?>

            <form role= "form" method="post" enctype="text/plain">

              <div class="field half first">
                <label for="name">Email</label>
                <input name="email" id="email" type="email" placeholder="Email">
              </div>

              <div class="field half first">
                <label for="name">Subject</label>
                <input name="subject" id="subject" type="text" placeholder="Subject">
              </div>


              <div class="field">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
              </div>

              <ul class="actions">
                <li><input name="sendmessage" value="Send Message" class="button alt" type="submit"></li>
              </ul>
            </form>
            <div class="">
              <h3>Soical Media</h3>
              <a href="https://www.facebook.com/" class="myButton">Facebook</a>
              <a href="https://twitter.com/" class="myButton2">Twitter</a>
            </div>

          </div>
        </footer>


    </body>
  </html>
