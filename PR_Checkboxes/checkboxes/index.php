<html>

<head>
    <title></title>
    <style>
        .col-md-3,
        col-sm-12 {
            font-size: 50px;
            background-color: brown;
            color: white;
            border: solid white 1px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <form method="post" action="process.php">

                <div class="col-md-3 col-sm-12">
                    Select your Free Time Slots:
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="1">9:30 to 10:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="1">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="2"> 10:30 to 11:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="2">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="3"> 11:30 to 12:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="3">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="4"> 12:30 to 1:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="4">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="5"> 1:30 to 2:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="5">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="6"> 2:30 to 3:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="6">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="7"> 3:30 to 4:30</label>
                    <input type="checkbox" name="techno[]" value="7php" id="7">
                </div>
                <div class="col-md-3 col-sm-12">
                    <label for="8"> 4:30 to 5:30</label>
                    <input type="checkbox" name="techno[]" value="PHP" id="8">
                </div>
                <div class="col-md-3 col-sm-12" style="">
                    <input type="submit" value="submit" name="sub" id="9">
                </div>
            </form>
        </div>
    </div>



    <!--align:center and middle-->
    <!--   <div style="width:400px;border-radius:6px;margin:2px auto">
                    <table border="1">
                        <tr>
                            <th colspan="4">Select your Free Time Slots:</th>
                        </tr>
                        <tr>
                            <td>1. 9:30 to 10:30</td>
                            <td><input type="checkbox" name="techno[]" value="PHP"></td>
                            <td>2. 10:30 to 11:30</td>
                            <td><input type="checkbox" name="techno[]" value="PHP"></td>
                        </tr>
                        <tr>
                            <td>3. 11:30 to 12:30</td>
                            <td><input type="checkbox" name="techno[]" value=".Net"></td>
                            <td>4. 12:30 to 1:30</td>
                            <td><input type="checkbox" name="techno[]" value=".Net"></td>
                        </tr>
                        <tr>
                            <td>5. 1:30 to 2:30</td>
                            <td><input type="checkbox" name="techno[]" value="Java"></td>
                            <td>6. 2:30 to 3:30</td>
                            <td><input type="checkbox" name="techno[]" value="Java"></td>
                        </tr>
                        <tr>
                            <td>7. 3:30 to 4:30</td>
                            <td><input type="checkbox" name="techno[]" value="javascript"></td>
                            <td>8. 4:30 to 5:30</td>
                            <td><input type="checkbox" name="techno[]" value="javascript"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center"><input type="submit" value="submit" name="sub" id="sub"></td>
                        </tr>
                    </table>
                </div>-->

</body>

</html>
