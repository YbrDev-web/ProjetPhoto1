<?php include 'partials/header.php'; ?>

<h2>Connexion</h2>

<?php
// Affichage des erreurs s'il y en a
if (isset($_SESSION['error'])) {
    echo "<p style='color: red;'>" . htmlspecialchars($_SESSION['error'], ENT_QUOTES, 'UTF-8') . "</p>";
    unset($_SESSION['error']); // On supprime l'erreur après affichage
}
?>

<form action="/login.php" method="POST">
    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="password">Mot de passe :</label>
    <input type="password" name="password" required>

    <!-- Google reCAPTCHA pour bloquer les bots -->
    <!-- <div class="g-recaptcha" data-sitekey="TON_SITE_KEY"></div> -->

    <button type="submit">Se connecter</button>
</form>


<!-- Script reCAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<?php include 'partials/footer.php'; ?>

