<?php 
// data/function.php
    require 'db.php';
    
    // Fetch all formats from the database
    function formats_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM formats ORDER BY name DESC');
        return $stmt->fetchAll();
    }

    // Fetch all records with their formats from the database
    function records_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM records JOIN formats ON records.format_id = formats.id');
        return $stmt->fetchAll();
    }

    function genres_all(): array {
        $pdo = get_pdo();
        $stmt = $pdo->query('SELECT * FROM `genres` ORDER BY name DESC');
        return $stmt->fetchAll();
    }
    // Insert a new record into the database
    function insert_record($title, $artist, $price, $format_id,$genre_id): void {
        $title = $title;
        $artist = $artist;
        $price = $price;
        $format_id= $format_id;
        $genre_id = $genre_id;
    
        $pdo = get_pdo();
        $stmt = $pdo->prepare('INSERT INTO records (title, artist, price, format_id, genre_id) VALUES (:title, :artist, :price, :format_id, :genre_id)');
        $stmt->execute([$title, $artist, $price, $format_id, $genre_id]);
    }
?>