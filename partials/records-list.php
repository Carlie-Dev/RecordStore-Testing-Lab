<?php 
    $records = records_all();
?>
<html>
    </body>
        <table>
            <tr><th>Record ID</th><th>Title</th><th>Artist</th><th>Format</th></tr>
            <?php foreach ($records as $record): ?>
                <tr>
                    <td><?php echo htmlspecialchars($record['id']); ?></td>
                    <td><?php echo htmlspecialchars($record['title']); ?></td>
                    <td><?php echo htmlspecialchars($record['artist']); ?></td>
                    <td><?php echo htmlspecialchars($record['name']); ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="id" value="<?= (int)$r['id'] ?>">
                                <input type="hidden" name="action" value="edit">
                                        <button>Edit</button>
                                    </form>
                                    <form method="post" onsubmit="return confirm('Delete this record?');">
                                        <input type="hidden" name="id" value="<?= (int)$r['id'] ?>">
                                        <input type="hidden" name="action" value="delete">
                                        <button>Delete</button>
                                    </form>
                                </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <body>
</html>