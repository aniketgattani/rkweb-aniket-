 
<?php
$con = mysql_connect("localhost","root","newpassword");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("login", $con);
 
$sql="INSERT INTO users (batch, username, password)
VALUES
('$_POST[batch]','$_POST[username]','$_POST[password]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
