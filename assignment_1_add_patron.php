<!DOCTYPE HTML>

<html>
<head>

	<link rel="stylesheet" type="text/css" href="basic.css" />
</head>
<img src="http://profperry.com/Classes20/PHPwithMySQL/KingLibLogo.jpg" >   

<body>

<h3>Thank You for Registering!</h3>

<?php
    $fname = $_POST['fname'];
	$lname = $_POST['lname'];
    $fullname = "$fname $lname";
    $email = $_POST['email'];
    $cities = $_POST['cities'];
    
    print "<p>Name: $fullname</p>";
	print "<p>Email: $email</p>";
	print "<p>City: $cities</p>";
?>

</body>
</html>