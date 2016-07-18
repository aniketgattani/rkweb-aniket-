<html>
<body bgcolor="#FF0077"><font color="#151515"><h1>WELCOME TO R.K.HALL </h1></font>
<basefont color="white"></basefont>


<?php
echo $user = $_REQUEST['user'];
echo $pass = $_REQUEST['pass'];

$username = stripcslashes($user);
$password = stripcslashes($pass);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$p = mysql_connect("localhost", "root", "newpassword");
mysql_select_db("login", $p);

$result = mysql_query("select * from users where username = '$username' and password = '$password'")
or die("Failed to query database ".mysql_error());
$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ){
	echo "Login success!!! Welcome ".$row['username'];
} else{
	echo "Failed to login!";
}
?>

</body>
</html>

