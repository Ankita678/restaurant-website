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
				
		.d2{ }
			.h01{ font-size:30px; text-align:center;}
			.tt2{border:2px solid #FFD700; border-collapse:collapse;}
			th{font-weight:bold; font-size:20px; text-transform:uppercase; padding:20px 30px;}
			td{font-weight:normal; font-size:18px; padding:5px 30px;}	
		
		</style>
</head>
<body>
	<?php
		include("external/head1.html");
	?>
	<div class="d3">
	<?php 
		include("external/head2.html");
	?>
	<div class="d2" style="margin-left:25%; padding: 20px 40px 40px 100px; border-left:2px solid #FFD700;">
		<?php
			include 'database_config.php';
			$menu1 = $_GET["menu1"];
		
			echo "<h2 class='h01'>". $menu1." Menu</button></h2>";
			$sql = "SELECT * FROM final_menu
					WHERE Dish_menu = '$menu1'
					";
			
			$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					echo "<table class='tt2'><tr><th class='tt2'>Dish</th><th class='tt2'>Category</th><th class='tt2'>Price</th><th class='tt2'>Description</th><th class='tt2'></th></tr>";
					while($rows=mysqli_fetch_assoc($result)){
					echo "<tr><td class='tt2'>" .$rows["Dish_name"]."</td><td class='tt2'>" .$rows["Dish_category"]. "</td><td class='tt2'>" .$rows["Dish_price"]. "</td><td class='tt2'>" .$rows["Description"]."</td><td class='tt2'><a href='del_dish.php?id= $rows[Dish_id]'><button>Delete</button></a></td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "No results";
				}
		?>
	</div>
	</div>
	<?php
		//Insert into category (name) values($_POST('aedsd');
		function myTest($id){
			header("Location:dash_edit.php");
		}
		?>
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>

