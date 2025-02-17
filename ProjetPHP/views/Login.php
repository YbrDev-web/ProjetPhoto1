<?php include 'partials/header.php'; ?>

<h2>Connexion</h2>
<form action="/login.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <button type="submit">Se connecter</button>
</form>

<?php include 'partials/footer.php'; ?>
