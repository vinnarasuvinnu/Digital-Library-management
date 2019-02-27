<?php

$db=mysqli_connect('localhost','root','','digital');
if(mysqli_connect_errno()){
	echo "connection went wrong";
}