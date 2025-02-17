<?php include 'partials/header.php'; ?>

<h2>Galerie de Photos</h2>
<div class="gallery">
    <?php
    require '../model/photos.php';
    $photoModel = new photos();
    $photos = $photoModel->getAll();

    foreach($photos as $photo){
        echo "<div class='photo'>";
        echo "img src='{$photo['filepath']}' alt='{$photo['filename']}'>";
        echo "<p>{$photo['filename']}</p>";
        echo"</div>";
    }
    ?>
</div>

<?php include 'partials/footer.php'; ?>