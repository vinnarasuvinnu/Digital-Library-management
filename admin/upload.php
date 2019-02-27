<?php
include('../do.php');
	$bname=$_POST['book'];
	$auth=$_POST['auth'];
	$desc=$_POST['des'];

	$filetmp1=$_FILES['bpdf']['tmp_name'];
	$filename1=$_FILES['bpdf']['name'];
	$filepath1="pictures/".$filename1;
	$uploaddir1='pictures/';
		$uploadfile1=$uploaddir1.basename($filename1);


	$filetmp=$_FILES['pimage']['tmp_name'];
	$filename=$_FILES['pimage']['name'];
	$filepath="pictures/".$filename;
	$uploaddir='pictures/';
	$uploadfile=$uploaddir.basename($filename);
	if(move_uploaded_file($filetmp, $uploadfile) && move_uploaded_file($filetmp1, $uploadfile1)){
		$q1="INSERT INTO `booklist` (`book`, `auth`, `path`, `des`,`bpath`) VALUES ('$bname', '$auth', '$uploadfile', '$desc','$uploadfile1')";
		$res=mysqli_query($db,$q1);
		if($res){
			echo '<script>alert("book added succesfully");location.href="index.php";</script>';
		}
		else{
						echo '<script>alert("book has not added ");location.href="index.php";</script>';

		}
	}
	else{
		echo "not done";
	}

	?>


