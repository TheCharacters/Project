<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Music Upload</title>
    </head>
    <body>
        <form name='uploadSong' action="include/upload_song.php" method="post" enctype="multipart/form-data"><br>
            <input type="file" name="upload_song">
            <input type="hidden" name="MAX_FILE_SIZE" value="8388608" />
            <input type="submit" value="submit">
        </form>
    </body>
</html>