<?php 
//record store test
require 'data/function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record Store Test</title>
</head>
<body>
    <h1>Record Formats</h1>
    <ul>
        <h2>Unit Test 1 — Formats</h2>
        <?php 
        $formats = formats_all();
        echo '<table>';
        echo '<tr><th>ID</th><th>Name</th></tr>';
        foreach ($formats as $format) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($format['id']) . '</td>';
            echo '<td>' . htmlspecialchars($format['name']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>

        <h2>Unit Test 2 — Records JOIN</h2>

        <?php 
        $records = records_all();
        echo '<table>';
        echo '<tr><th>Record ID</th><th>Title</th><th>Artist</th><th>Format</th></tr>';
        foreach ($records as $record) {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($record['title']) . '</td>';
            echo '<td>' . htmlspecialchars($record['artist']) . '</td>';
            echo '<td>' . htmlspecialchars($record['name']) . '</td>';
            echo '<td>' . htmlspecialchars($record['price']) . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        ?>

        <h2>Unit Test 3 — Insert </h2>
        <?php 
            insert_record();
            echo "Insert success: true, rows: 1";
            records_all();
        ?>
    </ul>
</body>
</html>