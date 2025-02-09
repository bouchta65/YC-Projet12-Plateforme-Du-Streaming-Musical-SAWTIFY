<?php
namespace App\Models;
require_once __DIR__ . '/../Config/config.php';  // Correct the path to Config folder

use App\Config\Database;
use PDO;
require_once 'User.php';
require_once 'PlayListe.php';

class Artiste extends User {

    public function __construct(int $idUser, string $username, string $email, string $password, string $role, string $image) {
        parent::__construct($idUser, $username, $email, $password, $role, $image);
    }

    public function getAllAlbumsArtiste(int $userId) {
        $conn = Database::getConnection();  

        $sql = "SELECT * FROM Playlist WHERE userId = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(1, $userId, PDO::PARAM_INT);
        $stmt->execute();

        $albums = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $albums; 
    }


public function AddAlbum(string $nom, string $visibilite, string $image, int $userId,string $type){
    $Album = new PlayListe($nom, $visibilite,0, $image, $userId,$type);
    $Album->saveAlbum();
}

public function deleteAlbum(int $idAlbum){
    $Album = new PlayListe("", "",0, "",0,"");
    $Album->deleteAlbum($idAlbum);
}

}

?>