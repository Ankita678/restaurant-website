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
					
		#d2{}
			#p03{ font-size:40px; padding:10px; font-style:bold;}
			.p04{ font-size:15px; color:red; display:inline; margin-left:10px;}
			form{}
				label{font-size:20px; padding:10px; }
				input[type="text"]{border:none; border-bottom: 2px solid #000; width:40%;}
				select{font-size:15px;}
				textarea{border:none; border-bottom: 2px solid #000; width:40%;}
				input[type="submit"]{border:2px solid #000; height:25px; background-color:#F0E68C; color:#000; font-size:15px; text-align:center; margin: 30px; cursor: pointer;}
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
	?>
	<div id="d2" style="margin-left:25%; padding: 20px 40px 40px 100px; border-left:2px solid #FFD700;">
	
		<?php
		$_SESSION["menu_edit"] = $_GET['menu'];
		$_SESSION["id_edit"] = $_GET['id'];
		$_SESSION["item_edit"] = $_GET['item'];
		$_SESSION["price_edit"] = $_GET['price'];
		$_SESSION["cat_edit"] = $_GET['cat'];
		$_SESSION["descp_edit"] = $_GET['descp'];
	
		?>
		
		<p id="p03">Edit Items</p>        
		<form action="edit_dish.php" method="post" >
			<br><br>
			<label>Dish Name : </label>
			<input type="text" name="dishhh" value="<?php echo $_SESSION['item_edit']; ?>"><!--<?php echo "<p class='p04'>" .$dishErr. "</p>";?>-->
			<br><br>
			
			<label>Edit Menu : </label>
			<select name="menuuu" ><?php echo $_SESSION['menu_edit']; ?>
			<?php
			include 'database_config.php';					
			$sql = "SELECT DISTINCT Dish_menu FROM final_menu 
					ORDER BY Dish_menu
					";			
			$result=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($result)>0){
				//echo "<option >";
				while($rows=mysqli_fetch_assoc($result)){
					echo "<option value='" .$rows["Dish_menu"]."'>".$rows["Dish_menu"]. "</option>";
				}
				//echo "</ul>";
			}
			else{
				echo "No results";
			}		
			?>
			</select>
			<br><br>
			
			<label>Edit Category : </label>
			<select name="categoryyy" ><?php echo $_SESSION['cat_edit']; ?>
			<?php
			include 'database_config.php';					
			$sql = "SELECT DISTINCT Dish_category FROM final_menu 
					ORDER BY Dish_category
					";			
			$result=mysqli_query($conn,$sql);
			
			if(mysqli_num_rows($result)>0){
				//echo "<option >";
				while($rows=mysqli_fetch_assoc($result)){
					echo "<option value='" .$rows["Dish_category"]."'>".$rows["Dish_category"]. "</option>";
				}
				//echo "</ul>";
			}
			else{
				echo "No results";
			}		
			?>
			</select>
			<br><br>
			
			<label>Price : </label>
			<input type="text" name="priceee" value="<?php echo $_SESSION['price_edit']; ?>"><!--<?php echo "<p class='p04'>" .$priceErr. "</p>";?>-->
			<br><br>
			<label>Description : </label>
			<textarea name="descppp"><?php echo $_SESSION['descp_edit']; ?></textarea><!--<?php echo "<p class='p04'>" .$descpErr. "</p>";?>-->
			<input type="submit" name="submit" value="Edit">
			<br><br>
		</form>
		
		
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>