<?php include 'partials/header.php'; ?>

<form action="/register.php" method="POST">
    <label for="username">Nom d'utilisateur :</label>
    <input type="text" name="username" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <div class="g-recaptcha" data-sitekey="TON_SITE_KEY"></div>

    <button type="submit">S'inscrire</button>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>