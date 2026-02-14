<?php

    require_once ("Models/images.php");
    $img = new Images();

    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="CSS/images.css">
</head>
<body>

    <div class="container">
        <h1>Image Gallery</h1>

        <?php if(isset($_SESSION['imageErrors'])): ?>
            <?php foreach($_SESSION['imageErrors'] as $error): ?>
                <p> <?= $error ?> </p>
            <?php endforeach; ?>

            <?php unset($_SESSION['imageErrors']) ?>
        <?php endif;?>

        <div class="gallery">
            <?php foreach($img->getAllImages() as $image): ?>
                <div class="gallery-item">
                    <img src="uploads/<?= $image['image']; ?>" alt="Uploaded image">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</body>
</html>
