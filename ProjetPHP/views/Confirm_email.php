<?php include 'partials/header.php'; ?>

<h2>Confirmation de l'email</h2>
<?php
require '/ProjetPHP/Controllers/AuthControllers.php';

$auth = new AuthController();
$auth->confirmEmail();
?>

<?php include 'partials/footer.php'; ?>
