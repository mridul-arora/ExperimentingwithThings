<php include ?>
<?php
$connect=mysqli_connect('localhost','root','','Fruit'); //connection string
if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
///enter data here
if (isset($_POST['sub']))
    {
$a=$_POST['name'];
mysqli_query($connect,"INSERT INTO `fruits` (`apple`, `banana`, `grapes`) VALUES ('$a', '$a', '$a');");
    }

if(mysqli_affected_rows($connect) > 0){
	echo "<p>Fruit Added</p>";
	echo "<a href=index.php>Go Back</a>";
} else {
    echo mysqli_affected_rows($connect);
	echo "Fruit NOT Added<br />";
	echo mysqli_error ($connect);
}



?>
    <html>

    <body>
        <a href="delete.php">delete</a>
        <a href="update.php">update</a>
        <a href="display.php">Display</a>
    </body>

    </html>
