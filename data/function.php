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

    // function insert_record(): void {
    //     $title = "Actung Baby";
    //     $artist = "U2";
    //     $price = 60.0;
    //     $format_id= 1;
    //     $genre_id = 1;
    
    //     $pdo = get_pdo();
    //     $stmt = $pdo->prepare('INSERT INTO records (title, artist, price, format_id, genre_id) VALUES (:title, :artist, :price, :format_id, :genre_id)');
    //     $stmt->execute([$title, $artist, $price, $format_id, $genre_id]);
    // }
?>