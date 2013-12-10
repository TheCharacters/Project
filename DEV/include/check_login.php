<?php
session_start();
$_SESSION['band'] = $_POST['bandname'];
$host="localhost"; // Host name 
$username="music_team2"; // Mysql username 
$password="Wi11iamPenn"; // Mysql password 
$db_name="music_team2"; // Database name 
$tbl_name="bands"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['bandname']; 
$mypassword=$_POST['password']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM $tbl_name WHERE band_name='$myusername' and band_password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
    


// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
setcookie("check", "loggedin");
setcookie('band', 'band_name');
header("location:../userprofile.php");
}
else {    
echo "Username or Password Incorrect. Please try again.";

}
?>