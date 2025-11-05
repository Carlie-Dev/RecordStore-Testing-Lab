<?php 
echo "This is the records form view";
echo '<a href="?view=created">Created Test</a>';

include 'data/function.php';
echo "<form action='' method='get'>";
echo "<label for='title'>Title:</label>";
echo '<input type="text" id="title" name="title" required><br>';
echo "<label for='artist'>Artist:</label>";
echo '<input type="text" id="artist" name="artist" required><br>';
echo "<label for='price'>Price:</label>";
echo '<input type="number" id="price" name="price" step="0.01" required><br>';
echo "<label for='format'>Format:</label>";
echo '<select id="format" name="format" required>';
$formats = formats_all();
foreach ($formats as $format) {
    echo '<option value="' . htmlspecialchars($format['id']) . '">' . htmlspecialchars($format['name']) . '</option>';
}
echo '</select><br>';
echo '<input type="submit" value="created">';
echo "<input type='hidden' name='view' value='created'>";
echo "</form>";

?>

<!-- <form action="" method="get">
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
</form> -->