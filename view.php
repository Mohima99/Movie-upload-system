<?php include "db_conn.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<title>View</title>
	<style>
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 50vh;

			background: url(movie_pic2.jpg);
			background-size: cover;
			background-position: center;
			font-family: sans-serif;
		}
		a{
			color: lightgray;
			margin-top: 50px;
			transition: all 4s ease-in-out;
			text-decoration: none;
		
		}
		.album {
			width: 300px;
			height:300px;
			padding:10px;

		}
		.album img{
			width: 100%;
			height: 100%;

		}
		

	</style>


</head>
<body>
	<font size="9px" ><b><a href="index.php">&#8592; return to upload </a>  </b></font>
	<?php  
		$sql ="select * from insert_image order by id desc";
		$res = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($res) > 0) {
			while ($insert_image = mysqli_fetch_assoc($res)) {  ?>
				<div class="album">
					<img src="uploads/<?=$insert_image['image_url']?>">
				</div>
	<?php
	  		} 
		}
	?>

</body>
</html>