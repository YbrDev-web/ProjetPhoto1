<?php

require_once 'ProjetPHP/model/user.php';

class AuthController {
    private $userModel;
    
    public function __construct() {
        $this->userModel = new User();
    }

    public function showRegisterForm() {
        echo "Formulaire d'inscription";
    }
    
    public function register() {
        if (isset($_POST['username'], $_POST['password'])) {
            if ($this->userModel->register($_POST['username'], $_POST['password'])) {
                echo "Inscription effectuée.";
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }
    
    public function showLoginForm() {
        echo "Formulaire de connexion";
    }
    
    public function login() {
        if (isset($_POST['username'], $_POST['password'])) {
            if ($this->userModel->login($_POST['username'], $_POST['password'])) {
                echo "Connexion réussie.";
            } else {
                echo "Identifiants incorrects.";
            }
        }
    }
    
    public function logout() {
        $this->userModel->logout();
        echo "Déconnexion réussie.";
    }

    public function confirmEmail() {
        if (isset($_GET['token'])) {
            if ($this->userModel->confirmEmail($_GET['token'])) {
                echo "Email confirmé avec succès.";
            } else {
                echo "Token invalide ou expiré.";
            }
        }
    }
}

?>