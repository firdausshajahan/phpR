<html>
<head>
    <title>PHP -> R</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
    <div style="padding:20px;">
        <p>Pass php value to R</p>
        <div class="row">
            <div class="col-md-6">
                <form method="post" action="rphp.php">
                    <div class="form-group">
                        <label>Min Value for X axis</label>
                        <input type="text" class="form-control" name="minX"/>
                    </div>
                    <div class="form-group">
                        <label>Max Value for X axis</label>
                        <input type="text" class="form-control" name="maxX"/>
                    </div>
                    <div class="form-group">
                        <label>Min Value for Y axis</label>
                        <input type="text" class="form-control" name="minY"/>
                    </div>
                    <div class="form-group">
                        <label>Max Value for Y axis</label>
                        <input type="text" class="form-control" name="maxY"/>
                    </div
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" name="submit" value="Submit"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>