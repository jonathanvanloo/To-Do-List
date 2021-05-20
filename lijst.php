<?php

include('queries.php');

$stmt = allLists();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To-Do-List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container mt-5">
        <?php
        foreach($stmt as $data)
        {
        ?>
            <div class="row">
                <button href="taken.php" class="col-8 border border-primary rounded bg-dark text-white text-center"><h4><?php echo $data['Naam'] ?></h4></button>
                <button class="col-2 border border-primary rounded bg-secondary text-white text-center" onclick=""><h4><?php echo "Bewerken" ?></h4></button>
                <button class="col-2 border border-primary rounded bg-secondary text-white text-center" onclick=""><h4><?php echo "Verwijderen" ?></h4></button>
            </div>
        <?php
        }
        ?>
        <div class="row">
                <button class="col-2 mt-2 border border-primary rounded bg-primary text-white text-center offset-10"><h4><?php echo "Toeveogen" ?></h4></button>
            </div>
        </div>
    </body>
</html>