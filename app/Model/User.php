<?php 
abstract class User{
    protected int $idUser;
    protected string $username;
    protected string $email;
    protected string $password;
    protected string $role;
    protected string $image;

    public function __construct(int $idUser,string $username,string $email,string $password,string $role,string $image) {
        $this->idUser = $idUser;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->image = $image;
    }

    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function getImage(): string
    {
        return $this->image;
    }


    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    

  
    
}
    


?>