<?php

$connection = new mysqli('localhost', 'root', '', 'rk');
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
}
else {
  header('Location:pledge.html');
}
	
	$var1=$_POST['name'];
	$var2=$_POST['email'];	
	$var3=$_POST['contact'];
	$var4=$_POST['dob'];
	$var5=$_POST['address'];
	$var6=$_POST['batch'];
	$var7=$_POST['amount'];

	$sql = "INSERT INTO pledge (name, email,contact,dob,address,batch,amount)
	VALUES ('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";

	if (mysqli_query($connection, $sql)) {
		echo "<h1><script>sweetAlert('Thanks! Your message has been succesfully sent', '', 'success');</script></h1>";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($connection);
	}

mysqli_close($connection);

 ?>
