<?php
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$department=$_POST['department'];
$email=$_POST['email'];

$connect=mysqli_connect('localhost','root','','mydatabase');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

//Execute the query
mysqli_query($connect,"INSERT INTO table1(first_name,last_name,department,email)
				VALUES('$first_name','$last_name','$department','$email')");


// code that will check the if added condition
// and display the content in the browser
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>
