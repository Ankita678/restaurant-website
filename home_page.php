<?php
	session_start();
	
?>


<!DOCTYPE html>
<html>
<head>
	<!--<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,700&display=swap" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<style>
		header{ background-color:#FFD700;margin:-10px;}
			#i01{margin:20px 20px 20px 50px;}
			h1{ font-style:italic; font-size:40px; position:absolute; top:30px; left:35%; }
			ul{list-style-type:none; position: absolute; top: 120px; left: 25%; }
				li{display:inline; text-transform: uppercase; font-weight:bold; color:#000; padding-left:50px;font-size:25px;}
					.l01:link, .l01:visited {color:#000; text-decoration:none;}
					.l01:hover, .l01:active {color:#fff; text-decoration: none;}
			#l02{position:absolute;top:10px;right:1%;}
				button{border:none;color:#FFD700;text-decoration:underline;text-transform:uppercase;background-color:#000; padding: 5px 10px; cursor: pointer;}
			#p01{position: absolute;float: right;top: 100px;right: 10%;color: #000;}
			.i02{position: absolute;float: right;top: 100px;right:80px;padding-right:3px;}
			.i03{position: absolute;float: right;top: 100px;right:25px;}
			
		#d1{background-color:#000;margin:10px -10px;}
			.i05{margin-left:50px; margin-top:150px; width:150px; height:100px;position:absolute;}
			.i04{ width:50%; height:400px;margin-left:340px;}
			.i06{margin-left:100px; margin-top:150px;width:150px; height:100px;position:absolute;}
		
		#d2{font-family: 'EB Garamond', serif; color:#000; padding:20px;}
			.abt{font-size:30px;}
			.p2{font-size:20px;}
			.a01{float:right;}
			.a02{float:bottom-right;}
			.i07{width:200px;height:180px; margin-right:40px;margin-left:50px;}
			
		#d3{ margin-left:300px;}
			.i08{width:100px;height:100px; margin-right:40px;margin-left:50px;}
			
		#d4{margin: 20px -10px;}
			
			
		#foot{background-color:#FFD700;margin:-22px -10px -10px -10px ;}
			#i09{ margin-left: 42%; margin-top:20px;}
			#p02{ text-align:center;color:#000;font-weight:normal; padding:20px;}
			
	
	</style>
</head>
<body>
	<header>
		<a href="home_page.php"><img id="i01" src="Images/my_logo.jpg" alt="Food logo" width="200px" height="150px"></a>
		<h1>COZY KITCHEN  taste for life..</h2>
		<ul>
			<li> <a class="l01" href="home_page.php">home</li>
			<li><a class="l01" href="about.html">About</li>
			<li><a class="l01"href="menu.php">Menu</li>
			<li><a class="l01"href="contact.html">Contact Us</li>
		</ul>
		<a id="l02" href="login.php"><button>Login</button></a>
		<p id="p01">Order Online,at</p>
		<a class="i02" href="home_page.php"><img src="Images/zomato.png" width="50px" height="50px"></a>
		<a class="i03" href="home_page.php"><img src="Images/swiggy.jpg" width="50px" height="50px"></a>
	</header>
	
	<div id="d1">
		<img class="i05" src="Images/22821603.jpg" >
		<img class="i04" src="Images/bbb.jpg" >
		<img class="i06" src="Images/22821603.jpg" >
	</div>
	
	<div id="d2">
		<h2 class="abt">ABOUT US</h2>
		<p class="p2">After making a mark in the South Indian and Chinese food segment, S. Gurmeet Singh began his foray into the arena of vegetarian food on the 1st of April, 1984, with the grand launch of Cozy Kitchen in Mohali. Soon, the aroma of its special dishes spread to the surrounding areas and the eatery became a popular rendezvous for patrons who relished pure vegetarian dishes. Today, Cozy Kitchen has a seating capacity of 130 persons, where the guests enjoy an air-conditioned environment and aesthetically pleasing interiors. All our dishes are prepared in an authentic style by experienced and expert chefs who have mastered the art of traditional flavours. The skillful staff here delivers excellent and Impeccable customer service. Sprinkled with tradition, the delicious dishes are served with great pride. </p>
		<a class="a01" href="about.html"><button>Read more...</button><a>
	
		<h2 class="abt">OUR MENU</h2>
		<a href="menu.php"><img class="i07" src="Images/break.png"></a>
		<a href="menu.php"><img class="i07" src="Images/lunch.png"></a>
		<a href="menu.php"><img class="i07" src="Images/dinner.png"></a>
		<a href="menu.php"><img class="i07" src="Images/dessert.png"></a>
		<a class="a02" href="menu.php"><button>Read more...</button></a>
		<h2 class="abt">OUR DELIVERY PARTNERS</h2>
	</div>
	<div id="d3">
		<a href="home_page.php"><img class="i08" src="Images/zomato.png"></a>
		<a href="home_page.php"><img class="i08" src="Images/swiggy.jpg"></a>
		<a href="home_page.php"><img class="i08" src="Images/uber.jpg"></a>
	</div>
	<div id="d4">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3429.784292426867!2d76.77648931556905!3d30.724463981640074!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feda96aaaaaab%3A0x31ae6bd4ccee1bae!2sBaba+Dairy!5e0!3m2!1sen!2sin!4v1562186262239!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<footer id="foot">
		<a href=""><img id="i09" src="Images/my_logo.jpg" alt="Food logo" width="200px" height="150px"></a>
		<p id="p02">Copyright &copy; 2019 Cozy Kitchen - All rights reserved.</p>
	</footer>
	
	
	
</body>
</html>