<?php
namespace App\Models;
use App\Config\Database;
use PDO;

class Playliste {
    private string $nom;
    private string $visibilite;
    private int $anneeSortie;
    private string $image;
    private int $userId;
    private string $type;

    public function __construct(string $nom, string $visibilite, int $anneeSortie, string $image, int $userId, string $type) {
        $this->nom = $nom;
        $this->visibilite = $visibilite;
        $this->anneeSortie = $anneeSortie;
        $this->image = $image;
        $this->userId = $userId;
        $this->type = $type;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getVisibilite(): string {
        return $this->visibilite;
    }

    public function getAnneeSortie(): int {
        return $this->anneeSortie;
    }

    public function getImage(): string {
        return $this->image;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function getType(): string {
        return $this->type;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setVisibilite(string $visibilite): void {
        $this->visibilite = $visibilite;
    }

    public function setAnneeSortie(int $anneeSortie): void {
        $this->anneeSortie = $anneeSortie;
    }

    public function setImage(string $image): void {
        $this->image = $image;
    }

    public function setUserId(int $userId): void {
        $this->userId = $userId;
    }

    public function setType(string $type): void {
        $this->type = $type;
    }

    public function saveAlbum()
{
    $conn = Database::getConnection();  
    $sql = "INSERT INTO Playlist (nom, visibilite, image, userId,type) VALUES (?, ?,?,?,?)";
    $stmt = $conn->prepare($sql);
    
    $stmt->bindValue(1, $this->nom, PDO::PARAM_STR);
    $stmt->bindValue(2, $this->visibilite, PDO::PARAM_STR);
    $stmt->bindValue(3, $this->image, PDO::PARAM_STR);
    $stmt->bindValue(4, $this->userId, PDO::PARAM_INT);
    $stmt->bindValue(5, $this->type, PDO::PARAM_INT);

    return $stmt->execute();
}

public static function getAllAlbums(int $userId){
    $conn = Database::getConnection();  

    $sql = "SELECT * from PlayListe where userId  = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $userId, PDO::PARAM_STR);
    $stmt->execute();
    $album = $stmt->fetch(PDO::FETCH_ASSOC);
    return $album; 
}

public function deleteAlbum(int $idAlbum){
    $conn = Database::getConnection();  

    $sql = "DELETE FROM PlayList WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, $idAlbum, PDO::PARAM_INT);
    $stmt->execute();
}

}
?>
