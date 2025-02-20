<?php include 'partials/header.php'; ?>

<h2>Galerie de Photos</h2>
<div class="gallery">
    <?php
    require '../model/photos.php';
    $photoModel = new Photos(); // Correction de la casse
    $photos = $photoModel->getAll();

    if (!empty($photos)) {
        foreach ($photos as $photo) {
            echo "<div class='photo'>";
            echo "<img src='" . htmlspecialchars($photo['filepath'], ENT_QUOTES, 'UTF-8') . "' alt='" . htmlspecialchars($photo['filename'], ENT_QUOTES, 'UTF-8') . "'>";
            echo "<p>" . htmlspecialchars($photo['filename'], ENT_QUOTES, 'UTF-8') . "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Aucune photo disponible.</p>";
    }
    ?>
</div>

<?php include 'partials/footer.php'; ?>