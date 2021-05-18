<?php

include('connection.php');

$stmt = $conn->prepare("SELECT * FROM lijst");
$stmt->execute();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To-Do-List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm border border-primary rounded bg-dark text-white">
                    <?php echo $stmt['Naam'] ?>
                </div>
                <div class="col-sm border border-primary rounded bg-dark text-white">
                    list
                </div>
                <div class="col-sm border border-primary rounded bg-dark text-white">
                    list
                </div>
            </div>
        </div>
    </body>
</html>