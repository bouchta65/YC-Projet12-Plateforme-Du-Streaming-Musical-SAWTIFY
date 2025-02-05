<?php 
try {
    $conn = new PDO("pgsql:host=db;port=5432;dbname=SawtiFy", "user", "0000");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>