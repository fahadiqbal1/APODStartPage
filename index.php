<?php
    include '_config.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title><?php echo $app['name'] ?></title>
</head>
<body>
<div>
    <h1>Welcome</h1>
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