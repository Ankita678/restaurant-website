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
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	

	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<style>
		<?php
			include("external/dash.css");
		?>
			
			#d02{margin-left:30%; width:50%; padding: 20px 40px 40px;}
			#p03{ font-size:40px; padding:10px 50px; font-style:bold;}
			.p04{ font-size:15px; color:red; display:inline; margin-left:10px;}
			form{width:600px;}
				label{font-size:20px; padding:10px; }
				input[type="text"]{border:none; border-bottom: 2px solid #000; width:30%;}
				#size{margin-right:80px;}
				#qty{border:2px solid black; width:150px; margin-right:30px; margin-left:10px; height:25px;}
				select{font-size:15px;}
				textarea{border:none; border-bottom: 2px solid #000; width:40%;}
				input[type="submit"]{border:2px solid #000; padding:5px 10px; background-color:#FFD700; color:#000; font-size:18px; text-align:center; margin-left: 30px; cursor: pointer;}
				#b1{border:2px solid #000; background-color:#FFD700; color:#000; font-size:20px; text-align:center; margin-left: 30px; cursor: pointer; text-decoration:none; height:35px;}
				#b2{border:2px solid #000; background-color:#FFD700; color:#000; font-size:20px; text-align:center; margin-left: 30px; cursor: pointer; text-decoration:none; height:35px;}
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
	?>
	<div id="d02" style="margin-left:25%; padding: 20px 40px 40px 100px; border-left:2px solid #FFD700;">
		<?php
		
		$menu = $category = $dish = $price = $descp ="";
		$dishErr = $priceErr = $descpErr = "";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			$menu = test_input($_POST["menu"]);
			$category = test_input($_POST["category"]);
			if (empty($_POST["dish"])){
				$dishErr = "Enter the Dish name.";
			}
			else  {
				$dish = test_input($_POST["dish"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$dish)) {
					$dishErr = "Enter a valid Dish name."; 
				}
				else {
					$dishErr="";
				}
			}
			
			if (empty($_POST["price"])){
				$priceErr = "Enter the Dish price.";
			}
			else  {
				$price = test_input($_POST["price"]);
				if (!preg_match("/^[1-9][0-9]*$/",$price)) {   
					$priceErr = "Enter a valid Dish price."; 
				}
				else {
					$priceErr="";
				}
			}
			
				$descp= test_input($_POST["descp"]);		
		}
	
		function test_input($data)     
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		?>
		
		<p id="p03">Add Items</p>		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post" >
			<label>Select Menu : </label>
			<select name="menu">			
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
			
			<label>Select Category : </label>
			<select name="category">			
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
			
			<label>Dish Name : </label>
			<input type="text" name="dish"><?php echo "<p class='p04'>" .$dishErr. "</p>";?>
			<br><br>
			<label>Price : </label>
			<input type="text" name="price"><?php echo "<p class='p04'>" .$priceErr. "</p>";?>
			<br><br>
			<div id="dd2">
			<label id="size">Size-Name : </label>
			<label id="size">Size-Price : </label>
			<br><br>
			</div>
			<div id="dd1">
			<input id="qty" type="text" name="size_name">
			<input id="qty" type="text" name="size_price">
			<button id="b1">+</button>
			<button id="b2">-</button>
			</div>
			<br>
			
			<label>Description : </label>
			<textarea name="descp" ></textarea><?php echo "<p class='p04'>" .$descpErr. "</p>";?>
		
			<input type="submit" name="submit" value="Add">
			<br><br>
			
			
		</form>
		
		<script>
			$(document).ready(function(){
			  $("#b1").click(function(){
				$("#dd1").append("HI");
			  }),

			  $("#b2").click(function(){
				
				$("#dd1").remove();
			  });
			});
		</script>
		
		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ( ($dishErr =="" && $priceErr == "" && $descpErr == "") && ($dish != "" && $price != "")){
				$_SESSION["menu"] = $menu;
				$_SESSION["category"] = $category;
				$_SESSION["dish"] = $dish;
				$_SESSION["price"] = $price;
				$_SESSION["descp"] = $descp;
				header('Location: add_dish.php');
			}
		}
		?>
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>