<?php
namespace App\Models;
require_once __DIR__ . '/../Config/config.php';  // Correct the path to Config folder

use App\Config\Database;
use PDO;
class Category
{
    private int $id;
    private string $nom;
    private ?string $description;
    private PDO $pdo;

    public function __construct(string $nom,string $description,int $id)
    {
        $this->pdo = $pdo;
        $this->nom = $nom;
        $this->description = $description;
        $this->id = $id ?? 0;
    }





    public static function getAllCategory(): array
    {
        $conn = Database::getConnection();  
        $sql = "SELECT * FROM Category";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}
