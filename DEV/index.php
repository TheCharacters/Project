<!DOCTYPE html>
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
                        <? print_r($_COOKIE); ?>

            <div id="bannermain">
                <img src="images/banner.jpg" alt="Welcome!" />
            </div>
            <div id="navbar">
                <div id="links">
                    <a href="index.php">Home&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="about.html">About Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="construction.html">Contact Us&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                </div>
                <div id="navlog">
                    <a href="signup.php">Sign Up&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><a href="signin.php">Sign In     </a>
                </div>
            </div>
            <div id="container1">
                <h2>Hello!</h2> Welcome to the Characters project music exchange! We have created a free place for bands such as yourselves to upload their own, original music for sharing and exposure! It is our hope that ny using this site, your band will not only be more popular, but help other bands reach the same goals you want to achieve! 
                Feel free to take a look around and start sharing the music!
                - The Developers
            </div>
            <div id="container2">
                <h2>Top 5 Bands:</h2>
                <ol>
                    <li> VAR 1</li>
                    <li> VAR 2</li>
                    <li> VAR 3</li>
                    <li> VAR 4</li>
                    <li> VAR 5</li>
                </ol>
            </div>
            <div id="container3">
                <h2>Top 5 songs:</h2>
                <ol>
                    <li> Song 1 </li>
                    <li> Song 2 </li>
                    <li> Song 3 </li>
                    <li> Song 4 </li>
                    <li> Song 5 </li>
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
            <div id="counter">
                This page has been visited <?php include('hits.php');?> times.
            </div>
            <a href="userhome.php">USER HOME</a>
        </div>
    </body>
</html>
                