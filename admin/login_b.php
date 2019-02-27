<?php
include("../do.php");
session_start();
$u=$_POST['uname'];
$p=$_POST['pass'];
$p=md5($p);
$q1="select * from register where uname='$u' and password='$p'";
$res=mysqli_query($db,$q1);
$row=mysqli_num_rows($res);


if($row==1){
	$_SESSION['aname']=$u;

  echo "1";
}
else{
  echo "your login is not successful";
}


?>