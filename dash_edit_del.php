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
					
			#d02{margin-left:30%; width:50%; padding: 20px 40px 40px;}
			table,th,td{ border:2 px solid #fff; border-collapse:collapse;}
			td{padding:20px 30px; font-size:25px;}
			button{border:none;color:#FFD700; font-size:15px; text-decoration:none;text-transform:uppercase;background-color:#000; cursor: pointer;}
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
		
	?>
	<div id="d02" style="margin-left:25%; padding: 50px 40px 40px 100px; border-left:2px solid #FFD700;">
		<?php
			include 'database_config.php';					
			$sql = "SELECT DISTINCT Dish_menu FROM final_menu
					ORDER BY Dish_menu
					";			
			$result=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($result)>0){
				echo "<table>";
				echo "<tr><th></th><th></th><th></th></tr>";
				while($rows=mysqli_fetch_assoc($result)){
					echo "<tr><td>" .$rows["Dish_menu"]. " Menu </td><td><a href='edit.php?menu=". $rows['Dish_menu']. "'><button>Edit</button></a></td><td><a href='delete.php?menu1=". $rows['Dish_menu']. "'><button>Delete</button></a></td></tr>";
				}
				echo "</table>";
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