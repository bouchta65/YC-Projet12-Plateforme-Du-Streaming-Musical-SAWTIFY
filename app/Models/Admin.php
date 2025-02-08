<?php
require_once 'User.php';
class Admin extends User {

    public function __construct(int $idUser, string $username, string $email, string $password, string $role, string $image, string $biographie) {
        parent::__construct($idUser, $username, $email, $password, $role, $image);
    }
}

?>