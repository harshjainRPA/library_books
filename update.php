<?php
	error_reporting(0);
	if(count($_POST)>0) {
		$root = 'localhost';
		$password = '';
		$dbname = 'library';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$password,$dbname);
		$result = mysqli_query($conn,"UPDATE books set bookid='" . $_POST['id'] . "', bookname='" . $_POST['book'] . "', bookpublisher='" . $_POST['book_publisher'] . "', bookshelf='" . $_POST['shelf'] . "' WHERE bookid='" . $_POST['id'] . "'");
		$row = mysqli_fetch_array($result);
		echo "<script>alert('Book details updated');window.location.replace(\"index2.php\");</script>";
	}
	else{
		$root = 'localhost';
		$password = '';
		$dbname = 'library';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$password,$dbname);
		$sql = "SELECT * FROM books WHERE bookid = " .$_GET['bookid'];
		$result	= mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($result);

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Book Update
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800&display=swap" rel="stylesheet">
</head>
<body>
		<div class="header">
			<div class="logo">
				<img src="https://www.ambp.in/images/ait_logo.jpeg" class="logo">
			</div>
			<span class="logoname">ONLINE LIBRARY MANAGEMENT</span>
			<div style="clear:both;"></div>
		</div>
		<section>
			<div class="box">
				<form method="POST" action="update.php">
          			<h2 class="hhh">Update Book Details</h2>
					<label for="id">Book Id</label><br>
					<input type="text" name="id" id="id" required value="<?php echo $row['bookid']; ?>" readonly><br>
					<label for="book_name">Book Name</label><br>
					<input type="text" name="book" id="book" value="<?php echo $row['bookname']; ?>" required><br>
					<label for="book_publisher">Book Publisher</label><br>
					<input type="text" name="book_publisher" id="book_publisher" value="<?php echo $row['bookpublisher']; ?>" required><br>
					<label for="shelf">Book Shelf No.</label><br>
					<input type="text" name="shelf" id="shelf"  value="<?php echo $row['bookshelf']; ?>" required><br>
					<input type="submit" value="Update" name="sbt" id="sbt" class="buttonbook">
					<input type="reset" name="aa" class="buttonbook">
				</form>
			</div>
		</section>
	</body>
</html>