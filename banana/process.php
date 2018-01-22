<?php

$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
///enter data here
$g=$b=$a=$_POST['name'];
mysqli_query($connect,"INSERT INTO fruits(apple,banana,grapes) VALUES ($a,$b,$g)");

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Fruit Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
	echo "Fruit NOT Added<br />";
	echo mysqli_error ($connect);
}


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
    <!--delte date here-->
    <html>
    <body>
<a href="delete.php">delete</a>
        <a href="update.php">update</a>
    </body>
    </html>



