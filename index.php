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
        #apodImg { position: fixed; top: 0; left: 0; }
        .bgwidth { width: 100%; }
        .bgheight { height: 100%; }
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