<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$dbname = 'library';
		$dbpass = '';
		$root = 'localhost';
		$dbusername = 'root';
		$conn = new mysqli($root,$dbusername,$dbpass,$dbname);
		$sql = "SELECT * FROM books WHERE bookpublisher like '%".$_POST['ss']."%' OR bookname like '%".$_POST['ss']."%' OR bookid like '%".$_POST['ss']."%'";
		$result	= mysqli_query($conn,$sql);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Books List
	</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
		<div class="table">
			<table>
				<tr>
					<th>
						BOOK ID
					</th>
					<th>
						BOOK NAME
					</th>
					<th>
						BOOK PUBLISHER
					</th>
					<th>
						BOOK SHELF
					</th>
					<th>
						Actions
					</th>
				</tr>		
		<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
				if($i%2==0)
					$classname="even";
				else
					$classname="odd";
				?>
				<tr>
					<td><?php echo $row["bookid"]; ?></td>
					<td><?php echo $row["bookname"]; ?></td>
					<td class="select"><?php echo $row["bookpublisher"]; ?></td>
					<td><?php echo $row["bookshelf"]; ?></td>
					<td><a style = "color:green;" href="update.php?bookid=<?php echo $row["bookid"]; ?>">Update</a>/<a style = "color:red;" href="delete.php?bookid=<?php echo $row["bookid"]; ?>">Delete</a></td>
				</tr>
				<?php
				$i++;
			}
		?>
	</table>
	</div>
</body>
</html>