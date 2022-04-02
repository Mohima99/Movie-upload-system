<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
	<style>
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;

			background: url(movie_pic.jpg);
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
			transition: all 10s ease-in-out;
		}
		a{
			color: lightgray;
			margin-top: 50px;
			transition: all 4s ease-in-out;

		
		}
		form{
			margin-top: 50px;
			transition: all 4s ease-in-out;
		}
		.form-control{
			width: 400px;
			background: transparent;
			border: none;
			outline: none;
			border-bottom: 1px solid gray;
			color: white ;
			font-size: 17px;
			margin-bottom: 16px;
		}
	</style>


</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
	
	<font size="9px" color="white"><b><a href="view.php"> Show Movie photos </a> </b></font>
	<font size="3px" color="white"><b>Click below to upload movie photos</b></font>
	
  	<form action="upload.php"
		  method="post"
		  enctype="multipart/form-data" >
		<input type="file" 
		       name="my_image">
		<input type="submit" 
		       name="submit"
		       value="Upload">

	</form>
</body>
</html>