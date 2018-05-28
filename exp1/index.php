<!DOCTYPE html>
<html>

<head>
    <style>
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px;
        }

    </style>

    <title>Add Employee</title>
</head>

<body>

    <form method="post" action="process.php">
        <input type="text" name="array[]" />
        <br />
        <input type="text" name="array[]" />
        <br />
        <input type="text" name="array[]" />
        <br />
        <input type="text" name="array[]" />
        <br />
        <input type="submit" value="Add Employee">
    </form>


</body>

</html>
