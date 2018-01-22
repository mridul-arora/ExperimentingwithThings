<?php

$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$g=$b=$a=$_POST['name'];

mysqli_query($connect,"INSERT INTO fruits(apple,banana,grapes) VALUES ($a,$b,$g)");



if(mysqli_affected_rows($connect) > 0){
	echo "<p>Fruit Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
	echo "Fruit NOT Added<br />";
	echo mysqli_error ($connect);
}

?>
