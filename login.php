<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
</head>
<script type="text/javascript">
	function check(){
		alert('Either username or password is Incorrect');
		window.location.replace("index.html");
	}
</script>
<body>
	<?php 
		$uname = filter_input(INPUT_POST,'uname');
		$pass = filter_input(INPUT_POST,'pass');
		$root = 'localhost';
		$password = "";
		$dbname = 'library';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$password,$dbname);
		if(mysqli_connect_error()){
			echo "mysqlite connection";
			die('Connect_Error('.mysqli_connect_errorno().')'.mysqli_connect_error());
		}
		else{
			$sql = "SELECT username FROM login WHERE username='$uname' and password='$pass'";
			$result = $conn->query($sql);
			if(mysqli_num_rows($result) > 0){
				header('Location: index1.html');
			}
			else{
				echo "<script>check();</script>";
			}
		}
	?>
</body>
</html>