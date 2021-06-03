<?php

include('taakQueries.php');

//aanroepen van een functie die de taken weergeeft
$stmt = alleTaken($_GET['id']);

//filter ASC of DESC
if (isset($_GET["filter"])) {
    if ($_GET["clicked"] == 2) {
        var_dump($_GET['clicked'] );
        $stmt = sortTaken($_GET['filter'], $_GET["clicked"]);
        $_GET["clicked"] = 1;
    } else {
        var_dump($_GET['clicked'] );
        $stmt = sortTaken($_GET['filter'], $_GET["clicked"]);
        $_GET["clicked"] = 2;
    }
}

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
                <th scope="col"><a href="taken.php?id=<?php echo $_GET['filter'] ?>&filter=duur&clicked=<?php echo $_GET['clicked'] ?>">duur</a></th>
                <th scope="col"><a href="taken.php?id=<?php echo $_GET['filter'] ?>&filter=status&clicked=<?php echo $_GET['clicked'] ?>">status</a></th>
            </tr>
            <?php foreach($stmt as $data) { ?>
            <tr>
                <td scope="row"><h5><?php echo $data['beschrijving'] ?></h5></td>
                <td scope="row"><h5><?php echo $data['duur'] ?></h5></td>
                <td scope="row"><h5><?php echo $data['status'] ?></h5></td>
                <td scope="row"><a href="taakUpdaten.php?id=<?php echo $data['id'] ?>&beschrijving=<?php echo $data['beschrijving'] ?>&duur=<?php echo $data['duur'] ?>&status=<?php echo $data['status'] ?>&listId=<?php echo $_GET['id'] ?>"><h4>Bewerken</h4></a></td>
                <td scope="row"><a href="taakDeleten.php?id=<?php echo $data['id'] ?>&listId=<?php echo $_GET['id'] ?>"><h4>verwijderen</h4></a></td>
            </tr>
            <?php } ?>
        </table>
            <div class="row">
            <button class="col-2 mt-2 border border-primary rounded bg-primary text-center offset-10"><a href="taakToeveogen.php?listId=<?php echo $_GET['id'] ?>"><h4 class="text-white">Toeveogen</h4></a></button>
        </div>
    </div>
    </body>
</html>
