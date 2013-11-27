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
                    <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="about.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="construction.html">Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>
                <div id="navlog">
                    <a href="signup.php">Sign Up     </a>
                </div>
            </div>
            <div id="container3">
                <h2>Sign in:</h2>
                <form name='signup' action='' method='POST'>
                    Band Name: <input type='text' name='bandname'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Password: <input type='text' name="city">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div id="footer">
                &copy; 2013 The Characters project. William Penn University
            </div>
            <a href="userhome.php">USER HOME</a>
        </div>
    </body>
</html>