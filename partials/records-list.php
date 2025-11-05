<?php 
    echo "this is the records list view";
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