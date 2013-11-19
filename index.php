<?php
    include '_config.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title class="appName"></title>
        <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" >
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="css/jquery.sidr.dark.css" media="all">
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/jquery.sidr.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="fullscreen_bg" class="fullscreen_bg"/>
        <a id="simple-menu" href="#sidr" type="button" class="btn btn-default">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div id="sidr">
            <h1 class="appName"></h1>
            <p>
                <a id="headertext" class="btn btn-xs btn-link" href="#" data-toggle="tooltip" data-placement="bottom" title="first tooltip">Hover over me</a>
                <input type="text" placeholder="Search Google">
                <a id="close-menu" href="#sidr" class="btn btn-info btn-xs btn-block">Close Menu</a>
            </p>
        </div>
    </body>
</html>