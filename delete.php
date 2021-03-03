<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$dbname = 'library';
		$dbpass = '';
		$root = 'localhost';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$dbpass,$dbname);
		if(mysqli_connect_error()){
				echo "error in connection";
				die('Connect Error ('.mysqli_connect_errono().')'.mysqli_connect_error());
			}
			else{
				$sql = "DELETE FROM books WHERE bookid = '" . $_GET['bookid'] . "'";
				//$sql = "DELETE FROM books WHERE bookid = '".$_POST['bookid']."'";
				if($conn->query($sql)){
					echo "<script>alert('Book Deleted Successfully');window.location.replace(\"index2.php\");</script>";
				}
				else{
					echo "some error occured";
				}
	}
?>
</body>
</html>