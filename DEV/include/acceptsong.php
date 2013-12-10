<?php
session_start();
if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
}
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br />";
echo "Type: " . $_FILES["file"]["type"] . "<br />";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

if (file_exists("../Files/songs/" . $_FILES["file"]["name"]))
{
echo $_FILES["file"]["name"] . " already exists. ";
}
else
{
    $upload = move_uploaded_file($_FILES["file"]["tmp_name"],
"../Files/songs/ ". $_FILES["file"]["name"]);
echo "Stored in: " . "../Files/songs/" . $_FILES["file"]["name"];
}
}
?>
<a href="../userprofile.php">PROFILE HOME</a>
<?php
if (file_exists("../Files/songs/" . $_FILES["file"]["name"]))
{
echo "yes";
}
else
{
echo "no";}
echo $upload;
?>