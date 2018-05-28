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
  .col-md-3,
        col-sm-12 {
            font-size:50px;
            background-color:brown;
            color:white;
            border:solid white 1px;
            text-align: center;
        }
        .col-md-12{
            margin-top: 0.5em;
            margin-bottom: 0.5em;
            font-size:50px;
            background-color:brown;
            color:white;
            border:solid white 1px;
            text-align: center;
        }
    </style>

    <link href="../datetime/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../datetime/bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    <link href="../datetime/bootstrap/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <legend>PR:Free Slots</legend>
        </div>
        <!--<div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>-->
        <form action="process.php" class="form-horizontal" method="post">
           <div class="container">
            <div class="row">

                <label for="dtp_input2" class="col-md-2 control-label">Enter Name:</label>
                <div class="input-group col-md-4" data-link-field="dtp_input2">
                    <input class="form-control" type="text" placeholder="Name" id="name">
                </div>
                <label for="dtp_input2" class="col-md-2 control-label">Select Date:</label>
                <div class="input-group date form_date col-md-4" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" type="text" readonly placeholder="Date" id="date">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
            </div>
               </div>

            <!--  <input type="hidden" id="dtp_input2" value="" /><br/>-->
            <!--   <div class="row">
                     <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="one">
                        <label class="custom-control-label" for="customCheck1"> 9:30 to 10:30</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="2">
                        <label class="custom-control-label" for="customCheck1"> 10:30 to 11:30</label>
                    </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="3">
                        <label class="custom-control-label" for="customCheck1"> 11:30 to 12:30</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="4">
                        <label class="custom-control-label" for="customCheck1"> 12:30 to 1:30</label>
                    </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="5">
                        <label class="custom-control-label" for="customCheck1"> 1:30 to 2:30</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="6">
                        <label class="custom-control-label" for="customCheck1"> 2:30 to 3:30</label>
                    </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-6 ">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="7">
                        <label class="custom-control-label" for="customCheck1"> 3:30 to 4:30</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="8">
                        <label class="custom-control-label" for="customCheck1"> 4:30 to 5:30</label>
                    </div>
                </div>
              </div>-->
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        Select your Free Time Slots:
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <label for="1">9:30 to 10:30</label>
                        <input type="checkbox" name="time[]" value="s1" id="1">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="2"> 10:30 to 11:30</label>
                        <input type="checkbox" name="time[]" value="2" id="2">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="3"> 11:30 to 12:30</label>
                        <input type="checkbox" name="time[]" value="3" id="3">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="4"> 12:30 to 1:30</label>
                        <input type="checkbox" name="time[]" value="4" id="4">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="5"> 1:30 to 2:30</label>
                        <input type="checkbox" name="time[]" value="5" id="5">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="6"> 2:30 to 3:30</label>
                        <input type="checkbox" name="time[]" value="6" id="6">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="7"> 3:30 to 4:30</label>
                        <input type="checkbox" name="time[]" value="7" id="7">
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <label for="8"> 4:30 to 5:30</label>
                        <input type="checkbox" name="time[]" value="8" id="8">
                    </div>
                </div>
                <div class="row">
                       <div class="col-md-12 col-sm-12">
                    <input type="submit" value="submit" name="sub" id="9">
                </div>
                </div>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="../datetime/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../datetime/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../datetime/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../datetime/bootstrap/js/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
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
