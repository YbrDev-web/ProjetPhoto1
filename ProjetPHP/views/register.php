<?php include 'partials/header.php'; ?>

<h2>Inscription</h2>
<form action="/register.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <button type="submit">S'inscrire</button>
</form>

<?php include 'partials/footer.php'; ?>