<?php
	session_start();

	if(isset($_FILES['myImage'])){

		$mydir 	= "../image/".$_FILES['myImage']['name'];
		$src	= $_FILES['myImage']['tmp_name'];

		if(move_uploaded_file($src, $mydir)){
			$_SESSION['myImage']= $_FILES['myImage']['name'];
			header('location: ../view/profile.php');
		}else{
			echo "ERROR!!";
		}

	}else{
		echo "invalid!!";
	}

?>