<?php 

require_once 'ProjetPHP/model/user.php';

class LoginControllers {
    private $userModel;

    public function __construct(){
        $this->userModel = new User();
    }

    public function showLoginForm(){
        include 'views/login.php';
    }

    public function login(){
        if(isset($_POST['email'], $_POST['password'])){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userModel->getByEmail($email);

            if($user && password_verify($password, $user['password'])){
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                header("Location: /dashboard.php");
                exit();
            }else{
                $_SESSION['error'] = "Email ou mot de passe incorrect.";
                header("Location: /login.php");
                exit();
            }
        }
    }

    public function logout(){
        session_destroy();
        header("Location: /login");
        exit();
    }
}