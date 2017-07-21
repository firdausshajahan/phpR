<?php

$min_x = $_POST['minX'];
$max_x = $_POST['maxX'];
$min_y = $_POST['minY'];
$max_y = $_POST['maxY'];

// execute R,change this directory eg : C:/username/Documents/Rfolder/rfile.R
$output=exec("Rscript /Users/pdaus/Documents/Seetru/R/phpR/getPHP.R $min_x $max_x $min_y $max_y");

?>
<html>
<head>
    <title>Chart PHP <- R</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!--plotly.js-->
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <script src="js/chart.js"></script>
</head>

<body>

<div class="container">
    <div style="padding:20px;">
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>