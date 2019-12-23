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
		
		#d2{margin-left:30%; width:50%; padding: 20px 40px 40px;}
			#p03{ font-size:40px; }
	</style>
</head>
<body>
	<?php
		include("external/head1.html");		
		include("external/head2.html");
	?>

		<?php
			
		?>
			
	<div id="d2" style="margin-left:25%; padding: 20px 40px 40px 100px; border-left:2px solid #FFD700;">
		<p id="p03">All Menus</p>
		<?php
			include 'database_config.php';					
			$sql = "SELECT DISTINCT Dish_menu FROM final_menu
					ORDER BY Dish_menu
					";			
			$result=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($result)>0){
				echo "<ul>";
				while($rows=mysqli_fetch_assoc($result)){
					echo "<li>" .$rows["Dish_menu"]. " Menu </li>";
				}
				echo "</ul>";
			}
			else{
				echo "No results";
			}			
		?>
	</div>

	<?php		
		include("external/foot.html");
	?>
</body>
</html>













