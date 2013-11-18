<?php
    include '_config.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $app['name'] ?></title>
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
    <style type="text/css">
        body{
            background-image: url("http://apod.nasa.gov/apod/image/1311/auroraiceland_vetter_960.jpg");
            background-repeat: no-repeat;
            background-position: center;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        body{
            /* Workaround for some mobile browsers */
            min-height:75%;
            max-height: 85%;
        }
    </style>
</head>
<body>
<div>
    <h1 id="header">Welcome</h1>
    <div id="img"></div>
    <p>
        <small>
            <?php echo $app['version'] ?>
            <br>
            <?php echo $app['baseURL'] ?>
        </small>
    </p>
</div>
</body>
</html>