<?php
	include 'database_config.php';
	session_start();
	/*echo $_SESSION["user"];
			echo "<br>";
			echo $_SESSION["pwd"]; */
	if($_SESSION["user"] != "Ankita" || $_SESSION["pwd"] != "abc"){
		header('Location: login.php');
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
			#b1{ margin-top:20px; cursor: pointer;}
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
	?>
	<div id="d2" style="margin-left:30%; padding: 100px 40px ;">
	<?php
		include 'database_config.php';
		$id = $_GET['id'];
		
	
		$sql = "DELETE FROM final_menu WHERE Dish_id= '$id' ";
		if(mysqli_query($conn,$sql)){
			echo "Item deleted.<br>";
			
		}
		else{
			echo "Item could not be deleted. " .mysqli_error($conn);
		}
	?>
	<p>To delete another item,</p><a href="dash_edit_del.php"><button id="b1">Click here</button></a><br><br>
	<a href="dashboard.php"><button id="b1">Back to Main menu</button></a>
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>