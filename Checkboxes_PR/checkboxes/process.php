 <?php

$connect=mysqli_connect('localhost','root','','mydatabase'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}

$checkbox1=$_POST['techno'];
$chk="";
foreach($checkbox1 as $chk1)
   {
      $chk .= $chk1.",";
   }
$in_ch=mysqli_query($connect,"INSERT INTO boxes(technology) VALUES ('$chk')");
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Employee Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}

?>
