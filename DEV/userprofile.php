<?php
    session_start();
            include 'db_top.php'; 
            $data = mysql_query("SELECT * FROM bands");
            $info = mysql_fetch_array( $data );             
            print "set works"    
?>
<html>
    <head>
        <title> <?php $_COOKIE['band'] ?> - Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="CSS/style.css" type="text/css" rel="stylesheet"/>
        <link rel="icon" type="image/png" href="images/favicon.ico">
    </head>
    <body class='profile'>
        <div id="main">
            <? print_r($_COOKIE); ?>
            <div id="banner">
                <img src="images/banner.jpg" alt="Welcome!" />
            </div>
            <div id="navbar">
                <div id="links">
                    <a href="index.php">User Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="about.html">About Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="construction.html">Contact Us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </div>
                <div id="navlog">
                    <a href="logout.php">Log Out     </a>
                </div>
            </div>
            <div id="container1">
                <h2><?php 'band' ?></h2>
                Rating: VAR out of 5.
                <div id="uploads">
                    <h3> Uploaded songs:</h3>
                    <ul>
                        <li> Heart Rising (VAR) - Rating: VAR </li>
                        <li> Blackheart (VAR) - Rating: VAR</li>
                        <li> Canon in Black (VAR) - Rating: VAR</li>
                        <li> Heartbeat (VAR) - Rating: VAR</li>
                        <li> The Chicken Song (VAR) - Rating: VAR</li>
                    </ul>
                </div>
            </div>
            <div id="container2">
                Profile Pic:  
                <?php print $info ?>
            </div>
            <div id="container3">
                SEARCH
            </div>
            <div id="footer">
                &copy; 2013 The Characters project. William Penn University
            </div>
        </div>
    </body>
</html>
