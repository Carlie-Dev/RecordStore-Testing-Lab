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

    <?php 
        //Get view parameter
        $view   = filter_input(INPUT_GET, 'view') ?: 'list';
        $action = filter_input(INPUT_POST, 'action');
        echo $action;

        //NAVIGATION
        include __DIR__ . '/components/nav.php';
        if ($view === 'list')        include __DIR__ . '/partials/records-list.php';
        elseif ($view === 'create')  include __DIR__ . '/partials/records-form.php';
        elseif ($view === 'created') include __DIR__ . '/partials/record-created.php';
        // elseif ($view === 'updated') include __DIR__ . '/partials/book-updated.php';
        // elseif ($view === 'deleted') include __DIR__ . '/partials/book-deleted.php';
        else                         include __DIR__ . '/partials/records-list.php';
        //Includes the appropriate partial based on the view

        switch ($action) {
            case 'created':
                include 'partials/record-created.php';
                break;
            case 'list':
                include 'partials/records-list.php';
                break;
            case 'create':
                include 'partials/records-form.php';
                // filter_input() returns the filtered value if it succeeds, and false if it fails the filter or the variable doesn’t exist.
                $title    = trim((string)(filter_input(INPUT_POST, 'title') ?? ''));
                $artist   = trim((string)(filter_input(INPUT_POST, 'artist') ?? ''));
                $price    = (float)(filter_input(INPUT_POST, 'price') ?? 0);
                $format_id= (int)(filter_input(INPUT_POST, 'format') ?? 0);
                $genre_id = (int)(filter_input(INPUT_POST, 'genre_id') ?? 0);

               

                if ($title && $artist && $genre_id) {
                    insert_record($title, $artist, $price, $format_id, $genre_id);
                    $view = 'created';
                } else {
                    $view = 'create'; // missing fields
                }
        
                break;
            default:
                break;
            
        }
        
    ?>
</body>
</html>