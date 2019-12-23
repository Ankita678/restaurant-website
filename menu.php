<?php
	include 'database_config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<style>
		body{font-family: 'EB Garamond', serif;}
		header{ background-color:#FFD700; margin:-10px;}
			#i01{margin:20px 20px 20px 50px;}
			h1{font-style:bold;font-size:40px; position:absolute; top:30px; left:40%; }
			#l1{list-style-type:none; position:absolute; left: 25%; top:120px; }
				.l2{display:inline; text-transform: uppercase; font-weight:bold; color:#000; padding-left:50px;font-size:25px;}
					.l01:link, .l01:visited {color:#000; text-decoration: none; }
					.l01:hover, .l01:active {color:#fff; text-decoration: none;}
					
			#l02{position:absolute;top:10px;right:1%;}
				button{border:none;color:#FFD700;text-decoration:underline;text-transform:uppercase;background-color:#000;padding: 5px 10px; cursor: pointer;}		
			#p01{position: absolute;float: right;top:100px;right: 10%;color: #000;}
			.i02{position: absolute;float: right;top:100px;right:80px;padding-right:3px;}
			.i03{position: absolute;float: right;top:100px;right:25px;}
			
		.d1{ color:#000; padding:20px 250px;}
			.h01{ font-size:30px; text-align:center;}
            .tt1{border:2px solid #fff; border-collapse:collapse;}
			th{font-weight:bold; font-size:20px; text-transform:uppercase; padding:20px 30px;}
			td{font-weight:normal; font-size:18px; padding:10px;}
			
		.d2{ color:#000; padding:20px 200px;  background-color:#FFD700; margin:0px -10px;}
			.h02{ font-size:30px; text-align:center;}
			.tt2{border:2px solid #FFD700; border-collapse:collapse;}
			th{font-weight:bold; font-size:20px; text-transform:uppercase; padding:20px 30px;}
			td{font-weight:normal; font-size:18px; padding:10px;}	
		#b1{  padding:5px; margin:5px;}	
		#foot{background-color:#FFD700;margin:20px -10px -10px -10px ;}
			#i09{ margin-left: 42%; margin-top:20px;}
			#p02{ text-align:center;color:#000;font-weight:normal; padding:20px;}
			
			
	</style>
</head>
<body>
	<header>
		<a href=""><img id="i01" src="Images/my_logo.jpg" alt="Food logo" width="200px" height="150px"></a>
		<h1>OUR MENU</h1>
		<!--<ul id="l1">
			<li class="l2"> <a class="l01" href="menu.php">Breakfast</a></li>
			<li class="l2"><a class="l01" href="menu.php">Lunch</a></li>
			<li class="l2"><a class="l01"href="menu.php">Dinner</a></li>
			<li class="l2"><a class="l01"href="menu.php">Desserts</a></li>
		</ul>-->
		<ul id="l1">
			<li class="l2"><a class="l01" href="home_page.php">home</li>
			<li class="l2"><a class="l01" href="about.html">About</li>
			<li class="l2"><a class="l01" href="menu.php">Menu</li>
			<li class="l2"><a class="l01" href="contact.html">Contact Us</li>
		</ul>
		
		<a id="l02" href="login.php"><button>Login</button></a>
		<p id="p01">Order Online,at</p>
		<a class="i02" href="home_page.php"><img src="Images/zomato.png" width="50px" height="50px"></a>
		<a class="i03" href="home_page.php"><img src="Images/swiggy.jpg" width="50px" height="50px"></a>
	</header>
	<div class="d1">
		<h2 class="h01" >BREAKFAST MENU</button></h2>
		
			<?php
				
				$sql = "SELECT * FROM final_menu 
						WHERE Dish_menu='Breakfast'
						ORDER BY Dish_category
						";
			
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<table class='tt2'><tr><th class='tt2'>Dish</th><th class='tt2'>Category</th><th class='tt2'>Price</th><th class='tt2'>Description</th><th class='tt2'></th></tr>";
					while($rows=mysqli_fetch_assoc($result)){
						echo "<tr><td class='tt2' >" .$rows["Dish_name"]."</td><td class='tt2'>" .$rows["Dish_category"]. "</td><td class='tt2'>" .$rows["Dish_price"]. "</td><td class='tt2'>" .$rows["Description"]."</td><td class='tt2'><button>Add</button></td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No results";
				}
			?>
	</div>
	
		
	<div class="d2">
		<h2 class="h02">MAIN-COURSE MENU</h2>
			<?php
				$sql = "SELECT * FROM final_menu 
						WHERE Dish_menu='Main-course'
						ORDER BY Dish_category
						";
			
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<table class='tt1'><tr><th class='tt1'>Dish</th><th class='tt1'>Category</th><th class='tt1'>Price</th><th class='tt1'>Description</th></tr>";
					while($rows=mysqli_fetch_assoc($result)){
						echo "<tr><td class='tt1' >" .$rows["Dish_name"]."</td><td class='tt1'>" .$rows["Dish_category"]. "</td><td class='tt1'>" .$rows["Dish_price"]. "</td><td class='tt1'>" .$rows["Description"]."</td><td class='tt1'><button>Add</button></td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No results";
				}
			?>
	</div>	

	<div class="d1">
		<h2 class="h01">SNACKS MENU</h2>
			<?php
			
				$sql = "SELECT * FROM final_menu 
							WHERE Dish_menu='Snacks'
							ORDER BY Dish_category
							";
			
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<table class='tt2'><tr><th class='tt2'>Dish</th><th class='tt2'>Category</th><th class='tt2'>Price</th><th class='tt2'>Description</th></tr>";
					while($rows=mysqli_fetch_assoc($result)){
						echo "<tr><td class='tt2' >" .$rows["Dish_name"]."</td><td class='tt2'>" .$rows["Dish_category"]. "</td><td class='tt2'>" .$rows["Dish_price"]. "</td><td class='tt2'>" .$rows["Description"]."</td><td class='tt2'><button>Add</button></td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No results";
				}
			?>
	</div>	
	
	<div class="d2">
		<h2 class="h02">BREADS MENU</h2>
			<?php
				
				$sql = "SELECT * FROM final_menu 
							WHERE Dish_menu='Breads'
							ORDER BY Dish_category
							";
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<table class='tt1'><tr><th class='tt1'>Item</th><th class='tt1'>Price</th></tr>";
					while($rows=mysqli_fetch_assoc($result)){
						echo "<tr><td class='tt1' >" .$rows["Dish_name"]. "</td><td class='tt1'>" .$rows["Dish_price"]. "</td><td class='tt1'><button>Add</button></td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No results";
				}
			?>
	</div>
	
	<div class="d1">
		<h2 class="h01">DESSERTS MENU</h2>
			<?php
				$sql = "SELECT * FROM final_menu 
							WHERE Dish_menu='Desserts'
							ORDER BY Dish_category
							";
			
					$result=mysqli_query($conn,$sql);
					if(mysqli_num_rows($result)>0){
						echo "<table class='tt2'><tr><th class='tt2'>Dish</th><th class='tt2'>Category</th><th class='tt2'>Price</th><th class='tt2'>Description</th></tr>";
						while($rows=mysqli_fetch_assoc($result)){
							echo "<tr><td class='tt2' >" .$rows["Dish_name"]."</td><td class='tt2'>" .$rows["Dish_category"]. "</td><td class='tt2'>" .$rows["Dish_price"]. "</td><td class='tt2'>" .$rows["Description"]."</td><td class='tt2'><button>Add</button></td></tr>";
						}
						echo "</table>";
					}
					else{
						echo "No results";
					}
			?>
	</div>
		
	<footer id="foot">
		<a href=""><img id="i09" src="Images/my_logo.jpg" alt="Food logo" width="200px" height="150px"></a>
		<p id="p02">Copyright &copy; 2019 Cozy Kitchen - All rights reserved.</p>
	</footer>
</body>
</html>	