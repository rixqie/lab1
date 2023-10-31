<html>
	<head>
		<title>Biodata</title>
		<link rel="stylesheet" href="style.css">
		<meta name="viewport" content="width = device-width, initial-scale=1">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,400;1,200&display=swap" rel="stylesheet">
	</head>
	<body>
		<div class="scroll-up">
			<img src="menu.png" id="menu">
		</div>
		<section id="banner">
			<div class="banner-text">
				<h1>My Biodata!</h1>
				<p>Here are few facts about me :D</p>
			</div>
		</section>
		
		<div id="sideNav">
			<nav>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div id="menuBtn">
			<img src="menu.png" id="menu">
		</div>
		<section id="about">
			<div class="title-text">
				<p>About</p>
				<h1>Who am I??</h1>
				<h3>"You're lucky enough to be different, never change."</h3>
			</div>
			<div class="about-box">
	
					<?php
					session_start();
					$con = mysqli_connect("localhost", "root", "", "lab1");

					// Check the connection
					if (!$con) {
					    die("Connection failed: " . mysqli_connect_error());
					}

					$status = "";

					$result = mysqli_query($con, "SELECT * FROM personal") or die(mysqli_error($con));

					echo "<div class='data-desc'>"; 
					while ($data = mysqli_fetch_assoc($result)) {
					    
					    echo "<h1>{$data['name']}</h1></br></br>";
					    echo "<p>Date of birth: {$data['bday']}</p>";
					    echo "<p>Religion: {$data['religion']}</p>";
					    echo "<p>Race: {$data['race']}</p>";
					    echo "<p>Homecity: {$data['homecity']}</p>";
					    echo "<p>Current Residential: {$data['current_res']}</p>";
					    echo "<p>E-mail: {$data['email']}</p>";
					    echo "<p>Phone Number: {$data['phone']}</p></br></br>";
					}

					$result = mysqli_query($con, "SELECT * FROM edu") or die(mysqli_error($con));

					while ($data = mysqli_fetch_assoc($result)) {
					    echo "<h1>Education</h1></br></br>";
					    echo "<p>•Primary School - {$data['prim']}</p>";
					    echo "<p>•High School - {$data['high']}</p>";
					    echo "<p>•Diploma - {$data['dip']}</p>";
					    echo "<p>•Degree - {$data['degree']}</p>";
					}
					// Close the database connection

							?>
				</div>
				<div class="image">
					<?php

					$con = mysqli_connect("localhost", "root", "", "lab1");

					// Check the connection
					if (!$con) {
					    die("Connection failed: " . mysqli_connect_error());
					}

					$status = "";

					$result = mysqli_query($con, "SELECT * FROM personal") or die(mysqli_error($con));

					echo "<div class='data-desc'>"; 
					while ($data = mysqli_fetch_assoc($result)) {
					    
				
					    echo '<img class="about-me-img" src="data:image/jpeg;base64,'.base64_encode($data['picture']).'" alt="picture" style="width:60%; "/>';
					   
					} ?>
				</div>
			</div>
		</section>
		<section id="contact">
			<div class="title-text">
				<p>Contact</p>
				<h1>Get in touch?</h1>
			</div>
			<div class="contact-row">
				<div class="contact-col">
				<div class="user">
					<div class="user-info">
						<h4>Instagram</h4>
						<a href="https://www.instagram.com/rixqie/"><img src="insta.png" style="width:250px; length:100px"></a>
						<small>@rixqie</small>
					</div>
				</div>
				</div>
				<div class="contact-col">
				<div class="user">
					<div class="user-info">
						<h4>Twitter</h4>
						<a href="https://twitter.com/scarymatcha"><img src="twitter.png" style="width:250px; length:100px"></a>
						<small>@rixqie15</small>
					</div>
				</div>
				</div>
				<div class="contact-col">
				<div class="user">
					<div class="user-info">
						<h4>Facebook</h4>
						<a href="https://www.facebook.com/rixqie"><img src="fb.png" style="width:250px; length:100px"></a>
						<small>Nazrul Rifqie</small>
					</div>
				</div>
				</div>
			</div>
		</section>
		<script>
			var menuBtn = document.getElementById("menuBtn");
			var sideNav = document.getElementById("sideNav");
			var menu = document.getElementById("menu");
			
			sideNav.style.right = "-250px";
			
			menuBtn.onclick = function(){
				if(sideNav.style.right == "-250px"){
					sideNav.style.right = "0";
					menu.src = "close.png";
				}
				else{
					sideNav.style.right = "-250px";
					menu.src = "menu.png";
				}
			}
		</script>
	</body>
</html>