<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php

			print "<form  method=POST action=insert.php>";
			for($i=0;$i<4;$i++)
				{
					print "<input type=text name=txt$i >";
				}
			for($i=0;$i<4;$i++)
				{
					print "<br><input type=text name=nam$i >";
				}
		print "<button type=submit class=btn btn-primary name=sub>Submit</button>";
			print "</form>";

?>
</body>
</html>
