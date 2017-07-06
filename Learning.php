
<?php 
	include('connection.php'); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Learning</title>
</head>
	<title>Example01</title>
<body>
<pre>
<?php
	if($_POST['Submit'] == 1){
		$query="SELECT * FROM customerdetails WHERE fname='Dilshan'";
		$result=mysqli_query($link,$query);
		if($result){
    		echo "Records inserted successfully.";
			echo mysql_result($result,mysql_selected("lname"));
		} else{
    		echo "ERROR: Could not able to execute $query.";
		}
		
			}
?>
</pre>
<form action="Learning.php" method="post"> 
    <label>Custom id:</label>
    <input type="text" name="label1" size="10" placeholder="Custom id" value="" />
    <br/>
    <label>First Name:</label>
    <input type="text" name="label2" size="20" placeholder="First Name" value="" />
    <br/>
    <label>Last Name:</label>
    <input type="text" name="label3" size="20" placeholder="Last Name" value="" />
    <br/>
    <label>Address:</label>
    <input type="text" name="label4" size="50" placeholder="Address" value="" />
    <br/>
    <label>Arreas Amount:</label>
    <input type="text" name="label5" size="10" placeholder="Arreas Amount" value="" />
    <br/>
    <label>Extra Payment:</label>
    <input type="text" name="label6" size="10" placeholder="Extra Payment" value="" />
    <br/>
    <label>Total Payment:</label>
    <input type="text" name="label7" size="10" placeholder="Total Payment:" value="" />
    <br/>
    <button type="submit" name="Submit" id="Submit" value="1">Add</button>
    
</form>

</body>
</html>