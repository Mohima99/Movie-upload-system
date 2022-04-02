<?php

if (isset($_POST['submit']) && isset($_FILES['my_image']) ) {
	//echo "Hello";

	include "db_conn.php";

	echo"<pre>";
	print_r($_FILES['my_image']);
	echo"</pre>";

	$img_name = $_FILES['my_image']['name']; 
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	if($error === 0){
		if($img_size > 1250000){
			$em = "Sorry your file is too large";
			header("Location: index.php?error=$em");	
		}
		else{
			//echo "Not more than 1mb";
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg","jpeg","png");
			if (in_array($img_ex, $allowed_exs)) {
				$new_img_name = uniqid("IMG",true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name ;
				move_uploaded_file($tmp_name, $img_upload_path);

				//Insert into Database

				$sql = "INSERT INTO insert_image(image_url) 
						VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: view.php");

			}
			else{
				$em = "You can't upload this file type";
				header("Location: index.php?error=$em");
			}
			
		}

	}
	else{
		$em = "unknown error occurred!";
		header("Location: index.php?error=$em");

	}

}
else{
	header("Location: index.php");	
}

?>