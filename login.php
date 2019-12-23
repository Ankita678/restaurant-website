<?php
	session_start();
?>	

<!DOCTYPE html>
<head>
	<style>
		body{background-color:#F0E68C; margin:-10px;}
		h1{font-size:40px; background-color:#F0E68C; text-align:center;padding-top: 80px;}
		div{background-color:#fff; margin:100px 300px; padding:100px;}
		form{box-sizing:border-box;}
			label{font-size:20px; width:10% }
			input[type="text"]{border:none; border-bottom: 2px solid #000; width:40%;}
			input[type="password"]{border:none; border-bottom: 2px solid #000; width:40%;}
			input[type="submit"]{border:2px solid #000; height:30px; background-color:#F0E68C; color:#000; font-size:20px; text-align:center; cursor: pointer;}
			
		button{border:2px solid #000; height:30px; background-color:#F0E68C; color:#000; font-size:20px; text-align:center; cursor: pointer;}
		
		#p01{position:absolute; margin: -200px 250px; font-size:20px;}
	</style>
	
</head>
<body> 
	<?php
		$uname = $pass = $Err = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if ((empty($_POST["uname"])) || (empty($_POST["pwd"]))) {
				$Err="Please enter Username or Password.";
			}
			else {
				$uname = test_input($_POST["uname"]);
				$pass = test_input($_POST["pwd"]);
			}
		}
			
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<h1>LOGIN PAGE</h1>
	<div>
	
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
		<label>Username</label>
		<input type="text" name="uname"><br><br>
		<label>Password</label>
		<input type="password" name="pwd" id="myInput">
		<input type="checkbox" onclick="myFunction()">Show Password<br><br>
		<input type="submit" name="submit" value="Login"><br><br>
		
	</form>
	<script>
	function myFunction() {
		var x = document.getElementById("myInput");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
	</script>
	<a href="home_page.php"><button>Back to Home-page</button></a>
	
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if( $Err !=""){
				echo "<br>";
				echo "<p id='p01'>" .$Err. "</p>";
				echo "<br>";
			}
			elseif( $Err == "" && ($uname != "Ankita" || $pass != "abc")) {
				echo "<p id='p01'>Invalid Username or Password.<br></p>";
			}
			else{
				$_SESSION["user"]="Ankita";
				$_SESSION["pwd"]="abc";
				header('Location:dashboard.php');
			}
		}
	?>
	</div>
	
	
	
	
	
</body>
</html>








