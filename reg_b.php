<?php
include("do.php");
session_start();
$u=$_POST['uname'];
$p=$_POST['pass'];
$m=$_POST['gm'];
$p=md5($p);
$q1="INSERT INTO `userinfo` (`username`, `usermail`, `password`) VALUES ('$u', '$m', '$p')";
$res=mysqli_query($db,$q1);


if($res){
	$_SESSION['uname']=$u;

  echo "1";
}
else{
  echo "your registraion is not successful";
}


?>