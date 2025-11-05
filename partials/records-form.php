<?php 
echo "This is the records form view";
include 'data/function.php';
include 'data/db.php';
?>

<form action="" method="get">
    <label for="title">Title:</label>
    <input type="text" id="title" name="title" required><br>

    <label for="artist">Artist:</label>
    <input type="text" id="artist" name="artist" required><br>

    <label for="price">Price:</label>
    <input type="number" id="price" name="price" step="0.01" required><br>

    <label for="format">Format:</label>
    <select id="format" name="format" required>
        <?php 
            $formats = formats_all();
            foreach ($formats as $format) {
                echo '<option value="' . htmlspecialchars($format['id']) . '">' . htmlspecialchars($format['name']) . '</option>';
            }
        ?>
    </select><br>

    <input type="submit" value="Created">
</form>