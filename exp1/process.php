<?php
if(isset($_POST['a1'])){
    $ans1=implode($_POST['a1']);
}

$connect=mysqli_connect('localhost','root','','roughwork');
if(mysqli_connect_errno($connect)){
	echo 'Failed to connect';
}

//Execute the query
mysqli_query($connect,"INSERT INTO ans(code)VALUES('$ans1')");

// code that will check the if added condition
// and display the content in the browser
	if(mysqli_affected_rows($connect) > 0){
	echo "<p><Br>Employee Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
	echo "<br>Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>
