<?php

$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
$a=$_POST['name'];


$sql = "UPDATE fruits SET lastname='Doe' WHERE id=2 ";

if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>
