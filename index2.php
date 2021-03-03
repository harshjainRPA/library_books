<!DOCTYPE html>
<html>
<head>
	<title>
		Search Books
	</title>
	
	<meta charset="utf-8">
	<meta name=”viewport” content=”width=device-width, initial-scale=1″>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800&display=swap" rel="stylesheet">
	<script src="jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!--<link  href="css/bootstrap.css" rel="stylesheet">-->
</head>
<body>
		<div class="header">
			<div class="logo">
				<img src="https://www.ambp.in/images/ait_logo.jpeg" class="logo">
			</div>
			<span class="logoname">ONLINE LIBRARY MANAGEMENT</span>
			<div style="clear:both;"></div>
		</div>
		<section style="margin-bottom: 10px;">
			<div class="search">
					<h2>Search By : </h2>
					<input type="text" name="ss" id="ss" placeholder="Search by Book name, ID, Publisher"><br>
			</div>
		</section>
		<div id="result">
				
		</div>
		<script>
			$(document).ready(function(){
				$('#ss').keyup(function(){
					var txt = $(this).val();
					if(txt!=''){
						$.ajax({
							url : "fetch.php",
							method : "post",
							data : {ss:txt},
							dataType : "text",
							success:function(data){
								$('#result').html(data);
							}
						});
					}
					else{
						$('#result').html('');
						/*$.ajax({
							url : "fetch.php",
							method : "post",
							data : {ss:txt},
							dataType : "text",
							success:function(data){
								$('#result').html(data);
							}
						});*/
					}
				});
			});
		</script>
</body>
</html>