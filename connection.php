<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="project_ds";
	$link=mysqli_connect($servername,$username,$password,$database);
	
	if($link){
		echo "Connect";
	}else
	{
		echo "not connect";
	}
?>
</body>
</html>
