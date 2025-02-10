<?php 
class chanson{
    private int $idChanson;
    private string $titre;
    private string $Image;
    private int $idArtiste;
    private int $idCategory;


    public function __construct(int $idChanson,string $titre,string $Image,int $idArtiste,int $idCategory) {
        $this->idChanson = $idChanson;
        $this->titre = $titre;
        $this->Image = $Image;
        $this->idArtiste = $idArtiste;
        $this->idCategory = $idCategory;
    }

    
    public function getIdChanson(): int
    {
        return $this->idChanson;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getImage(): string
    {
        return $this->Image;
    }




    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    public function setImage(string $image): void
    {
        $this->image = $image;
    }


}
?>