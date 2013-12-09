<?php setcookie('band', $_POST['band_name']);
$dbhost = 'localhost';
$dbuser = 'music_team2';
$dbpass = 'Wi11iamPenn';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$password = crypt(band_password);
$sql="INSERT INTO bands 
    (band_id, band_name, band_founded, band_city, band_state, band_bio, band_members, band_password, visits)
VALUES
    ('$_POST[NULL]','$_POST[band_name]','$_POST[band_founded]','$_POST[band_city]','$_POST[band_state]','$_POST[band_bio]','$_POST[band_members]','$_POST[$password]','$_POST[NULL]')";
mysql_select_db('music_team2');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
echo $_COOKIE['band'];
mysql_close($conn);
?>
<html><head><title></title></head><body><a href="../userhome.php">HOME</a></body></html>
