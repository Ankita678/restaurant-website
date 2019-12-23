<?php
	session_start();
	/*echo $_SESSION["user"];
			echo "<br>";
			echo $_SESSION["pwd"]; */
	if($_SESSION["user"] != "Ankita" || $_SESSION["pwd"] != "abc"){
		header('Location: Login.php');
	}
	
?>

<!DOCYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<style>
		<?php
			include("external/dash.css");
		?>
		#d1{border-right:2px solid #FFD700;	}	
		#d2{}
			.p03{ font-size:20px; padding:10px 50px;}
			.b1{ margin-left:125px;}
			.b2{ margin-left:30px;}
			.b3{ margin-left:50px;  margin-top:20px;}
		
		
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
		
	?>
	<div id="d2" style="margin-left:30%; padding: 20px 40px 40px; ">
		<?php
		include 'database_config.php';
		$sql = "INSERT INTO final_menu (Dish_category) VALUES ('$_SESSION[category]')";
		/*$sql = "CREATE TABLE `$_SESSION[category]`(
				ID INT(30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				Dish VARCHAR(30) NOT NULL,
				Category VARCHAR(30) NOT NULL,
				Price INT(3) NOT NULL,
				Description VARCHAR(100)
				)";*/
				
		if(mysqli_query($conn,$sql)){
			
			echo "<p class='p03'><b>Category added.</b><br></p>";
			
		}
		else{ 
			echo "<p class='p03'><b>Category could not be added.</b></p> " .mysqli_error($conn);
		}
		?>
		
			<p class="p03">To add dish,<a href='dash_add.php'><button class="b1">Click here</button></a><br></p>
			<p class="p03">To add another category,<a href='add_category.php'><button class="b2">Click here</button></a><br></p>
			<a href='dashboard.php'><button class="b3">Back to Main menu</button></a>	
			
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>