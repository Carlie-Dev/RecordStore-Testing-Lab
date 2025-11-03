<?php 
// data/function.php
    require 'db.php';
    
    function formats_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM formats ORDER BY name DESC');
        return $stmt->fetchAll();
    }

    function records_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM records JOIN formats ON records.format_id = formats.id');
        return $stmt->fetchAll();
    }

    function insert_record(): void {
        $title = "";
        $artist = "";
        $price = 0.0;
        $format_id= 1;
    
        $pdo = get_pdo();
        $stmt = $pdo->prepare('INSERT INTO records (title, artist, format_id, price) VALUES (:title, :artist, :price, :format_id)');
        $stmt->execute(['New Album', 'New Artist', 19.99, 1]);
    }
?>