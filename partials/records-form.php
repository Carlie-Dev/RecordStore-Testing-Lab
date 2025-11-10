
<php>
    
    
</php>
    <divy>
        <form method='post'>
            <label for='title'>Title:</label>
            <input type="text" id="title" name="title" required><br>
            <label for='artist'>Artist:</label>
            <input type="text" id="artist" name="artist" required><br>
            <label for='price'>Price:</label>
            <input type="number" id="price" name="price" step="0.01" required><br>
            <label for='format'>Format:</label>
            <select id="format" name="format" required>
                <?php 
                    $formats = formats_all();
                    foreach ($formats as $format) {
                        echo '<option value="' . htmlspecialchars($format['id']) . '">' . htmlspecialchars($format['name']) . '</option>';
                    }
                ?>
            </select><br>
            <label for='genre'>Genre:</label>
            <select id="genre" name="genre" required>
                <?php 
                    $genres = genres_all();
                    foreach ($genres as $genre) {
                        echo '<option value="' . htmlspecialchars($genre['id']) . '">' . htmlspecialchars($genre['name']) . '</option>';
                    }
                ?>
            </select><br>
            <input type="hidden" name="action" value="created">

            <div class="col-12">
                <button class="btn btn-success">Create</button>
                <a href="?view=list" class="btn btn-outline-secondary">Cancel</a>
            </div>
        </form>

     </div>


