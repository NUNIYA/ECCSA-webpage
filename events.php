<?php
include 'event_data.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>ECCSA</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>
							Business Climate Indicators Dashboard <br>
							BY <br>
							Ethiopian Business Climate Monitoring System <br>
						</h1>
						<p>Bridging the data gap on business climate for evidence –based advocacy and policy decision-making</p>
						<ul class="actions">
							<li><a href="#main" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<img src="images/logo.png" alt="" style="height: auto; width: 100px;">
					</header>

				<!-- Nav -->
				<nav id="nav">
					<ul class="links">
						<li class="active"><a href="index.html" class= "visible">Home</a></li>
						<li><a href="about.html"  class= "visible">About</a></li>
						<li><a href="indicators.html"  class= "visible">Indicators</a></li>
						<li><a href="accessdata.html" class= "visible">Access Data</a></li>
						<li><a href="tools.html" class= "visible">Tools</a></li>
						<li><a href="events.php" class= "visible">Events</a></li>
						<li><a href="termsofdatause.html" class= "visible">Term of Data Use</a></li>
						<li><a href="FAQ.html" class= "visible">FAQ</a></li>
					</ul>
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					</ul>
				</nav>
				

				<!-- Main -->
				<div id="main">
			<h2>
				Ethiopian Business Climate Monitoring System (EBCMS) Launch
			</h2>
			<p class="join-text text-center">
				Join us for the launch of a new era in Ethiopian business!
			</p>
			<p>
				We invite you to the official launch of the Ethiopian Business Climate Monitoring System (EBCMS). This groundbreaking initiative aims to enhance the business climate in Ethiopia by providing data-driven insights and policy recommendations.
			</p>
			<div class="container d-flex justify-content-center my-4">
				<div class="card shadow p-4" style="width: 800px;">
					<div class="card-body">
					<h3 class="card-title">Event Highlights:</h3>
					<ul class="custom-list">
						<li>Keynote Address by ------------</li>
						<li>In-depth Presentation on the EBCMS features and benefits</li>
						<li>Panel Discussion with industry experts</li>
						<li>Live Demonstration of the EBCMS platform</li>
						<li>Networking Opportunities with key stakeholders</li>
					</ul>
					</div>
				</div>
			</div>


			<div class="event-container">
				<?php foreach ($events as $event): ?>
					<div class="event-box">
						<h2>Upcoming Event</h2>
						<p><strong>Date:</strong> <?php echo $event['date']; ?></p>
						<p><strong>Time:</strong> <?php echo $event['time']; ?></p>
						<p><strong>Venue:</strong> <?php echo $event['venue']; ?></p>
						<p><a href="<?php echo $event['registrationLink']; ?>">Register Now</a></p>
					</div>
				<?php endforeach; ?>
			</div>

			<p>
				Don't miss this opportunity to be part of shaping the future of Ethiopia's business landscape.
			</p>


		</div>  
						  

				<!-- Footer -->
					<footer id="footer">
						<section>
							<form method="POST" action="Assets/php/form.php" id="form">
							  <div class="fields">
								<div class="field">
								  <label for="name">Name</label>
								  <input type="text" name="name" id="name" required />
								</div>
								<div class="field">
								  <label for="email">Email</label>
								  <input type="email" name="email" id="email" required />
								</div>
								<div class="field">
								  <label for="message">Message</label>
								  <textarea name="message" id="message" rows="3" required></textarea>
								</div>
							  </div>
							  <!-- Error and success messages -->
							  <div class="main-error error d-none" id="error-msg">Error occurred</div>
							  <div class="sent-message d-none" id="sent-msg">Your message has been sent. Thank you!</div>
							  <ul class="actions">
								<li><input type="submit" value="Send Message" /></li>
							  </ul>
							</form>
						  </section>
						  
						<section class="split contact">
							<section class="alt">
								<h3>Address</h3>
								<p>| MEXICO SQUARE |ADDIS ABABA | ETHIOPIA | </p>
							</section>
							<section>
								<h3>Phone</h3>
								<p><a href="#">+ 251 115 514 005 </a></p>
							</section>
							<section>
								<h3>Email</h3>
								<p><a href="#">INFO@ETHIOPIANCHAMBER.COM
								</a></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; </li><li>Designed by: <a href="https://dartdigitaltech.com/"> Dart Digital Technologies PLC</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	</body>
</html>