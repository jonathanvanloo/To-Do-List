<?php

include('taakQueries.php');

$stmt = alletaken();

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>To-Do-List</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <button type="button" class="btn btn-primary m-5"><a href="lijst.php"><h4 class="text-white">Terug</h4></a></button>
        <div class="container">
	    <table class="table table-hover table-dark">
            <tr>
                <th scope="col">beschrijving</th>
                <th scope="col">duur</th>
                <th scope="col">status</th>
            </tr>
            <?php foreach($stmt as $data) { ?>
            <tr>
                <td scope="row"><h5><?php echo $data['beschrijving'] ?></h5></td>
                <td scope="row"><h5><?php echo $data['duur'] ?></h5></td>
                <td scope="row"><h5><?php echo $data['status'] ?></h5></td>
                <td scope="row"><a href="taakUpdaten.php?id=<?php echo $data['id'] ?>&beschrijving=<?php echo $data['beschrijving'] ?>&duur=<?php echo $data['duur'] ?>&status=<?php echo $data['status'] ?>"><h4>Bewerken</h4></a></td>
                <td scope="row"><a href="taakDeleten.php?id=<?php echo $data['id'] ?>"><h4>verwijderen</h4></a></td>
            </tr>
            <?php } ?>
        </table>
            <div class="row">
            <button class="col-2 mt-2 border border-primary rounded bg-primary text-center offset-10"><a href="taakToeveogen.php"><h4 class="text-white">Toeveogen</h4></a></button>
        </div>
    </div>
    </body>
</html>
