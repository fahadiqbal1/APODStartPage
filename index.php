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
        <a id="simple-menu" href="#sidr" type="button" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="right" title="Pull Out Menu">
            <span class="sr-only">Toggle navigation</span>
            <i class="fa fa-bars fa-lg"></i>
        </a>
        <div id="sidr">
            <h1 class="appName"></h1>
            <ul id="sideBarLinks"></ul>
            <p>
                <a id="headertext" class="btn btn-xs btn-link" data-toggle="tooltip" data-placement="bottom" title="Name of Background"></a>
                <input type="text" placeholder="Search Google">
                <a id="close-menu" href="#sidr" class="btn btn-info btn-xs btn-block"><i class="fa fa-sign-out fa-flip-horizontal"></i> Close Menu</a>
            </p>
        </div>
        <div id="widgetWindow" class="round">
            <div id="clockWidget" class="widget">
                <h1 id="clock"></h1>
            </div>
        </div>
    </body>
</html>