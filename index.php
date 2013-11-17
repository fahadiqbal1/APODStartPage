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
        html{
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            max-height: 100%;
        }

        body{
            /* Workaround for some mobile browsers */
            min-height:100%;
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