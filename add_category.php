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
			#p03{ font-size:40px; padding:10px 50px; font-style:bold;}
			.p04{ font-size:20px; color:red; display:inline; margin-left:10px; }
			form{}
				label{font-size:20px; padding:50px; }
				input[type="text"]{border:none; border-bottom: 2px solid #000; width:40%; margin-left:50px;}
				input[type="submit"]{border:2px solid #000; height:25px; background-color:#F0E68C; color:#000; font-size:15px; text-align:center; margin-left: 50px; cursor: pointer;}
		
		
	</style>
</head>
<body>
	<?php
		include("external/head1.html");
		include("external/head2.html");
		
	?>
	<div id="d02" style="margin-left:25%; padding: 20px 40px 40px 100px;border-left:2px solid #FFD700;">
		<?php
		
		$category = "";
		$categoryErr = "";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			if (empty($_POST["category"])){
				$categoryErr = "Enter the category.";
			}
			else  {
				$category = test_input($_POST["category"]);
				if (!preg_match("/^[a-zA-Z ]*$/",$category)) {
					$categoryErr = "Only letters and white space allowed."; 
				}
				else {
					$categoryErr="";
					$_SESSION["category"] = $category;
					header('Location: addd.php');
				}
			}
		}
	
		function test_input($data)     
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		
		?>
		
		<p id="p03">Add Category</p>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> " method="post">
			<label>Enter the Category Name :</label><br><br>
			<input type="text" name="category"><?php echo "<p class='p04'>" .$categoryErr. "<br></p>";?>
			<br><br>
			<input type="submit" name="submit" value="Add Category">
			<br>
			
		</form>
	</div>
	
	<?php
		include("external/foot.html");
	?>
	
</body>
</html>