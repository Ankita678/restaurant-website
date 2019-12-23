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
		//echo $_SESSION["menu_edit"];
	?>
	<div id="d2" style="margin-left:30%; padding: 100px 40px 40px;">
	<?php
		/*$menu_edit = $_GET["menu"];
		$id_edit = $_GET["id"];
		$item = $_GET["item"];*/
	
		$menuuu = $categoryyy = $dishhh = $priceee = $descppp ="";
		$dishErr = $priceErr = $descpErr = "";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			
			$dishhh = test_input($_POST["dishhh"]);
			if (empty($_POST["dishhh"])){
				$dishErr = "Enter the Dish name.";
			}
			else  {
				$dishhh = test_input($_POST["dishhh"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$dishhh)) {
					$dishErr = "Only letters and white space allowed."; 
				}
				else {
					$dishErr="";
				}
			}
			$categoryyy = test_input($_POST["categoryyy"]);
			if (empty($_POST["priceee"])){
				$priceErr = "Enter the Dish price.";
			}
			else  {
				$priceee = test_input($_POST["priceee"]);
				if (!preg_match("/^[0-9]*$/",$priceee)) {
					$priceErr = "Only digits allowed."; 
				}
				else {
					$priceErr="";
				}
			}
			
				$descppp = test_input($_POST["descppp"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$descppp)) {
					$descpErr = "Only letters and white space allowed."; 
				}
				else {
					$descpErr="";
				}			
		}
	
		function test_input($data)     
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		
		/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ( $dishErr =="" && $priceErr == "" && $descpErr == ""){
				$_SESSION["menu_edit"] = $menu_edit;
				$_SESSION["category_edit"] = $categoryyy;
				$_SESSION["dish_edit"] = $dishhh;
				$_SESSION["price_edit"] = $priceee;
				$_SESSION["descp_edit"] = $descppp;
				$_SESSION["id_edit"] = $id_edit;
				

				
				header("Location: edit_dish.php?menu='$mennu'");
			}
		}*/
		
	
		include 'database_config.php';
		//echo $_SESSION[menu_edit];
		$sql = "UPDATE final_menu
				SET Dish_name = '$dishhh',Dish_menu = '$_SESSION[menu_edit]',Dish_category = '$categoryyy',Dish_price = $priceee,Description = '$descppp' WHERE Dish_id = $_SESSION[id_edit]    
				";
		if(mysqli_query($conn,$sql)){
			echo "Item edited.<br>";
			
		}
		else{
			echo "Item could not be edited. " .mysqli_error($conn);
		}				
		?>
	
	<p>To edit another item,</p><a href="dash_edit_del.php"><button>Click here</button></a><br><br><br>
	<a href="dashboard.php"><button>Back to Main menu</button></a>
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>