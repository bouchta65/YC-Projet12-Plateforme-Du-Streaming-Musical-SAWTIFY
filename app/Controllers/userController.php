<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserEnregistrer;
use App\Models\Admin;
use App\Models\Artiste;

class UserController {

    public function registerUser() {

        if (isset($_POST['register_button'])) {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $role = $_POST['role'] ?? '';
        
            // Check if any field is empty
            if (empty($name) || empty($email) || empty($password) || empty($role)) {
                echo "<script>alert('Veuillez remplir tous les champs.');
                history.back();
                </script>";
                exit();
            }
            if (User::isEmailTaken($email)) {
                echo "<script>alert('Cet email est déjà pris.');</script>";
                return;
            } else {
                User::register($name, $email, $password, $role, "");
                $_SESSION['message'] = 'Inscription réussie!';      
                header('Location: /login');

            }
        }
        
    }

    public function loginUser(): void {
        if (isset($_POST['login_button'])) {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

        $user = User::login($email, $password);
    
        if ($user) {
            if ($user['role'] === "UtilisateurEnregistre") {
                $_SESSION['user'] = serialize(new UserEnregistrer($user['id'], $user['nom'], $user['email'], $user['motdepasse'], $user['role'], $user['image']));
                header('Location: /dashboard');
            } elseif ($user['role'] === "Artiste") {
                $_SESSION['user'] = serialize(new Artiste($user['id'], $user['nom'], $user['email'], $user['motdepasse'], $user['role'],$user['image']));
                header('Location: /ArtisteDashboard');
            } else {
                $_SESSION['user'] = serialize(new Admin($user['id'], $user['nom'], $user['email'], $user['motdepasse'], $user['role'],$user['image']));
                header('Location: /registre');
            }
        } else {
            echo "Incorrect credentials!";
        }
    }
}
    

    public function showLogin() {
        require_once __DIR__ . '/../views/login.php';
    }

    public function showRegistre() {
        require_once __DIR__ . '/../views/registre.php';
    }



   

}
