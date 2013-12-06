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
                    <a href="signin.php">Sign In     </a>
                </div>
            </div>
            <div id="container3">
                <h2>Sign up - It's Easy!</h2>
                <h4>Tell us a little bit about your band. </h4>
                <form name='signup' action='include/insert.php' method='post'>
                    Band Name: <input type='text' name='band_name'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    City: <input type='text' name="band_city">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    State: <select name='band_state'>
                        <option value="" selected="selected">Select a State</option>
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                    </select><br /><br />
                    Members (enter member's first and last name, followed by a comma): <input type='text' name='band_members'><br /><br />
                    Date Founded (YYYY): <input type='text' name='band_founded'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<br/><br/>
                    <textarea cols='50' rows='6' name='band_bio' maxlength='600' placeholder='Band Description (600 char or less):'></textarea>
                    <div id='inputleft'>
                        Band Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='password' name='band_password' placeholder="6 or more characters.">
                        <br/><br/>
                        Confirm Password: &nbsp;&nbsp;&nbsp;<input type='password' name='confirm'>
                        <br/><br/>
                        <input type="submit" value="Submit">
                    </div>
                  
                </form>
            </div>
            <div id="footer">
                &copy; 2013 The Characters project. William Penn University
            </div>
            <a href="userhome.php">USER HOME</a>
        </div>
    </body>
</html>
