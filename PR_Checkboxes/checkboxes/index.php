<html>

<body>
    <form method="post" action="process.php">
        <div style="width:200px;border-radius:6px;margin:0px auto">
            <table border="1">
                <tr>
                    <td colspan="2">Select Technolgy:</td>
                </tr>
                <tr>
                    <td>PHP</td>
                    <td><input type="checkbox" name="techno[]" value="PHP"></td>
                </tr>
                <tr>
                    <td>.Net</td>
                    <td><input type="checkbox" name="techno[]" value=".Net"></td>
                </tr>
                <tr>
                    <td>Java</td>
                    <td><input type="checkbox" name="techno[]" value="Java"></td>
                </tr>
                <tr>
                    <td>Javascript</td>
                    <td><input type="checkbox" name="techno[]" value="javascript"></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="submit" name="sub" id="sub"></td>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>
