<?php
	include 'database_config.php';
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
			#p03{ font-size:40px; padding:10px 50px; font-style:bold;}
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
	?>
	<div id="d2" style="margin-left:30%; padding: 100px 40px 40px; ">
	<?php
		include 'database_config.php';
		
		$sql = "INSERT INTO final_menu (Dish_name,Dish_menu,Dish_category,Dish_price,Description) VALUES('$_SESSION[dish]','$_SESSION[menu]','$_SESSION[category]','$_SESSION[price]','$_SESSION[descp]')";
		if(mysqli_query($conn,$sql)){
			
			echo "Dish added.<br>";
		}
		else{
			echo "Dish could not be added. " .mysqli_error($conn);
		}
	?>
	<p>To add another dish,</p><a href="dash_add.php"><button>Click here</button></a><br><br>
	<a href="dashboard.php"><button>Back to Main menu</button></a>
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>