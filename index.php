<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/style.css">
        <title>Collection songs</title>
    </head>
    <body>
        <header>
            <div id="logo">
                <img src="https://developer.spotify.com/assets/branding-guidelines/icon3@2x.png" alt="logo">
            </div>
        </header>
        <main>
            <div class="container">
                <?php
                    include 'data.php';
                 ?>

                 <?php foreach ($albums as $key => $album) { ?>
                     <div class="album">
                         <div class="immagine"><img src="<?php echo $album['pic'] ?>" alt=""></div>
                         <div class="titolo"><?php echo $album['title'] ?></div>
                         <div class="artista"><?php echo $album['artist'] ?></div>
                         <div class="anno"><?php echo $album['year'] ?></div>
                     </div>
                <?php } ?>

                <!-- <div class="album">
                    <div class="immagine"></div>
                    <div class="titolo"></div>
                    <div class="artista"></div>
                    <div class="anno"></div>
                </div> -->
            </div>
        </main>
    </body>
</html>
