<!DOCTYPE html>
<html>
<head>
	<title>
		Add Books
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<script type="text/javascript">
		function myfun(){
			alert('Book Inserted');
			window.location.replace("index1.html");
		}
		function error(){
			alert('You are trying to insert Book with wrong Book ID');
			window.location.replace("index1.html");
		}
	</script>
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
			<!---	<a href="logout.php">logout</a>-->
				<form method="POST" action="books.php">
          <h2 class="hhh">Add New Book</h2>
					<label for="id">Book Id</label><br>
					<input type="text" name="id" id="id" required><br>
					<label for="book_name">Book Name</label><br>
					<input type="text" name="book_name" id="book_name" required><br>
					<label for="book_publisher">Book Publisher</label><br>
					<input type="text" name="book_publisher" id="book_publisher" required><br>
					<label for="shelf">Book Shelf No.</label><br>
					<input type="text" name="shelf" id="shelf" required><br>
					<input type="submit" name="sbt" id="sbt" class="buttonbook">
					<input type="reset" name="aa" class="buttonbook">
				</form>
			</div>
		</section>
		<?php 
			if ( $_SERVER['REQUEST_METHOD']=='POST' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
			$bookid = filter_input(INPUT_POST, 'id');
			$bookname = filter_input(INPUT_POST, 'book_name');
			$bookpub = filter_input(INPUT_POST, 'book_publisher');
			$bookshelf = filter_input(INPUT_POST, 'shelf');
//--------------------
			$root = 'localhost';
			$password = '';
			$dbname = 'library';
			$dbusername = 'root';
			$conn = new mysqli($root,$dbusername,$password,$dbname);
			if(mysqli_connect_error()){
				echo "error in connection";
				die('Connect Error ('.mysqli_connect_errono().')'.mysqli_connect_error());
			}
			else{
				$sql = "INSERT INTO books(bookid,bookname,bookpublisher,bookshelf) VALUES ('$bookid','$bookname','$bookpub','$bookshelf')";
				if($conn->query($sql)){
					echo "<script>myfun();</script>";
				}
				else{
					echo "<script>error();</script>";
				}
			}
		}
?>
</body>
</html>