<?php include 'getter.php';
echo $_COOKIE['dormtoken'];
echo $_COOKIE['dormuserid'];
echo $_COOKIE['dormpage'];

echo getter('https://api.dorm.com.ng/profilefetch.php');
	echo'heloo';
	?>