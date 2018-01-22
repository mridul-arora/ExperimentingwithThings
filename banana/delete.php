<?php

$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
$a=$_POST['name'];

// sql to delete a record
$sql = "DELETE FROM fruits WHERE name=$a";

if (mysqli_query($connect, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
