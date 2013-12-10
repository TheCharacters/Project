<html>
    <head>
        <title> File upload </title>
    </head>
    <body>
    <form action="acceptsong.php" method="post" enctype="multipart/form-data">
	Upload song: <input type="file" name="file" /><br/>
        Name: <input type="text" name="songname">
	<input type="submit" value="Submit" />
    </form>
    </body> 
</html>