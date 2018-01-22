<!DOCTYPE html>
<html>

<head>
    <title>PR:ACM</title>
    <style>
        .col-md-6 {
            font-size: 1.5em;
        }

        .col-md-2 control-label {
            font-size: 1em;
        }

        .col-md-4,
        col-sm-12 {
            font-size: 50px;
            background-color: brown;
            color: white;
            border: solid white 1px;
            text-align: center;
        }

        .col-md-12 {
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            font-size: 50px;
            background-color: brown;
            color: white;
            border: solid white 1px;
            text-align: center;
        }

    </style>

    <link href="../PR_Checkboxes/Date/datetime/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../PR_Checkboxes/Date/datetime/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../PR_Checkboxes/Date/datetime/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <legend>Fruits</legend>
        </div>
        <form action="process.php" class="form-horizontal" method="post">
            <div class="row">
                <label for="dtp_input2" class="col-md-2 control-label">Enter Name:</label>
                <div class="input-group col-md-3" data-link-field="dtp_input2">
                    <input class="form-control" type="text" placeholder="Name" id="name" name="name">
                </div>
                <label for="dtp_input2" class="col-md-2 control-label">Select Date:</label>
                <div class="input-group date form_date col-md-3" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" readonly placeholder="Date" id="date">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12 col-sm-12">
                    Select your fruits:
                </div>
            </div>
          <?php
            $name=$_POST['name'];
           ?>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <label for="one">apple</label>
                    <input type="checkbox" name="food[]" value="$name" id="one">
                </div>
                <div class="col-md-4 col-sm-12">
                    <label for="two">banana</label>
                    <input type="checkbox" name="food[]" value="$name" id="two">
                </div>
                <div class="col-md-4 col-sm-12">
                    <label for="three">grapes</label>
                    <input type="checkbox" name="food[]" value="$name" id="three">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <input type="submit" value="submit" name="sub" id="four">
                </div>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="../PR_Checkboxes/Date/datetime/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../PR_Checkboxes/Date/datetime/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../PR_Checkboxes/Date/datetime/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../PR_Checkboxes/Date/datetime/bootstrap/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <script type="text/javascript">
        $('.form_date').datetimepicker({
            // language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            // language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });

    </script>

</body>

</html>
