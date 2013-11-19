<?php
    include '_config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $app['name'] ?></title>
        <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" >
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="container" class="round shadow">
            <div id="header">
                <h3 id="headertext"></h3>
            </div>
            <div id="searchbox" >
                <label id="search" for="searchInput">
                    <input type="text" id="searchInput">
                </label>
            </div>
        </div>
        <div id="footer">
            <small>
                <?php echo $app['version'] ?>
                <br>
                <?php echo $app['baseURL'] ?>
            </small>
        </div>
    </body>
</html>