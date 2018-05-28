<?php
if(isset($_POST['array'])){
// create a variable
$code=$_POST['array'];
print_r($code);
$length=count($code);

    echo"<br>$length<br>";

for($i=0;$i<$length;$i++){
echo"$code[$i]";
   }
    $a=implode($code);
}
$connect=mysqli_connect('localhost','root','','roughwork');
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

//Execute the query
mysqli_query($connect,"INSERT INTO ans(code) VALUES('$a')");


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
