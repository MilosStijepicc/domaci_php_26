<html>

    <head>

        <meta charset="UTF-8">
        <title>Upload images</title>
        <link rel="stylesheet" type="text/css" href="CSS/style.css">

    </head>

    <body>
        
        <form class="upload-card" action="upload.php" method="POST" enctype="multipart/form-data">
            <h2>Upload profile images</h2>
            <p>Select one or more images to upload</p>

            <input type="file" name="profileImage[]" multiple>
            <input type="submit" value="Upload">
        </form>

    </body>

</html>