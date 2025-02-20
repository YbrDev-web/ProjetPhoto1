<?php include 'partials/header.php'; ?>

<h2>Uploader des photos</h2>
<form action="/photos/upload" method="POST" enctype="multipart/form-data">
    <label for="photo">Choisir une photo :</label>
    <input type="file" name="photo" accept="image/*" required>
    
    <label for="description">Description :</label>
    <input type="text" name="description" placeholder="Ajoutez une description (optionnel)">
    
    <label for="privacy">Visibilité :</label>
    <select name="privacy">
        <option value="public">Public</option>
        <option value="private">Privé</option>
    </select>
    
    <button type="submit">Uploader</button>
</form>

<?php include 'partials/footer.php'; ?>