<?php
            include 'db_top.php';
?>
<html>
    <head>
        <title>TC Music Exchange</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="images/favicon.ico">
    </head>
    <body>
        <div id="main">
            <div id="banner">
                <img src="images/banner.jpg" alt="Welcome!" />
            </div>
            <div id="navbar">
                <div id="links">
                    <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="about.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="construction.html">Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><?php $_COOKIE['band'] ?>
                </div>
                
                <div id="navlog">
                    <a href="signup.php">Sign Up&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="signin.php">Sign In     </a>
                </div>
            </div>
            <div id="container1">
                <h2>Top Songs:</h2>
                <ol>
                    <li> <?php print_r($_COOKIE);?> </li>
                    <li> Song 2 </li>
                    <li> Song 3 </li>
                    <li> Song 4 </li>
                    <li> Song 5 </li>
                    <li> Song 6 </li>
                </ol>
            </div>
            <div id="container2">
                <h2>Top Bands:</h2>
                <ol>
                    <li> VAR 1</li>
                    <li> VAR 2</li>
                    <li> VAR 3</li>
                    <li> VAR 4</li>
                    <li> VAR 5</li>
                    <li> VAR 6</li>
                </ol>
            </div>
            <div id="container4">
                <h2>Browse Bands</h2>
                (php loop here to look for bands and add them to the list. Can be refined with organization pramators such as alphabetical sort or # of songs.)
            </div>
            <div id="footer">
                &copy; 2013 The Characters project. William Penn University
            </div>
            <a href="userprofile.php"> Profile Page. </a>
        </div>
    </body>
</html>
