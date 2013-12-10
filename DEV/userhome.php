<?php
    session_start();
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
                    <a href="userhome.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="about.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="construction.html">Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><?php $_COOKIE['band'] ?>
                    <?= $_SESSION['band'];?>&nbsp;&nbsp;<a href="userprofile.php">PROFILE</a>
                </div>
                <div id="navlog">
                    <a href="logout.php">Log Out     </a>
                </div>
            </div>
            <div id="container1">
                <h2>Top Songs:</h2>
                <ol>
                    <li> </li>
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
                <?php
                $db = mysqli_connect("localhost", "music_team2", "Wi11iamPenn", "music_team2");
                $result = mysqli_query($db,"SELECT bands.band_name FROM bands");
                while($row = mysqli_fetch_array($result))
                {
                echo $row['band_name'];
                echo "<br>";
                }

                mysqli_close($db);
                ?>
            </div>
            <div id="footer">
                &copy; 2013 The Characters project. William Penn University
            </div>
            <a href="userprofile.php"> Profile Page. </a>
        </div>
    </body>
</html>
