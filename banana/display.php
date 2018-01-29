<?php

$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
///enter data here
$a=$_POST["name"];
// display data here
$result=mysqli_query($connect, "SELECT apple, banana, grapes FROM fruits");

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>apple: " . $row["apple"]. "<br>banana: " . $row["banana"]."<br>grapes: " . $row["grapes"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
