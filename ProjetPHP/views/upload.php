<?php include 'partials/header.php'; ?>

<h2>Uploader des photos</h2>
<form action="/photos/upload" method="POST" enctype="multipart/form-data">
    <label for="photo">Choisir une photo :</label>
    <input type="file" name="photo" required>

    <button type="submit">Uploader</button>
</form>

<?php include 'partials/footer.php'; ?>